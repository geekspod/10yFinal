(function($) {

    'use strict';

    jQuery(document).ready(function () {

        //  --- SLIDERS START --- //

        // products slider

        function productsSlider() {

            var productsSlider = $('.r-products-slider');

            if(!productsSlider.length) return;

            productsSlider.slick({
                arrows: false,
                dots: true,
                slidesToShow: 4,
                slidesToScroll: 2,
                appendDots: '.products-slider-dots',
                responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 2,
                    }
                }, {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    }
                }, {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                }]
            });

        }

        productsSlider();
        // additional slider

        function additionalSlider() {

            var additionalSlider = $('.additional-slider');

            if(!additionalSlider.length) return;

            additionalSlider.not('.slick-initialized').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: false,
                dots: true,
                appendDots: '.additional-dots',
                responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                    }
                }, {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                    }
                }, {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                    }
                }]
            });

        }

        additionalSlider();


        // product slider

        function productSlider() {

            var productSlider = $('.product-slider');

            if(!productSlider.length) return;

            productSlider.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                asNavFor: '.nav-slider',
                fade: true,
            });

            var navSlider = $('.nav-slider');

            navSlider.slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                asNavFor: '.product-slider',
                focusOnSelect: true,
                arrows: false,
            });

        }

        productSlider();


        // logos slider

        function logosSlider() {

            var logosSlider = $('.logos-slider');

            if(!logosSlider.length) return;

            logosSlider.slick({
                slidesToShow: 4,
                slidesToScroll: 4,
                appendDots: '.logos-dots',
                arrows: false,
                dots: true,
                responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    }
                }, {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    }
                }]
            });

        }

        logosSlider();


        // pages slider

        function pagesSlider() {

            var pagesSlider = $('.pages-slider');

            if(!pagesSlider.length) return;

            pagesSlider.slick({
                slidesToShow: 2,
                slidesToScroll: 2,
                arrows: false,
                dots: true,
                appendDots: '.pages-slider-dots',
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        appendDots: '.lower-pages-slider-dots'
                    }
                }, {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        appendDots: '.lower-pages-slider-dots'
                    }
                }]
            });


        }

        pagesSlider();
        //  --- SLIDERS END --- //
    });
    
}(jQuery));
