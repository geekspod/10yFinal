jQuery(document).ready( function($) {

  var menuCollapse = function() {
    var menu = $('#adminmenu');
    var items = menu.find('.wp-has-submenu > a');

    items.on( 'click', function(e) {
      if(! $('body').hasClass('folded') ){
        e.preventDefault();

        if( $(this).parent().hasClass('tamed-menu-open') ){
          $(this).parent().removeClass("tamed-menu-open");
        } else {
          items.parent().removeClass("tamed-menu-open");
          $(this).parent().addClass("tamed-menu-open");
        }
      }
    });
  };

  if( $('body.tamed-theme-clean').length > 0 ){
    menuCollapse();
  };

});