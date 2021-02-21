(function($) {

    /*-- Strict mode enabled --*/
    'use strict';

    /* svg load and animation
    ================================================== */
    function _wrapRelatedTitle () {

        var text = $('.related.products > h2').text();
        $('.related.products > h2').addClass('__title');
        var split = text.split(' ');
        var firstLetter = split[0];
        var rest = split.splice(1,split.length)
        $('.related.products > h2').html('<span>' + firstLetter +'</span> ' + rest.join(''));
        $('.related.products > h2').wrap('<div class="section-heading"></div>');

    }
    $(document).ready(function() {

        var text = $('.woocommerce-message .button').text();

        /* wrapRelatedTitle
        ================================================== */
        _wrapRelatedTitle();

        /*
        Carusel News
        */
        (function($){
            var $reviewsLink =  $('.product-about .woocommerce-review-link'),
            $navtabs = $('.nav.nav-tabs'),
            $reviewstabs = $('.product-info-tabs .tabs-header__title'),
            $reviewstab = $('.product-info-tabs #tab_title_reviews'),
            $reviewstab2 = $('.product-info-tabs .tabs-header__title:not(#tab_title_reviews)'),
            $reviewsContent = $('#tab-title-reviews'),
            $defaultContent = $('.tabs-content__item'),
            $window = $(window);

            if(!$reviewstabs.length) return;

            //if ($reviewsLink.length && $reviewstabs.length){
            $reviewsLink.on('click', function(e){
                $navtabs.addClass('active');
                $reviewstabs.removeClass('active');
                $reviewstab.addClass('active');
                $defaultContent.hide();
                $reviewsContent.show();
                scrollToReview();
                //return false;
            });
            $reviewstab2.on('click', function(e){
                $reviewsContent.hide();
            });
            $window = $(window);

            function scrollToReview(){
                $("html, body").animate({
                    scrollTop: $('#tab_title_reviews').offset().top -221
                }, 1000);
                return false;
            };
            //};
        })(jQuery);

    });
}(jQuery));


/*
Carusel News
*/
(function($){
    var $jsCarouselProducts = $('#mainContent .js-carousel-products');
    if ($jsCarouselProducts.length){
        $jsCarouselProducts.slick({
            dots: false,
            arrows: true,
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            adaptiveHeight: true,
            responsive: [
                {
                    breakpoint: 1025,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }
            ]
        });
    };
})(jQuery);
