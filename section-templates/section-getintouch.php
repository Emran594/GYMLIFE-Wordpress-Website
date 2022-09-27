<?php if ( true == get_theme_mod( 'getintouch', true ) ) : ?>
<div class="gettouch-section">
        <div class="container">
            <div class="row">
            <?php 
                $gymlife_touch = get_theme_mod( 'getintouch_repeater' );
                foreach($gymlife_touch as $info):
            ?>

                <div class="col-md-4">
                    <div class="gt-text">
                        <i class="fa <?php echo esc_attr( $info['touch_icon'] )?>"></i>
                        <p><?php echo esc_html( $info['touch_content'] )?></p>
                    </div>
                </div>
                <?php endforeach;?>

            </div>
        </div>
    </div>
    <?php endif;?>