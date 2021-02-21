/* NT Addons for Elementor v1.0 */

!(function ($) {


    // Home Slider
    function homeSlider1($scope, $) {
        $scope.find('.promo-slider').each(function () {
            var promoSlider = $( this );
			if(!promoSlider.length) return;
			var status = $('.paging-info');
			promoSlider.on('init afterChange', function (event, slick, currentSlide, nextSlide) {
				var i = (currentSlide ? currentSlide : 0) + 1;
				status.text(i + '/' + slick.slideCount);
			});
			promoSlider.slick({
				fade: true,
				adaptiveHeight: true,
				infinite: true,
				speed: 500,
				cssEase: 'ease-in-out',
				arrows: false,
				dots: true,
				appendDots: '.promo-dots',
			});
        });
    }
    // Home Slider
    function cooperationSlider($scope, $) {
        $scope.find('.cooperation-slider').each(function () {
            var cooperationSlider = $( this );
            if(!cooperationSlider.length) return;
            cooperationSlider.not('.slick-initialized').slick({
                arrows: false,
                slidesToShow: 4.5,
                adaptiveHeight: true,
                // autoplay: true,
                responsive: [{
                    breakpoint: 1367,
                    settings: {
                        slidesToShow: 3.5,
                    }
                }, {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                    }
                }, {
                    breakpoint: 992,
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
        });
    }
    // Testimonials Carousel
    function testiPrimary($scope, $) {
        $scope.find('.testimonials-primary-slider').each(function () {
            var $sliderPrimary = $( this );
			if(!$sliderPrimary.length) return;
			$sliderPrimary.not('.slick-initialized').slick({
				arrows: false,
				dots: true,
				appendDots: '.testimonials--primary .testimonials-dots',
				adaptiveHeight: true,
			});
        });
        $scope.find('.testimonials-img-left-slider').each(function () {
            var $sliderLeft = $( this );
			if(!$sliderLeft.length) return;
			$sliderLeft.not('.slick-initialized').slick({
				arrows: false,
				dots: true,
				appendDots: '.testimonials--img-left .testimonials-dots',
				adaptiveHeight: true,
			});
        });
        $scope.find('.testimonials-img-right-slider').each(function () {
            var $sliderRight = $( this );
			if(!$sliderRight.length) return;
			$sliderRight.not('.slick-initialized').slick({
				arrows: false,
				dots: true,
				appendDots: '.testimonials--img-right .testimonials-dots',
				adaptiveHeight: true,
			});
        });
    }

    // brandsSlider
    function brandsSlider($scope, $) {
        $scope.find('.brands-slider').each(function () {
            var $brandsSlider = $( this );
			if(!$brandsSlider.length) return;
			$brandsSlider.not('.slick-initialized').slick({
				slidesToShow: 5,
				arrows: false,
				dots: true,
				appendDots: '.brands-dots',
				adaptiveHeight: true,
				responsive: [{
					breakpoint: 1200,
					settings: {
						slidesToShow: 4,
						slidesToScroll: 2,
					}
				}, {
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
				}]
			});
        });
    }
    // brandsSlider
    function brandsSliderTwo($scope, $) {
        $scope.find('.items-slider').each(function () {
            var $brandsSlider = $( this );
			if(!$brandsSlider.length) return;
			$brandsSlider.not('.slick-initialized').slick({
				slidesToShow: 3,
				arrows: false,
				dots: true,
				responsive: [{
					breakpoint: 1200,
					settings: {
						slidesToShow: 2,
					}
				}, {
					breakpoint: 768,
					settings: {
						slidesToShow: 1,
					}
				}]
			});
        });
    }
    // casesSlider
    function casesSlider($scope, $) {
        $scope.find('.cases-slider').each(function () {
            var $casesSlider = $( this );
			if(!$casesSlider.length) return;
			$casesSlider.not('.slick-initialized').slick({
				slidesToShow: 3.5,
				speed: 500,
				arrows: false,
				dots: true,
				appendDots: '.cases-dots',
				responsive: [{
					breakpoint: 1366,
					settings: {
						slidesToShow: 3,
					}
				}, {
					breakpoint: 1200,
					settings: {
						slidesToShow: 2,
					}
				}, {
					breakpoint: 768,
					settings: {
						slidesToShow: 1,
					}
				}]
			});
        });
    }
    // productsSlider
    function productsSlider($scope, $) {
        $scope.find('.products-slider').each(function () {
            var $productsSlider = $( this );
			if(!$productsSlider.length) return;
			$productsSlider.not('.slick-initialized').slick({
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
        });
    }
    // instagramSlider
    function instagramSlider($scope, $) {
        $scope.find('.instagram-slider').each(function () {
            var $instagramSlider = $( this );
			if(!$instagramSlider.length) return;
			$instagramSlider.not('.slick-initialized').slick({
				slidesToShow: 6,
				slidesToScroll: 2,
				arrows: false,
				infinite: false,
				dots: true,
				appendDots: '.instagram-dots',
				responsive: [{
					breakpoint: 1600,
					settings: {
						slidesToShow: 5,
						slidesToScroll: 2,
					}
				}, {
					breakpoint: 1366,
					settings: {
						slidesToShow: 4,
						slidesToScroll: 2,
					}
				}, {
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
        });
    }
    // projectGallery
    function projectGallery($scope, $) {
        $scope.find('.project-gallery').each(function () {
            var $projectGallery = $( this );
			if(!$projectGallery.length) return;
			$projectGallery.not('.slick-initialized').slick({
				slidesToShow: 6,
				slidesToScroll: 2,
				arrows: false,
				infinite: false,
				dots: true,
				appendDots: '.project-gallery-dots',
				responsive: [{
					breakpoint: 1600,
					settings: {
						slidesToShow: 5,
						slidesToScroll: 2,
					}
				}, {
					breakpoint: 1366,
					settings: {
						slidesToShow: 4,
						slidesToScroll: 2,
					}
				}, {
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
        });
    }
    // niceSelect
    function formFocusCorrection($scope, $) {
        $scope.find('.section-contact form label').each(function () {
            var $this = $( this );
            var $formDefault = $this.find('.form-field:not(select)');
        	if($formDefault.length){
        		$formDefault.focus(function(){
        			$(this).parents('form').addClass('focused');
        			$(this).parents('label').addClass('focused');
        		});
        		$formDefault.blur(function(){
        			var inputValue = $(this).val();
        			if (inputValue == ""){
                        $(this).parents('form').removeClass('focused');
        				$(this).parents('label').removeClass('focused');
        			} else {
                        $(this).parents('form').addClass('focused');
        				$(this).parents('label').addClass('focused');
        			};
        		});
        	};
        });
    }
    // detailTabs
    function detailTabs($scope, $) {
        $scope.find('.details-tabs').each(function () {
            var $detailTabs = $( this );
			if(!$detailTabs.length) return;
			$(".details-tabs .tabs-content__item").not(":first").hide();
			$(".details-tabs .tabs-header__title").on('click', function() {
				$(".details-tabs .tabs-header__title").removeClass("active").eq($(this).index()).addClass("active");
				$(".details-tabs .tabs-content__item").hide().eq($(this).index()).fadeIn(500)
			}).eq(0).addClass("active");
        });
    }

    // jarallaxElement
    function jarallaxElement($scope, $) {
        $scope.find('.jarallax').each(function () {
            var $this = $( this );

            if ($(window).width() > 1200) {
    			 $this.jarallax({
    				speed: 0.3,
    			});
		    }
        });
    }

    var parentBody = window.parent.document.getElementsByClassName("elementor-editor-wp-page");
    var parentBod = $(parentBody);

    function updatePageSettings(newValue) {
        elementor.saver.update({
            onSuccess: function() {
                elementor.reloadPreview();
                elementor.once( 'preview:loaded', function() {
                    elementor.getPanelView().setPage('page_settings').activateTab('settings');
                    //jQuery(parentBod).find('.elementor-tab-control-settings').addClass('elementor-active');
                    //jQuery(parentBod).find('#elementor-panel-footer-settings').trigger('click');
                } );
            }
        });
    }

    jQuery(window).on('elementor/frontend/init', function () {
        if ( typeof elementor != "undefined" && typeof elementor.settings.page != "undefined") {
            elementor.settings.page.addChangeCallback( 'r_energy_hide_page_header', updatePageSettings );
            elementor.settings.page.addChangeCallback( 'r_energy_hide_page_footer_widgetize', updatePageSettings );
            elementor.settings.page.addChangeCallback( 'r_energy_hide_page_footer', updatePageSettings );
            elementor.settings.page.addChangeCallback( 'r_energy_page_header_type', updatePageSettings );
        }
        elementorFrontend.hooks.addAction('frontend/element_ready/r-energy-home-slider-one.default', homeSlider1);
        elementorFrontend.hooks.addAction('frontend/element_ready/r-energy-home-slider-two.default', homeSlider1);
        elementorFrontend.hooks.addAction('frontend/element_ready/r-energy-home-slider-three.default', homeSlider1);
        elementorFrontend.hooks.addAction('frontend/element_ready/r-energy-home-slider-one.default', jarallaxElement);
        elementorFrontend.hooks.addAction('frontend/element_ready/r-energy-home-slider-two.default', jarallaxElement);
        elementorFrontend.hooks.addAction('frontend/element_ready/r-energy-home-slider-three.default', jarallaxElement);
        elementorFrontend.hooks.addAction('frontend/element_ready/r-energy-about-us-one-section.default', jarallaxElement);
        elementorFrontend.hooks.addAction('frontend/element_ready/r-energy-product-info-parallax-section.default', jarallaxElement);
        elementorFrontend.hooks.addAction('frontend/element_ready/r-energy-cooperation-slider-section.default', cooperationSlider);
        elementorFrontend.hooks.addAction('frontend/element_ready/r-energy-testimonials-one-section.default', testiPrimary);
        elementorFrontend.hooks.addAction('frontend/element_ready/r-energy-partners-slider-section.default', brandsSlider);
        elementorFrontend.hooks.addAction('frontend/element_ready/r-energy-brands-slider-section.default', brandsSliderTwo);
        elementorFrontend.hooks.addAction('frontend/element_ready/r-energy-cases-cpt-slider-section.default', casesSlider);
        elementorFrontend.hooks.addAction('frontend/element_ready/r-energy-woo-product-slider-section.default', productsSlider);
        elementorFrontend.hooks.addAction('frontend/element_ready/r-energy-instagram-slider-section.default', instagramSlider);
        elementorFrontend.hooks.addAction('frontend/element_ready/r-energy-project-gallery-slider-section.default', projectGallery);
        elementorFrontend.hooks.addAction('frontend/element_ready/r-energy-contact-form-map-section.default', formFocusCorrection);
        elementorFrontend.hooks.addAction('frontend/element_ready/r-energy-contact-form-7.default', formFocusCorrection);
        elementorFrontend.hooks.addAction('frontend/element_ready/r-energy-vertical-tabs-section.default', detailTabs);
    });
})(jQuery);
