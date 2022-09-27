<?php if ( true == get_theme_mod( 'banner_switcher', true ) ) :
    $image_url = get_theme_mod( 'banner_img' );    
?>

<section class="banner-section set-bg" data-setbg="<?php echo esc_url( $image_url ); ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="bs-text">
                        <h2><?php echo esc_html( get_theme_mod('banner_title') )?></h2>
                        <div class="bt-tips"><?php echo esc_html( get_theme_mod('banner_subtitle') )?></div>
                        <a href="<?php echo esc_url( get_theme_mod('banner_btn_link') );?>" class="primary-btn  btn-normal"><?php echo esc_html( get_theme_mod('banner_btn_label') )?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif;?>