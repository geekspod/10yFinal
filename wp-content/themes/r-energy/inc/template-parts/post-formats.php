<?php


/*************************************************
## CUSTOM POST CLASS
*************************************************/
if (! function_exists('r_energy_post_theme_class')) {
    function r_energy_post_theme_class($classes)
    {
        if ( ! is_single() AND ! is_page() ) {
            $classes[] =  'nt-post-class';
            $classes[] =  is_search() || is_archive() ? 'masonry-item' : '';
            $classes[] =  !is_search() && !is_archive() && 'default' != r_energy_settings( 'index_type', 'masonry' ) ? 'masonry-item' : '';
            $classes[] =  !is_search() && !is_archive() && 'default' != r_energy_settings( 'index_type', 'masonry' ) ? r_energy_settings( 'index_masonry_column', 'col-lg-6' ) : '';
            $classes[] =  is_sticky() ? '-has-sticky ' : '';
            $classes[] =  !has_post_thumbnail() ? 'thumb-none' : '';
            $classes[] =  !get_the_title() ? 'title-none' : '';
            $classes[] =  !has_excerpt() ? 'excerpt-none' : '';
            $classes[] =  r_energy_settings( 'format_box_type', '' );
            $classes[] =  wp_link_pages('echo=0') ? 'nt-is-wp-link-pages' : '';
        }
        return $classes;
    }
    add_filter('post_class', 'r_energy_post_theme_class');
}

/*************************************************
##  FORMATS_CONTENT
*************************************************/

if (! function_exists('r_energy_post')) {
    function r_energy_post()
    {
        //add sticky class to post if post sticked
        $readmore = r_energy_settings('read_more', 'Read More');
        $excerptsz = r_energy_settings('excerptsz', '30');
        ?>
        <div id="post-<?php echo get_the_ID(); ?>" <?php echo post_class(esc_attr('nt-blog-item')); ?>>
            <div class="nt-blog-item-inner">
                <?php r_energy_post_format(); ?>
                <div class="nt-blog-info">
                <?php
                    r_energy_post_categories();
                    // post title
                    if ('0' != r_energy_settings('post_title_visibility', '1')) {
                        the_title(sprintf('<h2 class="nt-blog-info-title post__title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
                    }
                    // post meta function contains author - date - comments
                    if (!is_search()) {
                        r_energy_post_meta();
                    }
                    // post content function for loop excerpt.
                    if ('0' != r_energy_settings('post_excerpt_visibility', '1') ) {
                        if (has_excerpt()) {
                            echo '<div class="nt-blog-info-excerpt">'. wp_trim_words(get_the_excerpt(), $excerptsz) .'</div>';
                        } else {
                            echo '<div class="nt-blog-info-excerpt">'. wp_trim_words(strip_tags(get_the_content()), $excerptsz) .'</div>';
                        }
                    }

                    // this function must be using for wp linkable pages, don't delete!
                    r_energy_wp_link_pages();

                    if (!is_search()) {
                        // post read-more button.
                        if ('0' != r_energy_settings('post_button_visibility', '1')) {
                            echo '<div class="nt-blog-info-link">
                                    <a href="'.esc_url(get_permalink()).'" class="nt-btn-theme nt-post-button btn">'.esc_html($readmore).'</a>
                                </div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php
    }
}


if (! function_exists('r_energy_post_style_one')) {
    function r_energy_post_style_one()
    {
        ?>
        <div id="post-<?php echo get_the_ID(); ?>" <?php echo post_class(); ?>>
            <div class="col-12">
                <div class="blog-inner-item blog-item">

                    <?php if (has_post_thumbnail()) { ?>
                        <a class="img-holder" href="<?php echo esc_url(get_permalink()) ?>">
                            <div class="overlay">
                                <?php the_post_thumbnail( 'full', array( 'class' => 'img-bg' ) ); ?>
                            </div>
                        </a>
                    <?php } ?>

                    <div class="content-holder">

                        <?php if (is_sticky()) {
                            echo '<div class="nt-sticky-label">'.esc_html__('Sticky', 'r-energy').'</div>';
                        } ?>

                        <span class="category"><?php r_energy_post_categories(); ?></span>

                        <?php

                            if ('0' != r_energy_settings('post_title_visibility', '1')) {
                                the_title(sprintf('<h3 class="nt-blog-info-title title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h3>');
                            }
                        ?>

                             <div class="post-day"><?php the_time(get_option( 'date_format' )); ?></div>

                            <?php
                            // post content function for loop excerpt.
                            if ('0' != r_energy_settings('post_excerpt_visibility', '1') ) {
                                if (has_excerpt()) {
                                    echo '<div class="text-holder"><p class="text">'. wp_trim_words(get_the_excerpt(), r_energy_settings('excerptsz', '30')) .'</p></div>';
                                } else {
                                    echo '<div class="text-holder"><p class="text">'. wp_trim_words(strip_tags(get_the_content()), r_energy_settings('excerptsz', '30')) .'</p></div>';
                                }
                            }

                            r_energy_wp_link_pages();

                        ?>

                    </div>

                </div>
            </div>
        </div>
        <?php
    }
}


if (! function_exists('r_energy_post_style_two')) {
    function r_energy_post_style_two()
    {
        //add sticky class to post if post sticked
        ?>
        <div id="post-<?php echo get_the_ID(); ?>" <?php echo post_class(); ?>>
            <div class="col-12">
                <?php if (has_post_thumbnail()) { ?>
                    <a class="img-holder" href="<?php echo esc_url(get_permalink()) ?>">
                        <div class="overlay">
                            <?php the_post_thumbnail( 'full', array( 'class' => 'img-bg' ) ); ?>
                        </div>
                    </a>
                <?php } ?>
                <div class="content-holder">
                    <div class="ribbon">
                        <p><span class="day"><span class="day"><?php echo the_time(get_option( 'date_format' )); ?></span></p>
                    </div>
                    <span class="category"><?php r_energy_post_categories(); ?></span>
                    <?php
                    if ('0' != r_energy_settings('post_title_visibility', '1')) {
                        the_title(sprintf('<h3 class="nt-blog-info-title title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h3>');
                    }
                    // post content function for loop excerpt.
                    if ('0' != r_energy_settings('post_excerpt_visibility', '1') ) {
                        if (has_excerpt()) {
                            echo '<div class="text-holder"><p class="text">'. wp_trim_words(get_the_excerpt(), r_energy_settings('excerptsz', '30')) .'</p></div>';
                        } else {
                            echo '<div class="text-holder"><p class="text">'. wp_trim_words(strip_tags(get_the_content()), r_energy_settings('excerptsz', '30')) .'</p></div>';
                        }
                    }
                    r_energy_wp_link_pages();
                    ?>
                </div>
            </div>
        </div>
        <?php
    }
}

/*************************************************
##  POST FORMAT
*************************************************/

if (! function_exists('r_energy_post_format')) {
    function r_energy_post_format()
    {
        // post format
        $format = get_post_format();
        $format = $format ? $format : 'standard';

        // post format video or audio embed
        if ('video' == $format || 'audio' == $format) { }


            if (has_post_thumbnail()) {

                echo '<div class="nt-blog-media">
					<a class="nt-blog-media-link" href="'.esc_url(get_permalink()).'">';
                    the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) );
					echo'</a>
				</div>';
            }

    }
}




/*************************************************
##  POST/CPT META
*************************************************/

if (! function_exists('r_energy_post_meta')) {
    function r_energy_post_meta()
    {
        global $post;
        $archive_year = get_the_time('Y');
        $archive_month = get_the_time('m');
        $archive_day = get_the_time('d');
        $author_id = get_the_author_meta('ID');
        $author_link = get_author_posts_url($author_id);

        if ('0' != r_energy_settings('post_meta_visibility', '1')) {
            ?>
            <!-- Post Category, Author, Comments -->
            <ul class="nt-blog-info-meta">

                <?php
                if (is_sticky()) {
                    echo '<div class="nt-sticky-label">'.esc_html__('Sticky', 'r-energy').'</div>';
                }
                // post author
                if ('0' != r_energy_settings('post_author_visibility', '1')) {
                ?>
                    <li class="nt-blog-info-meta-item">
                        <a class="nt-blog-info-meta-link" href="<?php echo esc_url($author_link); ?>"><?php the_author(); ?></a>
                    </li>
                <?php
                }
                if( 'masonry' != r_energy_settings( 'index_type', 'masonry' ) ) {
                    // post comments
                    if ('0' != r_energy_settings('post_comments_visibility', '1')) {
                        ?>
                        <li class="nt-blog-info-meta-item">
                            <a class="nt-blog-info-meta-link" href="<?php echo get_comments_link( $post->ID ); ?>"><?php comments_number(); ?></a>
                        </li>
                        <?php
                    }
                }
                // post date
                if ('0' != r_energy_settings('post_date_visibility', '1')) { ?>
                    <li class="nt-blog-info-meta-item">
                        <a class="nt-blog-info-meta-link" href="<?php echo esc_url(get_day_link($archive_year, $archive_month, $archive_day)); ?>">
                            <?php the_time(get_option('date_format')); ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
            <?php
        }
    }
}

/*************************************************
##  SINLGE POST/CPT TAGS
*************************************************/

if (! function_exists('r_energy_post_categories')) {
    function r_energy_post_categories()
    {
        if ('0' != r_energy_settings('post_category_visibility', '1') && has_category()) {
            ?>
            <!-- Post Categories -->
            <h5 class="nt-blog-info-category"><?php the_category(', '); ?></h5>
            <?php
        }
    }
    add_action( 'r_energy_post_categories_action',  'r_energy_post_categories', 10 );
}

/*************************************************
##  POST/CPT DATE
*************************************************/

if (! function_exists('r_energy_post_date')) {
    function r_energy_post_date()
    {
        $archive_year = get_the_time('Y');
        $archive_month = get_the_time('m');
        $archive_day = get_the_time('d');
        ?>
        <li class="nt-blog-info-meta-item">
            <a class="nt-blog-info-meta-link post-date" href="<?php echo esc_url(get_day_link($archive_year, $archive_month, $archive_day)); ?>">
                <i class="fa fa-calendar"></i>
                <?php the_time(get_option('date_format')); ?>
            </a>
        </li>
        <?php
    }
    add_action( 'r_energy_post_date_action',  'r_energy_post_date', 10 );
}

/*************************************************
##  POST/CPT AUTHOR
*************************************************/

if (! function_exists('r_energy_post_author')) {
    function r_energy_post_author()
    {
        ?>
        <li class="nt-blog-info-meta-item">
            <a class="nt-blog-info-meta-link post-author" href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                <i class="fa fa-user"></i>
                <?php the_author(); ?>
            </a>
        </li>
        <?php
    }
    add_action( 'r_energy_post_author_action',  'r_energy_post_author', 10 );
}


/*************************************************
##  POST/CPT COMMENT
*************************************************/

if (! function_exists('r_energy_post_comment')) {
    function r_energy_post_comment()
    {
        ?>
        <li class="nt-blog-info-meta-item">
            <a class="nt-blog-info-meta-link post-comment" href="<?php echo get_comments_link( get_the_ID() ); ?>">
                <i class="fa fa-comments"></i>
                <?php comments_number(); ?>
            </a>
        </li>
        <?php
    }
    add_action( 'r_energy_post_comment_action',  'r_energy_post_comment', 10 );
}


/*************************************************
## SINGLE POST AUTHOR BOX FUNCTION
*************************************************/

if (! function_exists('r_energy_single_post_author_box')) {
    function r_energy_single_post_author_box()
    {
        global $post;
        if ('0' != r_energy_settings('single_post_author_box_visibility', '1')) {
            // Get author's display name
            $display_name = get_the_author_meta('display_name', $post->post_author);
            // If display name is not available then use nickname as display name
            $display_name = empty($display_name) ? get_the_author_meta('nickname', $post->post_author) : $display_name ;
            // Get author's biographical information or description
            $user_description = get_the_author_meta('user_description', $post->post_author);
            // Get author's website URL
            $user_website = get_the_author_meta('url', $post->post_author);
            // Get link to the author archive page
            $user_posts = get_author_posts_url(get_the_author_meta('ID', $post->post_author));
            // Get the rest of the author links. These are stored in the
            // wp_usermeta table by the key assigned in wpse_user_contactmethods()
            $author_facebook = get_the_author_meta('facebook', $post->post_author);
            $author_twitter  = get_the_author_meta('twitter', $post->post_author);
            $author_linkedin = get_the_author_meta('linkedin', $post->post_author);
            $author_youtube  = get_the_author_meta('youtube', $post->post_author);


                ?>
                <div class="heading">
					<div class="author">
						<div class="author-block">
							<div class="img-holder">
                                <?php if (function_exists('get_avatar')) {
                                    echo get_avatar(get_the_author_meta('email'), '50');
                                } ?>
                            </div>
                                <span class="name"><?php echo esc_html($display_name); ?></span>
						</div>
					</div>
					<div class="comment-detail">

                        <div class="comments-count">
							<svg class="icon"><use xlink:href="#comment"></use></svg><span class="count"><?php esc_html_e( 'Posts made:', 'r-energy' ) ?> <?php the_author_posts(); ?></span>
						</div>

					</div>
					<!-- socials start-->
					<nav class="socials-holder">
                        <ul class="socials-primary">
                            <?php if ('' != $author_facebook) { ?>
                            <li class="nt-author-social-item">
								<a class="nt-author-social-link -icon-facebook" href="<?php echo esc_url($author_facebook); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							</li>
                            <?php } ?>
                            <?php if ('' != $author_twitter) { ?>
                            <li class="nt-author-social-item">
								<a class="nt-author-social-link -icon-twitter" href="<?php echo esc_url($author_twitter); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</li>
                            <?php } ?>
                            <?php if ('' != $author_linkedin) { ?>
                            <li class="nt-author-social-item">
								<a class="nt-author-social-link -icon-linkedin" href="<?php echo esc_url($author_linkedin); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							</li>
                            <?php } ?>
                            <?php if ('' != $author_youtube) { ?>
                            <li class="nt-author-social-item">
								<a class="nt-author-social-link -icon-youtube" href="<?php echo esc_url($author_youtube); ?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
							</li>
                            <?php } ?>
                        </ul>
					</nav>
					<!-- socials end -->
				</div>
                <?php

        }
    }
}


/*************************************************
##  SINLGE POST/CPT TAGS
*************************************************/

if (! function_exists('r_energy_single_post_tags')) {
    function r_energy_single_post_tags()
    {
        if ('0' != r_energy_settings('single_postmeta_tags_visibility', '1')) {
            if (has_tag()) {
                ?>
                <!-- Post Tags -->
                <div class="tags-block tags-block-bottom">
                
                        <?php
                        $tags = get_the_tags(get_the_ID());
                        foreach ($tags as $tag) {
                            echo '<a href="'.esc_url(get_tag_link($tag->term_id)).'"><span class="tag">'.esc_html( $tag->name ).'</span></a>';
                        }
                        ?>
                </div>
                <!-- Post Tags End -->
                <?php
            }
        }
    }
}
/*************************************************
## SINGLE PAGE POST CONTENT FUNCTION
*************************************************/

if (! function_exists('r_energy_single_post_categories')) {
    function r_energy_single_post_categories()
    {
        if (has_category()) {
            ?>
            <div class="tags-block">
                <span class="name"><?php esc_html_e('Categories:', 'r-energy'); ?></span>
                    <?php
                    $categories = get_the_category();
                    foreach ($categories as $category) {
                        echo '<a href="'.esc_url( get_category_link( $category->term_id ) ).'"><span class="tag">'.esc_html( $category->name ).'</span></a>';
                    }
                    ?>
                </div>
            <?php
        }
    }
}


/*************************************************
## SINGLE POST RELATED POSTS
*************************************************/

if (! function_exists('r_energy_single_post_related')) {
    function r_energy_single_post_related()
    {
        if ('0' != r_energy_settings('single_related_visibility', '1')  ) {
            global $post;
            $cats = get_the_category($post->ID);
            $args = array(
                'post__not_in' => array($post->ID),
                'posts_per_page' => 6,
            );
            // Query posts
            $related_cats_post = new WP_Query( $args );
            if($related_cats_post->have_posts()) : ?>
            <div class="additional section live-comment">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading primary-heading text-center">
								<h6 class="title"><?php echo esc_html__('Related Posts', 'r-energy'); ?></h6>
                                <h5 class="subtitle"><?php echo r_energy_settings('related_title', '<span>You Might</span> <span>be Interested</span>'); ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="additional-slider">
                                <?php
                                	while($related_cats_post->have_posts()):
                                    $related_cats_post->the_post();

                                        $thumbnial =  has_post_thumbnail( $post->ID );
                                        $has_thumbnial = $thumbnial;

                                ?>
                                    <div class="slider-item">
                                        <figure class="related-item">

                                             <?php if ($thumbnial) { ?>
                                            <a class="img-holder" href="<?php esc_url( the_permalink() ); ?>">
                                                 <?php the_post_thumbnail('nt-related-post'); ?>
                                            </a>
                                             <?php } ?>



                                            <figcaption>
                                                <h4 class="title"><a href="<?php esc_url( the_permalink() ); ?>"><?php echo wp_trim_words(get_the_title(), 5); ?></a></h4>

                                                <?php
                                                 // post content function for loop excerpt.
                                                if ('0' != r_energy_settings('related_excerpt_visibility', '1') && empty ($thumbnial) ) {
                                                    if (has_excerpt()) {
                                                        echo '<div class="text-holder"><p class="text">'. wp_trim_words(get_the_excerpt(), r_energy_settings('related_excerptsz', '40')) .'</p></div>';
                                                    } else {
                                                        echo '<div class="text-holder"><p class="text">'. wp_trim_words(strip_tags(get_the_content()), r_energy_settings('related_excerptsz', '40')) .'</p></div>';
                                                    }
                                                } ?>

												<a class="with--line" href="<?php esc_url( the_permalink() ); ?>"><span><?php  echo esc_html__('Read More', 'r-energy'); ?></span></a>
                                            </figcaption>
                                        </figure>
                                    </div>
                                <?php

									endwhile;
                                 	wp_reset_postdata();
								?>
                            </div>
                            <div class="additional-dots"></div>
                        </div>
                    </div>
                </div>
            </div>
                <?php
            endif;
        }
    }
}
