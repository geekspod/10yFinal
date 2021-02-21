(function($) {

    'use strict';

    jQuery(document).ready(function () {

        // object fit

        objectFitImages();


        // mobile menu

        $('.hamburger').on('click', function(){
            $(this).toggleClass('is-active');
            $('.mobile-nav').toggleClass('is-active');
            $('header').toggleClass('menu-opened');
        });

        $('.intro-mobile-menu li a').on('click', function () {
            $('.hamburger').removeClass('is-active');
            $('.mobile-nav').removeClass('is-active');
            $('header').removeClass('menu-opened');
        });

        $('.mobile-menu li.menu-item--has-child').on('click', function () {
            $(this).toggleClass('sub-menu-opened').children('.sub-menu').stop().slideToggle(300);
        });


        // filter trigger

        function filterTrigger() {

            var filterTrigger = $('.filter-trigger');

            if(!filterTrigger.length) return;

            filterTrigger.on('click', function () {
                $('body').find('.filter-backdrop').addClass('is-active');
                $('body').find('.aside-holder').addClass('is-active');
            });

            var close = $('.close-aside');

            close.on('click', function () {
                $('body').find('.filter-backdrop').removeClass('is-active');
                $('body').find('.aside-holder').removeClass('is-active');
            });

            var backdrop = $('.aside-holder, .filter-backdrop');

            backdrop.swipe( {
                swipeLeft:function() {
                    $('.aside-holder').removeClass('is-active');
                    $('.filter-backdrop').removeClass('is-active');
                },
                threshold:50
            });

        }

        filterTrigger();

        $(document).on('click', function(event) {
            if( $(event.target).closest(".filter-trigger, .aside-holder").length) return;
            $('.filter-backdrop').removeClass('is-active');
            $('.aside-holder').removeClass('is-active');
            event.stopPropagation();
        });

        // password view

        function passwordView() {

            var passwordTrigger = $('.password-trigger');

            if(!passwordTrigger.length) return;

            passwordTrigger.on('click', function() {

                $(this).toggleClass('active');

                var input = $($(this).attr('toggle'));

                if (input.attr('type') == 'password') {
                    input.attr('type', 'text');
                } else {
                    input.attr('type', 'password');
                }
            });

        }

        passwordView();


        // fancy video

        function fancybox() {

            var fancybox = $('.fancy-video');

            if(!fancybox.length) return;

            fancybox.fancybox();

        }

        fancybox();


        // info-box hover

        var $box = $('.info-box');
        if ( $box.length ) {
            $box.find('.info-box__hidden').slideUp('0');
            $('.info-box').hover(function(){
                $(this).find('.info-box__hidden').stop().slideDown('70');
            },
            function(){
                $(this).find('.info-box__hidden').stop().slideUp('70').removeAttr("style");
            }
            );
        }


        // form input

        function formField() {

            var formField = $('.form-field');

            if(!formField.length) return;

            formField.on('change', function() {
                var $this = $(this);
                var $thisField = $this.find('input');
                if ($this.val() !== "") {
                    $this.addClass('field--filled');
                } else {
                    $this.removeClass('field--filled');
                }
            });

        }

        formField();


        // gallery filter

        function gallery() {

            var gallery = $('.gallery'),
            title = $('.filter-header .header__title');

            if(!gallery.length) return;

            gallery.isotope({
                itemSelector: '.gallery-item',
            });

            // gallery filter on click

            var $grid = $('.gallery').isotope({
                itemSelector: '.gallery-item',
            });

            title.on('click', function() {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({ filter: filterValue });
            });

            // gallery buttons active

            title.on('click', function () {
                title.removeClass('active');
                $(this).addClass('active');
            });

        }

        gallery();


        // gallery filter

        function productGallery() {

            var productGallery = $('.products-gallery'),
            title = $('.filter-header .header__title');

            if(!productGallery.length) return;

            productGallery.isotope({
                itemSelector: '.products-item',
            });

            // gallery filter on click

            var $grid = $('.products-gallery').isotope({
                itemSelector: '.products-item',
            });

            title.on('click', function() {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({ filter: filterValue });
            });

            // gallery buttons active

            title.on('click', function () {
                title.removeClass('active');
                $(this).addClass('active');
            });

        }

        productGallery();


        // blog masonry

        function masonry() {

            var masonry = $('.blog-masonry');

            if(!masonry.length) return;

            masonry.isotope({
                itemSelector: '.masonry-item',
                percentPosition: true,
            });

        }

        masonry();


        function counter() {

            var counter = $('.counter');

            if(!counter.length) return;

            counter.counterUp({
                delay: 10,
                time: 1500
            });

            $( '.elementor-invisible' ).each( function(i) {
                var $el = $( this ),
                animdata = $el.data( 'settings' ),
                anim = animdata.animation,
                delay = animdata.animation_delay;
                if ( anim ) {
                    if ( delay ) {

                        $el.waypoint( function( direction ) {
                            setTimeout(function(){
                                $el.removeClass( 'elementor-invisible' ).addClass( anim );
                            }, delay);
                        }, { offset: '90%' } );

                    } else {

                        $el.waypoint( function( direction ) {
                            $el.removeClass( 'elementor-invisible' ).addClass( anim );
                        }, { offset: '90%' } );

                    }
                }
            } );
            
        }

        counter();


        // faq toggle

        function accordion() {

            var accordion = $('.accordion-item');

            if(!accordion.length) return;

            $('.accordion-item .title-block').on('click', function() {
                $(this).children('.icon').toggleClass('active');
                $(this).parent().children('.content-block').stop().slideToggle(300);
            });

        }

        accordion();


        // range slider

        function rangeSlider () {

            var rangeSlider = $('.range-slider');

            if(!rangeSlider.length) return;

            var min = $('.range-value.min'),
            max = $('.range-value.max');

            rangeSlider.ionRangeSlider({
                type: 'double',
                min: 0,
                max: 13000,
                from: 0,
                to: 10350,
                skin: 'round',
                step: 10,
                onChange: function (data) {

                    min.val(data.from);
                    max.val(data.to);

                }
            });

        }

        rangeSlider();


        // aside toggles

        function asideToggle() {

            var asideToggle = $('.catalog-aside .toggler');

            if(!asideToggle.length) return;


            asideToggle.on('click', function() {
                $(this).toggleClass('active').next('.toggle-item').stop().slideToggle(300);
            });

        }

        asideToggle();


        // quantity

        function quantity() {

            var count = $('.count-block'),
            minus = $('.minus'),
            plus = $('.plus');

            if(!count.length) return;

            minus.on('click', function () {
                var $input = $(this).parent().find('input');
                var count = parseInt($input.val()) - 1;
                count = count < 1 ? 1 : count;
                $input.val(count);
                $input.change();
                return false;
            });

            plus.on('click', function () {
                var $input = $(this).parent().find('input');
                $input.val(parseInt($input.val()) + 1);
                $input.change();
                return false;
            });

        }

        quantity();


        // alert close

        function alertClose() {

            var alert = $('.alert'),
            close = $('.alert .close');

            if(!alert.length) return;

            close.on('click', function () {
                $(this).parent('.alert').fadeOut(300);
            });

        }

        alertClose();


        // tag close

        function tagClose() {

            var tag = $('tag'),
            close = $('.tag .close');

            close.on('click', function () {
                $(this).parent('.tag').hide();
            });

        }

        tagClose();


        // tooltip

        $('[data-toggle="tooltip"]').tooltip('show');


        // scroll to id

        function scrollTo () {

            var scrollTo = $('a.anchor[href^="#"]');

            if (!scrollTo.length) return;

            $('a.anchor[href^="#"]').bind("click", function (e) {

                var anchor = $(this);
                $('html, body').stop().animate({
                    scrollTop: $(anchor.attr('href')).offset().top
                }, 600);
                e.preventDefault();

            });

        }

        scrollTo();


        // scroll to id
        function headerScrollToId() {
            var scroll = new SmoothScroll('.header a[href*="#"]', {
                ignore: '[data-scroll-ignore]',
                header: null,
                topOnEmptyHash: true,
                speed: 500,
                speedAsDuration: false,
                durationMax: null,
                durationMin: null,
                clip: true,
                offset: function (anchor, toggle) {
                    return 500;
                },
                easing: 'easeInOutCubic', // Easing pattern to use
                customEasing: function (time) {
                    return time < 0.5 ? 2 * time * time : -1 + (4 - 2 * time) * time;

                },
                updateURL: true,
                popstate: true,
                emitEvents: true
            });
        }

        headerScrollToId();

        function ptBackToTop () {
            var ptBackToTop = $('#js-back-to-top'),
            $window = $(window);

            if (ptBackToTop.length){
                ptBackToTop.on('click', function(e){
                    $('html, body').animate({
                        scrollTop: 0
                    }, 500);
                    return false;
                });
                $window.scroll(function(){
                    $window.scrollTop() > 750 ? ptBackToTop.stop(true.false).addClass('show') : ptBackToTop.stop(true.false).removeClass('show');
                });
            };
        }
        ptBackToTop ();

        function introFixed() {

            var header = $('.intro-header');

            if(!header.length) return;

            if ($(window).width() > 992) {

                $(window).on('scroll', function(){
                    if ($(window).scrollTop() > 0) {
                        header.addClass('fixed-header')
                    }

                    else {
                        header.removeClass('fixed-header');
                    }
                });

            }

        }

        introFixed();

    });

}(jQuery));
