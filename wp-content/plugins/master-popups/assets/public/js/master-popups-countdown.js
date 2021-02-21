window.MasterPopupsCountdown = (function ($, window, document, undefined) {
  var app = {
    callbacks: [],
    dateParser: /(\s|:|\-|\/|T)/gi,
    units: {}
  };

  //Document ready
  $(function () {
    app.units = {
      seconds: MppCountdown.SECONDS,
      minutes: MppCountdown.MINUTES,
      hours: MppCountdown.HOURS,
      days: MppCountdown.DAYS,
      weeks: MppCountdown.WEEKS,
      months: MppCountdown.MONTHS,
      years: MppCountdown.YEARS,
    };

    // MasterPopupsCountdown.on('finish', function (countdownInstance, endDate) {
    //
    // });

  });

  function CountDown(element, options) {
    var _ = this;
    _.$el = $(element);
    _.timer = null;
    _.timerEnd = false;
    options = options || {};

    _.defaults = {
      popupId: 0,
      id: 0,
      fillZeros: true,
      endClass: 'expired',
      type: 'date_time',//date_time, evergreen
      expireInCookie: 'TimerExpireIn',
      resetDateCookie: 'TimerResetExpired',
      resetSessionCookie: 'TimerResetSession',
      labels: ['months', 'weeks', 'days', 'hours', 'minutes', 'seconds'],
      strings: {
        days: "days",
        hours: "hours",
        minutes: "minutes",
        months: "months",
        seconds: "seconds",
        weeks: "weeks",
        years: "years",
      },
      date: new Date().setMonth(new Date().getMonth() + 1),//next month
      expireDays: 7,
      expireHours: 0,
      dateObj: {
        year: '0000',
        month: '00',
        day: '00',
        hour: '00',
        minute: '00',
        second: '00',
      },
      currDate: {},
      nextDate: {},
      newDate: {},
      resetTimer: false,
      resetType: 'session',//auto, session, days
      resetDays: 5,
      resetHours: 0,
      resetAfterDays: 10,
    }
    _.metadata = _.$el.data('options') || {};
    if( typeof _.metadata === 'string' ){
      try {
        _.metadata = JSON.parse(_.metadata);
      } catch (e) {
        _.metadata = {};
      }
    }
    
    if( typeof _.metadata.strings !== 'object' ){
      _.metadata.strings = this.parseStrings(_.metadata.strings);
    }

    _.options = $.extend(false, {}, _.defaults, _.metadata, options);
    _.options.strings = $.extend(true, {}, _.defaults.strings, _.metadata.strings, options.strings);

    //Cookie names
    _.options.expireInCookie = 'mpp_timer_' + _.options.popupId;
    _.options.flagCookie = _.options.expireInCookie+'_flag';
    _.options.resetDateCookie = _.options.expireInCookie + '_reset_date';
    _.options.resetSessionCookie = _.options.expireInCookie + '_reset_session';

    //console.log('_.options final', _.options);

    if( _.options.labels.length > 0 ){
      this.init();
      this.build();
      this.runTimer(_.options.date);
    }

    return this;
  }

  CountDown.prototype = {
    init: function () {
      var _ = this;
      //Initial Dates
      _.options.currDate = _.initialDate(_.options.labels);
      _.options.nextDate = _.initialDate(_.options.labels);
      _.options.newDate = _.initialDate(_.options.labels);
      this.sortLabels();
    },

    sortLabels: function () {
      var _ = this;
      _.options.labels.sort(function(a, b){
        return app.units[b] - app.units[a];
      });
    },

    parseStrings: function(temp){
      var strings = {};
      temp = temp.split(',');
      if( temp.length ){
        temp.map(function(obj, index, arr) {
          obj = obj.replace(/\s/g,'').split('=');
          if( obj[0] && obj[1] ){
            switch( obj[0] ){
              case 'Days': case 'days': strings.days = obj[1]; break;
              case 'Hours': case 'hours': strings.hours = obj[1]; break;
              case 'Minutes': case 'minutes': strings.minutes = obj[1]; break;
              case 'Seconds': case 'seconds': strings.seconds = obj[1]; break;
              case 'Weeks': case 'weeks': strings.weeks = obj[1]; break;
              case 'Months': case 'months': strings.months = obj[1]; break;
              case 'Years': case 'years': strings.years = obj[1]; break;
            }
          }
        });
      }
      return strings;
    },

    build: function () {
      var _ = this;
      _.$el.html('');
      _.options.labels.forEach(function (label, index) {
        var curr = _.options.currDate[label];
        var next = _.options.currDate[label];
        _.$el.append('<div class="mpp-time mpp-time-' + label + '">');
        _.$el.find('.mpp-time').last().append('<div class="mpp-count-digit">');
        var labelString = _.options.strings[label] ? _.options.strings[label] : label;
        _.$el.find('.mpp-time').last().append('<span class="mpp-count-label">' + labelString + '</span>');
        _.$el.find('.mpp-time').last().find('.mpp-count-digit').append('<span class="mpp-count mpp-curr mpp-top">' + curr + '</span>');
        _.$el.find('.mpp-time').last().find('.mpp-count-digit').append('<span class="mpp-count mpp-next mpp-top">' + next + '</span>');
        _.$el.find('.mpp-time').last().find('.mpp-count-digit').append('<span class="mpp-count mpp-next mpp-bottom">' + next + '</span>');
        _.$el.find('.mpp-time').last().find('.mpp-count-digit').append('<span class="mpp-count mpp-curr mpp-bottom">' + curr + '</span>');
      });
    },

    initialDate: function () {
      var _ = this;
      var obj = {};
      _.options.labels.forEach(function (label, index) {
        obj[label] = '';
      });
      return obj;
    },

    extractDate: function (timeObj) {
      var _ = this;
      var obj = {};
      _.options.labels.forEach(function (label, index) {
        obj[label] = timeObj[label];
      });
      return obj;
    },

    diff: function (obj1, obj2) {
      var _ = this;
      var diff = [];
      _.options.labels.forEach(function (key) {
        if (obj1[key] !== obj2[key]) {
          diff.push(key);
        }
      });
      return diff;
    },

    getUnits: function () {
      var _ = this;
      var units = ~MppCountdown.ALL;
      _.options.labels.forEach(function (label, index) {
        units |= +(app.units[label]);
      });
      return units;
    },

    resetTimer: function (resetDateString) {
      var _ = this;
      _.runTimer( false, resetDateString );
    },

    getEndDate: function ( initialEndDateString, resetDateString ) {
      var _ = this;
      var end;
      var flagCookieValue = app.cookie.get(_.options.flagCookie);

      if( _.options.type === 'date_time' ){
        end = resetDateString || initialEndDateString;//_.options.date="2019-11-30 20:08"
        if( flagCookieValue === null ){
          app.cookie.set(_.options.flagCookie, false, 365);
        }
      } else {
        var expireInCookie = app.cookie.get(_.options.expireInCookie);
        var flagCookieValue = app.cookie.get(_.options.flagCookie);
        var today = new Date();
        if( expireInCookie === null ) {
          if( flagCookieValue === null ){
            var hours = parseFloat(_.options.expireDays) * 24;
            var minutes = parseFloat(_.options.expireHours) * 60;
            var expire = new Date(today.setHours( today.getHours() + hours, today.getMinutes() + minutes ));
            var cookieDays = (hours + parseFloat(_.options.expireHours))/24;
            end = _.formatDate(expire);
            app.cookie.set(_.options.expireInCookie, end, cookieDays);
            app.cookie.set(_.options.flagCookie, false, 365);
          } else {
            end = resetDateString || today;
          }
        } else {
          end = expireInCookie;
        }
      }
      
      if( typeof end === 'string' ){
        end = end.replace(/\s/, 'T');//For Safari
      }

      return end instanceof Date ? end : new Date(end);
    },

    runTimer: function ( initialEndDateString, resetDateString ) {
      var _ = this;
      clearInterval(_.timer);
      //_.options.date="2019-11-30 20:08"
      //_.options.date = initialEndDateString || resetDateString;
      var end = _.getEndDate( initialEndDateString, resetDateString );
      _.timer = setInterval(function () {
        var start = Date.now();
        var timerObj = MppCountdown(start, end, _.getUnits());
        _.options.newDate = _.extractDate(timerObj);

        if (JSON.stringify(_.options.newDate) !== JSON.stringify(_.options.nextDate)) {
          _.options.currDate = _.options.nextDate;
          _.options.nextDate = _.options.newDate;

          _.diff(_.options.currDate, _.options.nextDate).forEach(function (label) {
            var $node = _.$el.find('.mpp-time-' + label + ' .mpp-count-digit');
            $node.removeClass('mpp-flip');
            $node.find('.mpp-curr').text(_.parseDigit(_.options.currDate[label]));
            $node.find('.mpp-next').text(_.parseDigit(_.options.nextDate[label]));
            // Esperar un repintado para luego voltear
            setTimeout(function () {
              $node.addClass('mpp-flip');
            }, 50);
          });
        }

        //Timer end!
        if (timerObj.value < 0) {
          clearInterval(_.timer);
          _.processEndTimer(timerObj);
        }
      }, 100);
    },

    processEndTimer: function (timerObj) {
      var _ = this;
      if( ! _.options.resetTimer ){
        app.cookie.remove(_.options.flagCookie);
        app.cookie.remove(_.options.resetDateCookie);
        app.cookie.remove(_.options.resetSessionCookie);
        _.onEndCountdown(timerObj.end);
        return;
      } else {
        if( _.options.resetType == 'auto' ){
          var resetDate = _.createCookieResetDate();
          _.resetTimer( resetDate );
          return;
        }
      }

      var resetDateCookieValue = app.cookie.get(_.options.resetDateCookie);
      var resetSessionCookieValue = app.cookie.get(_.options.resetSessionCookie);

      if( resetDateCookieValue !== null ){
        _.resetTimer( resetDateCookieValue );
        return;
      }

      if( resetSessionCookieValue !== null ){
        //Existe cookie sessión, sólo mostrar mensaje de expiración
        _.onEndCountdown(timerObj.end);
      } else {
        //Verificar si cookie de sessión ya fue creada previamente
        var flagCookieValue = app.cookie.get(_.options.flagCookie);
        if( flagCookieValue === 'true' ){
          //Quiere decir que la cookie de session ya fue creada y como no existe entonces ya expiró
          //Crear cookie reset date y reiniciar timer
          var resetDate = _.createCookieResetDate();
          _.resetTimer( resetDate );
          app.cookie.set(_.options.flagCookie, false, 365);//indicar que la cookie session nunca fue creda
        } else if( flagCookieValue === 'false' ){
          //Quiere decir que la cookie de session nunca fue creada, crear
          _.createCookieResetSession();
          app.cookie.set(_.options.flagCookie, true, 365);//indicar que la cookie session ya fue creada
          _.onEndCountdown(timerObj.end);
        }
      }
    },

    // processEndTimerOld: function (timerObj) {
    //   var _ = this;
    //   if( ! _.options.resetTimer ){
    //     app.cookie.remove(_.options.resetSessionCookie);
    //     app.cookie.remove(_.options.resetDateCookie);
    //     _.onEndCountdown(timerObj.end);
    //     return;
    //   } else {
    //     if( _.options.resetType == 'auto' ){
    //       var resetDate = _.createCookieResetDate();
    //       _.resetTimer( resetDate );
    //       return;
    //     }
    //   }
    //
    //   var resetDateCookieValue = app.cookie.get(_.options.resetDateCookie);
    //   var resetSessionCookieValue = app.cookie.get(_.options.resetSessionCookie);
    //   if( resetDateCookieValue === null ){
    //     _.createCookieResetDate();
    //     _.createCookieResetSession();
    //     _.onEndCountdown(timerObj.end);
    //   } else {
    //     //Verificamos cookie sessión
    //     if( resetSessionCookieValue === null ){
    //       _.resetTimer(resetDateCookieValue);
    //     } else {
    //       _.onEndCountdown(timerObj.end);
    //     }
    //   }
    // },

    createResetDate: function () {
      var _ = this;
      var today = new Date();
      var hours = parseFloat(_.options.resetDays) * 24;
      var minutes = parseFloat(_.options.resetHours) * 60;
      var newExpire = new Date(today.setHours( today.getHours() + hours, today.getMinutes() + minutes ));
      return _.formatDate(newExpire);
    },

    createCookieResetDate: function () {
      var _ = this;
      var resetDateCookieValue = app.cookie.get(_.options.resetDateCookie);
      if( resetDateCookieValue === null ){
        var cookieDays = parseFloat(_.options.resetDays) + parseFloat(_.options.resetHours)/24;
        var newExpireValue = _.createResetDate();
        app.cookie.set(_.options.resetDateCookie, newExpireValue, cookieDays);//New expire cookie
        return newExpireValue;
      } else {
        return resetDateCookieValue;
      }
    },

    createCookieResetSession: function () {
      var _ = this;
      var resetSessionCookieValue = app.cookie.get(_.options.resetSessionCookie);
      //Sólo crear la cookie una sóla vez
      var sessionCookieDays = _.options.resetType == 'session' ? 0 : parseInt(_.options.resetAfterDays);
      if( resetSessionCookieValue === null ){
        app.cookie.set(_.options.resetSessionCookie, true, sessionCookieDays);//Session cookie
      }
    },

    formatDate: function (date) {
      var year = date.getFullYear().toString();
      var month = (date.getMonth() + 101).toString().substring(1);
      var day = (date.getDate() + 100).toString().substring(1);
      var hours = ("0" + date.getHours()).slice(-2).toString();
      var minutes = ("0" + date.getMinutes()).slice(-2).toString();
      var seconds = ("0" + date.getSeconds()).slice(-2).toString();
      return year + "-" + month + "-" + day + " " + hours + ":" + minutes + ":" + seconds;
    },

    parseDigit: function (digit) {
      var _ = this;
      if( _.options.fillZeros && digit < 10 ){
        return '0' + digit.toString();
      }
      return digit;
    },

    onEndCountdown: function (endDate) {
      var _ = this;
      if( _.timerEnd ){
        return;
      }
      _.timerEnd = true;
      _.$el.find('.mpp-count').text(_.options.fillZeros ? '00': '0');
      _.$el.addClass(_.options.endClass);
      app.callEvents('finish', this, endDate);
    },

    callFunction: function (event, callback, timerObj) {
      var _ = this;
      if ($.isFunction(callback)) {
        callback.call(_, timerObj.end);
      }
      app.callEvents(event, _, timerObj.end);
    },
  }

  app.on = function (event_name, callback) {
    app.callbacks.push({
      name: event_name,
      callback: callback,
    });
  }

  app.callEvents = function (event_name, countdownInstance, endDate) {
    app.callbacks.map(function (obj) {
      if (obj.name === event_name && typeof obj.callback === 'function') {
        obj.callback.call(this, countdownInstance, endDate);
      }
    });
  };

  app.cookie = {
    set: function (name, value, days) {
      if( MPP_PUBLIC_JS.is_admin ) return;//No usar cookies desde el admin
      var expires = "";
      if (days) {
        days = parseFloat(days, 10);
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
      }
      document.cookie = name + "=" + value + expires + "; path=/";
    },
    get: function (name) {
      if( MPP_PUBLIC_JS.is_admin ) return null;//No usar cookies desde el admin
      var nameEQ = name + "=";
      var ca = document.cookie.split(';');
      for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ') {
          c = c.substring(1, c.length);
        }
        if (c.indexOf(nameEQ) === 0) {
          return c.substring(nameEQ.length, c.length);
        }
      }
      return null;
    },
    remove: function (name) {
      if( MPP_PUBLIC_JS.is_admin ) return;//No usar cookies desde el admin
      this.set(name, "", -1);
    }
  };

  $.fn.MasterPopupsCountdown = function (options) {
    return this.each(function () {
      $(this).data('MasterPopupsCountdown', new CountDown(this, options));
    });
  };

  return app;

})(jQuery, window, document);












