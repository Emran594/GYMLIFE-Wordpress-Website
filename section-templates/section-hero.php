<?php if ( true == get_theme_mod( 'banner_settings', true ) ) : ?>
<section class="hero-section">
        <div class="hs-slider owl-carousel">
        <?php 
            $slider_data = get_theme_mod( 'slider');
            foreach($slider_data as $slider):
        ?>
            <div class="hs-item set-bg" data-setbg="<?php echo wp_get_attachment_url( $slider['slider_img'] ); ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6">
                            <div class="hi-text">
                                <span><?php echo $slider['slider_subtitle'];?></span>
                                <h1><?php echo $slider['slider_title'];?></h1>
                                <a href="<?php $slider['link_url'];?>" class="primary-btn"><?php echo $slider['link_text'];?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>