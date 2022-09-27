<?php if ( true == get_theme_mod( 'gallery_switcher', true ) ) : ?>
<div class="gallery-section">
        <div class="gallery">
            <div class="grid-sizer"></div>
            <?php 
                $image_bg_1 = get_theme_mod( 'gallery_img_big_1');
                $image_bg_2 = get_theme_mod( 'gallery_img_big_2');
            ?>
            <div class="gs-item grid-wide set-bg" data-setbg="<?php echo esc_url( $image_bg_1 ); ?>">
                <a href="<?php echo esc_url( $image_bg_1 ); ?>" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
            <?php 
                $gallery_images = get_theme_mod( 'gallery' );
            ?>
            <?php foreach($gallery_images as $gallery_img): ?>
            <div class="gs-item set-bg" data-setbg="<?php echo wp_get_attachment_url( $gallery_img['gallery_img'] ); ?>">
                <a href="<?php echo wp_get_attachment_url( $gallery_img['gallery_img'] ); ?>" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
                <?php endforeach;?>

            <div class="gs-item grid-wide set-bg" data-setbg="<?php echo esc_url( $image_bg_2 ); ?>">
                <a href="<?php echo esc_url( $image_bg_2 ); ?>" class="thumb-icon image-popup"><i class="fa fa-picture-o"></i></a>
            </div>
        </div>
    </div>
<?php endif; ?>