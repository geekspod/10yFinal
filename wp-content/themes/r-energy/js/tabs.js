(function($) {

    'use strict';

    jQuery(document).ready(function () {

        // --- TABS START --- //


        // product tabs
        function productTabs() {

            var productTabs = $('.product-tabs');

            if(!productTabs.length) return;

            $(".product-tabs .tabs-content__item").not(":first").hide();
            $(".product-tabs .tabs-header__title").on('click', function() {
                $(".product-tabs .tabs-header__title").removeClass("active").eq($(this).index()).addClass("active");
                $(".product-tabs .tabs-content__item").hide().eq($(this).index()).fadeIn(500)
            }).eq(0).addClass("active");

        }

        productTabs();


        // catalog tabs

        function catalogTabs() {

            var catalogTabs = $('.catalog-tabs');

            if(!catalogTabs.length) return;

            //$(".catalog-tabs .tabs-content__item").not(":nth-of-type(2)").hide();
            //$(".catalog-tabs .tabs-header__title").on('click', function() {
            //$(".catalog-tabs .tabs-header__title").removeClass("active").eq($(this).index()).addClass("active");
            //$(".catalog-tabs .tabs-content__item").hide().eq($(this).index()).fadeIn(500)
            //}).eq(1).addClass("active");

        }

        catalogTabs();


        // product info tabs

        function productInfoTabs() {

            var productInfoTabs = $(".product-info-tabs");

            if(!productInfoTabs.length) return;

            $(".product-info-tabs .tabs-content__item").not(":first").hide();
            $(".product-info-tabs .tabs-header__title").on('click', function() {
                $(".product-info-tabs .tabs-header__title").removeClass("active").eq($(this).index()).addClass("active");
                $(".product-info-tabs .tabs-content__item").hide().eq($(this).index()).fadeIn(500)
            }).eq(0).addClass("active");

            $('.product-info-tabs .tabs-header__title.reviews').on('click', function() {
                $('body').find('.downloads-block').hide();
            });

            $('.product-info-tabs .tabs-header__title:not(.reviews)').on('click', function() {
                $('body').find('.downloads-block').fadeIn(500);
            });

        }

        productInfoTabs();


        // responsive tabs

        function responsiveTabs() {

            var responsiveTabs = $('#responsive-tabs'),
            horizontal = $('.horizontal--tabs'),
            vertical = $('.vertical--tabs');

            if(!responsiveTabs.length) return;

            horizontal.responsiveTabs({
                startCollapsed: 'false'
            });

            vertical.responsiveTabs({
                startCollapsed: 'false'
            });

        }

        responsiveTabs();

        // --- TABS END --- //
        
    });

}(jQuery));
