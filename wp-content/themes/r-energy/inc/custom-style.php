<?php

/*
** theme options panel and metabox settings
** will change some parts of theme via custom style
*/

function r_energy_custom_css()
{

  // stop on admin pages
    if (is_admin()) {
        return false;
    }

    // Redux global
    global $r_energy;

    /* CSS to output */
    $theCSS = '';

    /*************************************************
    ## PRELOADER SETTINGS
    *************************************************/

    if ('0' != r_energy_settings('preloader_visibility')) {
        $pretype = r_energy_settings('pre_type', '1');
        $prebg = r_energy_settings('pre_bg', '#fff');
        $prebg = $prebg ? $prebg : '#fff';
        $spinclr = r_energy_settings('pre_spin', '#045fa0');
        $spinclr = $spinclr ? $spinclr : '#045fa0';

        $theCSS .= 'div#nt-preloader {background-color: '. esc_attr($prebg) .';overflow: hidden;background-repeat: no-repeat;background-position: center center;height: 100%;left: 0;position: fixed;top: 0;width: 100%;z-index: 10000;}';
        $spinrgb = r_energy_hex2rgb($spinclr);
        $spin_rgb = implode(", ", $spinrgb);
        if ('01' == $pretype) {
            $theCSS .= '.loader01 {width: 56px;height: 56px;border: 8px solid '. $spinclr .';border-right-color: transparent;border-radius: 50%;position: relative;animation: loader-rotate 1s linear infinite;top: 50%;margin: -28px auto 0; }.loader01::after {content: "";width: 8px;height: 8px;background: '. $spinclr .';border-radius: 50%;position: absolute;top: -1px;left: 33px; }@keyframes loader-rotate {0% {transform: rotate(0); }100% {transform: rotate(360deg); } }';
        }
        if ('02' == $pretype) {
            $theCSS .= '.loader02 {width: 56px;height: 56px;border: 8px solid rgba('. $spin_rgb .', 0.25);border-top-color: '. $spinclr .';border-radius: 50%;position: relative;animation: loader-rotate 1s linear infinite;top: 50%;margin: -28px auto 0; }@keyframes loader-rotate {0% {transform: rotate(0); }100% {transform: rotate(360deg); } }';
        }
        if ('03' == $pretype) {
            $theCSS .= '.loader03 {width: 56px;height: 56px;border: 8px solid transparent;border-top-color: '. $spinclr .';border-bottom-color: '. $spinclr .';border-radius: 50%;position: relative;animation: loader-rotate 1s linear infinite;top: 50%;margin: -28px auto 0; }@keyframes loader-rotate {0% {transform: rotate(0); }100% {transform: rotate(360deg); } }';
        }
        if ('04' == $pretype) {
            $theCSS .= '.loader04 {width: 56px;height: 56px;border: 2px solid rgba('. $spin_rgb .', 0.5);border-radius: 50%;position: relative;animation: loader-rotate 1s ease-in-out infinite;top: 50%;margin: -28px auto 0; }.loader04::after {content: "";width: 10px;height: 10px;border-radius: 50%;background: '. $spinclr .';position: absolute;top: -6px;left: 50%;margin-left: -5px; }@keyframes loader-rotate {0% {transform: rotate(0); }100% {transform: rotate(360deg); } }';
        }
        if ('05' == $pretype) {
            $theCSS .= '.loader05 {width: 56px;height: 56px;border: 4px solid '. $spinclr .';border-radius: 50%;position: relative;animation: loader-scale 1s ease-out infinite;top: 50%;margin: -28px auto 0; }@keyframes loader-scale {0% {transform: scale(0);opacity: 0; }50% {opacity: 1; }100% {transform: scale(1);opacity: 0; } }';
        }
        if ('06' == $pretype) {
            $theCSS .= '.loader06 {width: 56px;height: 56px;border: 4px solid transparent;border-radius: 50%;position: relative;top: 50%;margin: -28px auto 0; }.loader06::before {content: "";border: 4px solid rgba('. $spin_rgb .', 0.5);border-radius: 50%;width: 67.2px;height: 67.2px;position: absolute;top: -9.6px;left: -9.6px;animation: loader-scale 1s ease-out infinite;animation-delay: 1s;opacity: 0; }.loader06::after {content: "";border: 4px solid '. $spinclr .';border-radius: 50%;width: 56px;height: 56px;position: absolute;top: -4px;left: -4px;animation: loader-scale 1s ease-out infinite;animation-delay: 0.5s; }@keyframes loader-scale {0% {transform: scale(0);opacity: 0; }50% {opacity: 1; }100% {transform: scale(1);opacity: 0; } }';
        }
        if ('07' == $pretype) {
            $theCSS .= '.loader07 {width: 16px;height: 16px;border-radius: 50%;position: relative;animation: loader-circles 1s linear infinite;top: 50%;margin: -8px auto 0; }@keyframes loader-circles {0% {box-shadow: 0 -27px 0 0 rgba('. $spin_rgb .', 0.05), 19px -19px 0 0 rgba('. $spin_rgb .', 0.1), 27px 0 0 0 rgba('. $spin_rgb .', 0.2), 19px 19px 0 0 rgba('. $spin_rgb .', 0.3), 0 27px 0 0 rgba('. $spin_rgb .', 0.4), -19px 19px 0 0 rgba('. $spin_rgb .', 0.6), -27px 0 0 0 rgba('. $spin_rgb .', 0.8), -19px -19px 0 0 '. $spinclr .'; }12.5% {box-shadow: 0 -27px 0 0 '. $spinclr .', 19px -19px 0 0 rgba('. $spin_rgb .', 0.05), 27px 0 0 0 rgba('. $spin_rgb .', 0.1), 19px 19px 0 0 rgba('. $spin_rgb .', 0.2), 0 27px 0 0 rgba('. $spin_rgb .', 0.3), -19px 19px 0 0 rgba('. $spin_rgb .', 0.4), -27px 0 0 0 rgba('. $spin_rgb .', 0.6), -19px -19px 0 0 rgba('. $spin_rgb .', 0.8); }25% {box-shadow: 0 -27px 0 0 rgba('. $spin_rgb .', 0.8), 19px -19px 0 0 '. $spinclr .', 27px 0 0 0 rgba('. $spin_rgb .', 0.05), 19px 19px 0 0 rgba('. $spin_rgb .', 0.1), 0 27px 0 0 rgba('. $spin_rgb .', 0.2), -19px 19px 0 0 rgba('. $spin_rgb .', 0.3), -27px 0 0 0 rgba('. $spin_rgb .', 0.4), -19px -19px 0 0 rgba('. $spin_rgb .', 0.6); }37.5% {box-shadow: 0 -27px 0 0 rgba('. $spin_rgb .', 0.6), 19px -19px 0 0 rgba('. $spin_rgb .', 0.8), 27px 0 0 0 '. $spinclr .', 19px 19px 0 0 rgba('. $spin_rgb .', 0.05), 0 27px 0 0 rgba('. $spin_rgb .', 0.1), -19px 19px 0 0 rgba('. $spin_rgb .', 0.2), -27px 0 0 0 rgba('. $spin_rgb .', 0.3), -19px -19px 0 0 rgba('. $spin_rgb .', 0.4); }50% {box-shadow: 0 -27px 0 0 rgba('. $spin_rgb .', 0.4), 19px -19px 0 0 rgba('. $spin_rgb .', 0.6), 27px 0 0 0 rgba('. $spin_rgb .', 0.8), 19px 19px 0 0 '. $spinclr .', 0 27px 0 0 rgba('. $spin_rgb .', 0.05), -19px 19px 0 0 rgba('. $spin_rgb .', 0.1), -27px 0 0 0 rgba('. $spin_rgb .', 0.2), -19px -19px 0 0 rgba('. $spin_rgb .', 0.3); }62.5% {box-shadow: 0 -27px 0 0 rgba('. $spin_rgb .', 0.3), 19px -19px 0 0 rgba('. $spin_rgb .', 0.4), 27px 0 0 0 rgba('. $spin_rgb .', 0.6), 19px 19px 0 0 rgba('. $spin_rgb .', 0.8), 0 27px 0 0 '. $spinclr .', -19px 19px 0 0 rgba('. $spin_rgb .', 0.05), -27px 0 0 0 rgba('. $spin_rgb .', 0.1), -19px -19px 0 0 rgba('. $spin_rgb .', 0.2); }75% {box-shadow: 0 -27px 0 0 rgba('. $spin_rgb .', 0.2), 19px -19px 0 0 rgba('. $spin_rgb .', 0.3), 27px 0 0 0 rgba('. $spin_rgb .', 0.4), 19px 19px 0 0 rgba('. $spin_rgb .', 0.6), 0 27px 0 0 rgba('. $spin_rgb .', 0.8), -19px 19px 0 0 '. $spinclr .', -27px 0 0 0 rgba('. $spin_rgb .', 0.05), -19px -19px 0 0 rgba('. $spin_rgb .', 0.1); }87.5% {box-shadow: 0 -27px 0 0 rgba('. $spin_rgb .', 0.1), 19px -19px 0 0 rgba('. $spin_rgb .', 0.2), 27px 0 0 0 rgba('. $spin_rgb .', 0.3), 19px 19px 0 0 rgba('. $spin_rgb .', 0.4), 0 27px 0 0 rgba('. $spin_rgb .', 0.6), -19px 19px 0 0 rgba('. $spin_rgb .', 0.8), -27px 0 0 0 '. $spinclr .', -19px -19px 0 0 rgba('. $spin_rgb .', 0.05); }100% {box-shadow: 0 -27px 0 0 rgba('. $spin_rgb .', 0.05), 19px -19px 0 0 rgba('. $spin_rgb .', 0.1), 27px 0 0 0 rgba('. $spin_rgb .', 0.2), 19px 19px 0 0 rgba('. $spin_rgb .', 0.3), 0 27px 0 0 rgba('. $spin_rgb .', 0.4), -19px 19px 0 0 rgba('. $spin_rgb .', 0.6), -27px 0 0 0 rgba('. $spin_rgb .', 0.8), -19px -19px 0 0 '. $spinclr .'; } }';
        }
        if ('08' == $pretype) {
            $theCSS .= '.loader08 {width: 20px;height: 20px;position: relative;animation: loader08 1s ease infinite;top: 50%;margin: -46px auto 0; }@keyframes loader08 {0%, 100% {box-shadow: -13px 20px 0 '. $spinclr .', 13px 20px 0 rgba('. $spin_rgb .', 0.2), 13px 46px 0 rgba('. $spin_rgb .', 0.2), -13px 46px 0 rgba('. $spin_rgb .', 0.2); }25% {box-shadow: -13px 20px 0 rgba('. $spin_rgb .', 0.2), 13px 20px 0 '. $spinclr .', 13px 46px 0 rgba('. $spin_rgb .', 0.2), -13px 46px 0 rgba('. $spin_rgb .', 0.2); }50% {box-shadow: -13px 20px 0 rgba('. $spin_rgb .', 0.2), 13px 20px 0 rgba('. $spin_rgb .', 0.2), 13px 46px 0 '. $spinclr .', -13px 46px 0 rgba('. $spin_rgb .', 0.2); }75% {box-shadow: -13px 20px 0 rgba('. $spin_rgb .', 0.2), 13px 20px 0 rgba('. $spin_rgb .', 0.2), 13px 46px 0 rgba('. $spin_rgb .', 0.2), -13px 46px 0 '. $spinclr .'; } }';
        }
        if ('09' == $pretype) {
            $theCSS .= '.loader09 {width: 10px;height: 48px;background: '. $spinclr .';position: relative;animation: loader09 1s ease-in-out infinite;animation-delay: 0.4s;top: 50%;margin: -28px auto 0; }.loader09::after, .loader09::before {content:  "";position: absolute;width: 10px;height: 48px;background: '. $spinclr .';animation: loader09 1s ease-in-out infinite; }.loader09::before {right: 18px;animation-delay: 0.2s; }.loader09::after {left: 18px;animation-delay: 0.6s; }@keyframes loader09 {0%, 100% {box-shadow: 0 0 0 '. $spinclr .', 0 0 0 '. $spinclr .'; }50% {box-shadow: 0 -8px 0 '. $spinclr .', 0 8px 0 '. $spinclr .'; } }';
        }
        if ('10' == $pretype) {
            $theCSS .= '.loader10 {width: 28px;height: 28px;border-radius: 50%;position: relative;animation: loader10 0.9s ease alternate infinite;animation-delay: 0.36s;top: 50%;margin: -42px auto 0; }.loader10::after, .loader10::before {content: "";position: absolute;width: 28px;height: 28px;border-radius: 50%;animation: loader10 0.9s ease alternate infinite; }.loader10::before {left: -40px;animation-delay: 0.18s; }.loader10::after {right: -40px;animation-delay: 0.54s; }@keyframes loader10 {0% {box-shadow: 0 28px 0 -28px '. $spinclr .'; }100% {box-shadow: 0 28px 0 '. $spinclr .'; } }';
        }
        if ('11' == $pretype) {
            $theCSS .= '.loader11 {width: 20px;height: 20px;border-radius: 50%;box-shadow: 0 40px 0 '. $spinclr .';position: relative;animation: loader11 0.8s ease-in-out alternate infinite;animation-delay: 0.32s;top: 50%;margin: -50px auto 0; }.loader11::after, .loader11::before {content:  "";position: absolute;width: 20px;height: 20px;border-radius: 50%;box-shadow: 0 40px 0 '. $spinclr .';animation: loader11 0.8s ease-in-out alternate infinite; }.loader11::before {left: -30px;animation-delay: 0.48s;}.loader11::after {right: -30px;animation-delay: 0.16s; }@keyframes loader11 {0% {box-shadow: 0 40px 0 '. $spinclr .'; }100% {box-shadow: 0 20px 0 '. $spinclr .'; } }';
        }
        if ('12' == $pretype) {
            $theCSS .= '.loader12 {width: 20px;height: 20px;border-radius: 50%;position: relative;animation: loader12 1s linear alternate infinite;top: 50%;margin: -50px auto 0; }@keyframes loader12 {0% {box-shadow: -60px 40px 0 2px '. $spinclr .', -30px 40px 0 0 rgba('. $spin_rgb .', 0.2), 0 40px 0 0 rgba('. $spin_rgb .', 0.2), 30px 40px 0 0 rgba('. $spin_rgb .', 0.2), 60px 40px 0 0 rgba('. $spin_rgb .', 0.2); }25% {box-shadow: -60px 40px 0 0 rgba('. $spin_rgb .', 0.2), -30px 40px 0 2px '. $spinclr .', 0 40px 0 0 rgba('. $spin_rgb .', 0.2), 30px 40px 0 0 rgba('. $spin_rgb .', 0.2), 60px 40px 0 0 rgba('. $spin_rgb .', 0.2); }50% {box-shadow: -60px 40px 0 0 rgba('. $spin_rgb .', 0.2), -30px 40px 0 0 rgba('. $spin_rgb .', 0.2), 0 40px 0 2px '. $spinclr .', 30px 40px 0 0 rgba('. $spin_rgb .', 0.2), 60px 40px 0 0 rgba('. $spin_rgb .', 0.2); }75% {box-shadow: -60px 40px 0 0 rgba('. $spin_rgb .', 0.2), -30px 40px 0 0 rgba('. $spin_rgb .', 0.2), 0 40px 0 0 rgba('. $spin_rgb .', 0.2), 30px 40px 0 2px '. $spinclr .', 60px 40px 0 0 rgba('. $spin_rgb .', 0.2); }100% {box-shadow: -60px 40px 0 0 rgba('. $spin_rgb .', 0.2), -30px 40px 0 0 rgba('. $spin_rgb .', 0.2), 0 40px 0 0 rgba('. $spin_rgb .', 0.2), 30px 40px 0 0 rgba('. $spin_rgb .', 0.2), 60px 40px 0 2px '. $spinclr .'; } }';
        }
    }

    /*************************************************
  ## THEME COLORS
  *************************************************/

  $tmclr = r_energy_settings( 'theme_main_color' );
  $tmrgb = r_energy_hex2rgb( $tmclr );
  $tm_rgb = implode(", ", $tmrgb);
  if( $tmclr ) {
      $theCSS .= '
          .nt-breadcrumbs .nt-breadcrumbs-list li {
              color: '. esc_attr($tmclr) .';
          }';
      $theCSS .= '
      .category a,
      .trigger a,
      .r-button,
      .promo--style-3 .video-block i:hover,
      .primary-heading .title,
      .with--line,
      .primary-heading .subtitle,
      .primary-heading .subtitle span:last-of-type,
      .counter--is-blue .counter,
      .features-item .count,
      .woocommerce div.product p.price,
      .woocommerce div.product span.price,
      .product-item.product-item--primary .price,
      .testimonials-slider .slider-item .user .position,
      .promo-lower .socials-primary a,
      .cooperation-slider .slider-item .top p,
      .pricing-table .pricing-item .price,
      .pricing-table--inner .pricing-item .price,
      .btn-scroll-top:hover,
      .promo-slider .item--style-3 .title span,
      .promo--style-2 .socials-primary a:hover,
      .platform .title-block .title span,
      .platform .title-block .title::before,
      .news-item--aside .description .date,
      .footer-style-2 .elementor-widget-heading .elementor-heading-title>a:hover,
      .custom-footer-menu ul li a:hover,
      .team-item.team-item--primary .socials-primary li a,
      .gallery-filter .header__title:hover,
      .form.contact--form .title span,
      .accordion-item .title-block .icon,
      .error .subtitle span:last-of-type,
      .post-day,
      .blog-detail .date-block .icon,
      blockquote:before,
      #nt-sidebar .widget-list-span,
      #recentcomments .comment-author-link a,
      span.post-meta__item.__date-post a,
      .cases-details .information-block .detail .icon,
      .cases-details .detail-item p,
      .cases-details .saving-details p .count,
      .cases-details .technical-item .icon,
      .relevant-item .ribbon.event,
      .relevant-item:first-of-type .title,
      i.yith-wcwl-icon,
      .nt-woo-single i.yith-wcwl-icon,
      a.compare,
      .product-item .title a:hover,
      .shop-product .product-about .status-block .stock.in-stock,
      .product-about .details .price,
      .product-about a.woocommerce-review-link,
      .product-info-tabs .tabs-header__title:hover,
      .product-item .description,
      .product-item .price,
      .shopping-cart .next-block .favorites,
      .shopping-cart .next-block .remove,
      .shopping-cart .coupon-block .refresh,
      .team-item.team-item--grayscaled:hover .name,
      .team-item.team-item--rounded-img:hover .name,
      .team-item.team-item--dark:hover .name,
      .team-item.team-item--dark .socials-primary a:hover,
      .testimonials-slider .slider-item .user .position,
      .promo--style-2 .video-block i:hover,
      .news-item--aside .description a:hover,
      .statistics-item .description,
      .services-details .pdf-holder .r-button::before,
      .blog-item .title a:hover,
      .nt-comment-author a:hover,
      .contacts-banner .title,
      .contacts-banner .mail-block a,
      .header--style-3 .socials-primary a,
      .woocommerce .comments-block .meta time.woocommerce-review__published-date,
      .woocommerce p.stars a,
      .product-about .rating-block a.woocommerce-review-link,
      footer.footer a:hover
      {
          color: '.esc_attr($tmclr).';
      }
      .r-button,
      .slick-dots li.slick-active,
      .subscribe-form .r-button,
      .btn-scroll-top,
      .cooperation-slider .slider-item .top::after,
      .nt-pagination.-style-outline .nt-pagination-item.active .nt-pagination-link,
      .nt-sidebar-inner-widget .ui-slider.ui-widget-content .ui-slider-handle,
      .nt-sidebar-inner-widget .ui-slider.ui-widget-content:not(.iris-slider-offset),
      .woocommerce .widget_price_filter .price_slider_amount .button,
      .nt-sidebar-inner-widget .wpfFilterButton.wpfButton,
      .nt-my-account .woocommerce-message,
      .nt-my-account .woocommerce-info,
      .nt-cart-empty .woocommerce-account .woocommerce-MyAccount-content p a,
      .nt-cart-empty .woocommerce-error,
      .nt-cart-empty .woocommerce-info,
      .nt-cart-empty .woocommerce-message,
      .nt-cart-empty .woocommerce div.product.sale div.images.woocommerce-product-gallery,
      .nt-cart-empty .woocommerce div.product .woocommerce-tabs ul.tabs li a:hover,
      .nt-cart-empty .woocommerce div.product .woocommerce-tabs ul.tabs li.active a,
      .nt-cart-empty .woocommerce-Address-title .edit,
      .progress-simple,
      .promo--style-2 .slick-dots li.slick-active,
      .promo--style-3 .slick-dots li.slick-active
      {
          border-color: '.esc_attr($tmclr).';
      }
      .main-menu>li.menu-item--has-child>a>span::before,
      .main-menu>li.menu-item--has-child>a>span::after,
      .main-menu>li>a::after,
      .r-button.r-button--transparent::before,
      .info-box__inner,
      .main-gallery .gallery .gallery-item:hover .description,
      .slick-dots li button:hover, .slick-dots li.slick-active button,
      .testimonials.testimonials--primary .quote-icon,
      .testimonials.testimonials--img-left .quote-icon,
      .testimonials.testimonials--img-right .quote-icon,
      .blog-item .ribbon,
      .r-button.r-button--filled span,
      .btn-scroll-top,
      .promo-slider-1+.slider-nav .slick-dots li button:hover,
      .promo-slider-1+.slider-nav .slick-dots li.slick-active button,
      .about .title-block .title,
      .about-welcome .title-block,
      .cooperation-slider .slick-current .top::after,
      .pricing-table .pricing-item .ribbon,
      .pricing-table--inner .pricing-item .ribbon,
      .platform .wrapper::before,
      .promo-primary .title::before,
      .video-section .fancy-video:hover,
      .team-item.team-item--primary .description,
      .services-details .details-tabs .tabs-header span.active,
      .services-details .pdf-holder,
      .services-details .tabs-content .tabs-content__item ul li::before,
      .main-menu .sub-menu li a::after,
      .gallery-filter .header__title.active,
      .inner-heading--with-bg .img-block,
      .product-info .text-holder,
      .nt-pagination.-style-outline .nt-pagination-item.active .nt-pagination-link,
      .nt-sidebar-inner-search .nt-sidebar-inner-search-button,
      .comments-block .heading,
      .cases-item:hover .description,
      .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
      .nt-sidebar-inner-widget .ui-slider.ui-widget-content:not(.iris-slider-offset),
      .woocommerce .widget_price_filter .price_slider_amount .button,
      .nt-sidebar-inner-widget .wpfFilterButton.wpfButton,
      .woocommerce span.onsale,
      .woocommerce .nt-woo-single span.onsale,
      .product-info-tabs .tabs-header__title.active,
      .cart-block,
      .woocommerce-error,
      .woocommerce-info,
      .woocommerce-message,
      .shopping-cart .coupon-block .refresh:hover,
      .shopping-cart .next-block .favorites:hover,
      .shopping-cart .next-block .remove:hover,
      .shopping-cart .count-block span:hover,
      .lang-select .sub-list li a:after,
      .testimonials-slider .slider-item .user:before,
      .progress-bar,
      .with--line::after,
      .services-details .details-tabs .tabs-header span:hover::before,
      .services-details .pdf-holder .r-button span,
      #nt-sidebar .widget-title:before,
      .contacts-banner .mail-block a::after,
      .products--style-3::before,
      .testimonials.testimonials--primary .slider-holder::before,
      .services-inner .content-holder .info::before,
      .product-about .add-block .count-block span:hover,
      .woocommerce .nt-woo-single div.product.nt-single-thumbs div.images .flex-control-thumbs li:before
      {
          background-color: '.esc_attr($tmclr).';
      }

      .overlay,
      .info-box__img::before,
      .main-gallery .gallery .gallery-item .overlay,
      .main-gallery .gallery .gallery-item:hover .overlay,
      .blog-item .img-holder:hover .overlay,
      .project-gallery .gallery-item:hover .overlay,
      .news-item--style-2:hover .overlay,
      .info-box:hover .info-box__img::before
       {
          background-color: rgba('.$tm_rgb.', 0.3);
      }

      .pricing-table .pricing-item .img-holder .icon {
          fill: '.esc_attr($tmclr).';
      }
      .promo--style-2 .slider-nav,
      .form-control:focus,
      .woocommerce .nt-woo-single div.product.nt-single-thumbs div.images .flex-control-thumbs li img.flex-active
      {
          border-bottom-color: '.esc_attr($tmclr).';
      }';
  }

    // use page/post ID for page settings
    $page_id = get_the_ID();

    /*************************************************
    ## THEME PAGINATION
    *************************************************/
    // pagination color
    $pag_clr = r_energy_settings('pag_clr');
    // pagination active and hover color
    $pag_hvrclr = r_energy_settings('pag_hvrclr');
    // pagination number color
    $pag_nclr = r_energy_settings('pag_nclr');
    // pagination active and hover color
    $pag_hvrnclr = r_energy_settings('pag_hvrnclr');
    $nav_brd_btm = r_energy_settings('nav_brd_btm');

    // pagination color
    if ($pag_clr) {
        $theCSS .= '
        .nt-pagination.-style-outline .nt-pagination-item .nt-pagination-link { border-color: '. esc_attr($pag_clr) .'; }
        .nt-pagination.-style-default .nt-pagination-link { background-color: '. esc_attr($pag_clr) .';
        }';
    }

    // pagination active and hover color
    if ($pag_hvrclr) {
        $theCSS .= '
        .nt-pagination.-style-outline .nt-pagination-item.active .nt-pagination-link,
        .nt-pagination.-style-outline .nt-pagination-item .nt-pagination-link:hover { border-color: '. esc_attr($pag_hvrclr) .'; }
        .nt-pagination.-style-default .nt-pagination-item.active .nt-pagination-link,
        .nt-pagination.-style-default .nt-pagination-item .nt-pagination-link:hover { background-color: '. esc_attr($pag_hvrclr) .';
        }';
    }

    // pagination number color
    if ($pag_nclr) {
        $theCSS .= '
        .nt-pagination.-style-outline .nt-pagination-item .nt-pagination-link,
        .nt-pagination.-style-default .nt-pagination-link { color: '. esc_attr($pag_nclr) .';
        }';
    }

    // pagination active and hover color
    if ($pag_hvrnclr) {
        $theCSS .= '
        .nt-pagination.-style-outline .nt-pagination-item.active .nt-pagination-link,
        .nt-pagination.-style-outline .nt-pagination-item .nt-pagination-link:hover,
        .nt-pagination.-style-default .nt-pagination-item.active .nt-pagination-link,
        .nt-pagination.-style-default .nt-pagination-item .nt-pagination-link:hover { color: '. esc_attr($pag_hvrnclr) .';
        }';
    }
    // pagination active and hover color
    if ($nav_brd_btm) {
        $theCSS .= '#top-bar {
            border-bottom-color: '.esc_attr($nav_brd_btm).';
        }';
    }

    $r_energy_error_bg = r_energy_settings('error_content_bg_img');
    $r_energy_error_bg = is_array($r_energy_error_bg) ? $r_energy_error_bg['background-image'] : get_template_directory_uri(). '/images/layout404_bg.jpg';
    $theCSS .= '.layout404 { background-image: url('.$r_energy_error_bg.'); }';


    /*************************************************
    ## PAGE METABOX SETTINGS
    *************************************************/

    if (is_page() && class_exists('ACF')) {

        $h_all = get_field('r_energy_page_hero_customize');
        $h_t_clr   = !empty($h_all) ? $h_all["r_energy_page_hero_text_customize"]["r_energy_page_title_color"] : '';
        $h_st_clr  = !empty($h_all) ? $h_all["r_energy_page_hero_text_customize"]["r_energy_page_subtitle_color"] : '';
        $h_t_bgclr = !empty($h_all) ? $h_all["r_energy_page_hero_text_customize"]["r_energy_page_title_bg_color"] : '';
        if ($h_t_clr)   { $theCSS .= '.page-id-'.$page_id.' .subpage-header__caption { color: '.$h_t_clr.'; }'; }
        if ($h_st_clr)  { $theCSS .= '.page-id-'.$page_id.' .subpage-header__caption { color: '.$h_st_clr.'; }'; }
        if ($h_t_bgclr) { $theCSS .= '.page-id-'.$page_id.' .subpage-header__block:before { background-color: '.$h_t_bgclr.'; }'; }

        $h_h     = !empty($h_all) ? $h_all["r_energy_page_hero_background_customize"]["r_energy_page_hero_height"] : '';
        $h_sm_h  = !empty($h_all) ? $h_all["r_energy_page_hero_background_customize"]["r_energy_page_hero_sm_height"] : '';
        $h_xs_h  = !empty($h_all) ? $h_all["r_energy_page_hero_background_customize"]["r_energy_page_hero_xs_height"] : '';
        $h_bgclr = !empty($h_all) ? $h_all["r_energy_page_hero_background_customize"]["r_energy_page_hero_bg_color"] : '';
        if ($h_bgclr) { $theCSS .= '#nt-hero.subpage-header__bg, .subpage-header__bg { background-color: '.$h_bgclr.'; }'; }
        if ($h_xs_h)  { $theCSS .= '.page-'.$page_id.', .page-'.$page_id.' .promo-primary .align-container { height: '.$h_xs_h.'px; }'; }
        if ($h_sm_h)  { $theCSS .= '@media (min-width: 576px) { .page-'.$page_id.', .page-'.$page_id.' .promo-primary .align-container { height: '.$h_sm_h.'px; } }'; }
        if ($h_h)     { $theCSS .= '@media (min-width: 992px) { .page-'.$page_id.', .page-'.$page_id.' .promo-primary .align-container { height: '.$h_h.'px; } }'; }

    } // end if is_page

    /* Add CSS to style.css */
    wp_register_style('r-energy-custom-style', false);
    wp_enqueue_style('r-energy-custom-style');
    wp_add_inline_style('r-energy-custom-style', $theCSS);
}

add_action('wp_enqueue_scripts', 'r_energy_custom_css');


// customization on admin pages
function r_energy_admin_custom_css()
{
    if (! is_admin()) {
        return false;
    }

    /* CSS to output */
    $theCSS = '';

    $theCSS .= '
    #setting-error-tgmpa, #setting-error-r-energy {
        display: block !important;
    }
    .updated.vc_license-activation-notice {
        display:none;
    }
    .redux_field_th {
        color: #191919;
        font-weight: 700;
    }
    .redux-main .description {
        display: block;
        font-weight: normal;
    }
    #redux-header .rAds {
        opacity: 0 !important;
        display: none !important;
        visibility : hidden;
    }
    .redux-main .wp-picker-container .wp-color-result-text {
        line-height: 28px;
    }
    .redux-container .redux-main .input-append .add-on, .redux-container .redux-main .input-prepend .add-on {
        line-height: 22px;
    }
  	#customize-controls img {
  		max-width: 75%;
  	}';
    // end $theCSS

    /* Add CSS to style.css */
    wp_register_style('r-energy-admin-custom-style', false);
    wp_enqueue_style('r-energy-admin-custom-style');
    wp_add_inline_style('r-energy-admin-custom-style', $theCSS);
}
add_action('admin_enqueue_scripts', 'r_energy_admin_custom_css');
