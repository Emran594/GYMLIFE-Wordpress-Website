<?php 
/**
 * Template Name: About Us
*/
?>
<?php get_header( );?>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <?php get_template_part( 'section-templates/bradcrump');?>
    <!-- Breadcrumb Section End -->

    <!-- ChoseUs Section Begin -->
    <?php get_template_part( 'section-templates/section-choseus');?> 
    <!-- ChoseUs Section End -->

    <!-- About US Section Begin -->
    <?php if ( true == get_theme_mod( 'about_switcher', true ) ) : ?>
    <section class="aboutus-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <?php $image = get_theme_mod( 'video_thumbnail' );?>
                    <div class="about-video set-bg" data-setbg="<?php echo $image;?>">
                        <a href="<?php echo esc_url(get_theme_mod( 'video_link' ));?>" class="play-btn video-popup"><i
                                class="fa fa-caret-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="about-text">
                        <div class="section-title">
                            <span><?php echo esc_html__( get_theme_mod('about_subitle'))?></span>
                            <h2><?php echo esc_html__( get_theme_mod('about_title'))?></h2>
                        </div>
                        <div class="at-desc">
                            <p><?php echo esc_html__( get_theme_mod('about_content'))?></p>
                        </div>
                        <div class="about-bar">
                            <?php 
                                $gymlife_statistics = get_theme_mod('about_statistics');
                                foreach($gymlife_statistics as $statistics):
                            ?>
                            <div class="ab-item">
                                <p><?php echo esc_html( $statistics['title'] ); ?></p>
                                <div id="bar1" class="barfiller">
                                    <span class="fill" data-percentage="<?php echo $statistics['data']?>"></span>
                                    <div class="tipWrap">
                                        <span class="tip"></span>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach;?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif;?>
    <!-- About US Section End -->

    <!-- Team Section Begin -->
    <?php get_template_part( 'section-templates/section-team');?> 
    <!-- Team Section End -->

    <!-- Banner Section Begin -->
	<?php get_template_part( 'section-templates/section-banner');?> 
    <!-- Banner Section End -->
    <?php if ( true == get_theme_mod( 'testimonial_switcher', true ) ) : ?>
    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span><?php echo esc_html( get_theme_mod('testimonial_section_subtitle') );?></span>
                        <h2><?php echo esc_html( get_theme_mod('testimonial_section_title') );?></h2>
                    </div>
                </div>
            </div>
            <div class="ts_slider owl-carousel">

            <?php 
                $testimonial_data = get_theme_mod('testimonial');

                foreach($testimonial_data as $testimonial_info):
            ?>
                <div class="ts_item">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="ti_pic">
                                <img src="<?php echo wp_get_attachment_url( $testimonial_info['testimonial_img'] ); ?>" alt="">
                            </div>
                            <div class="ti_text">
                                <p><?php echo esc_html($testimonial_info['content'] );?></p>
                                <h5><?php echo esc_html($testimonial_info['name'] );?></h5>
                                <div class="tt-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endforeach;?>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->
    <?php endif;?>

    <!-- Get In Touch Section Begin -->
    <?php get_template_part( 'section-templates/section-getintouch');?> 
    <!-- Get In Touch Section End -->
<?php get_footer( );?>