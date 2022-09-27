<section class="breadcrumb-section set-bg" data-setbg="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>">
    <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2><?php the_title( );?></h2>
                        <div class="bt-option">
                            <a href="<?php echo site_url()?>">Home</a>
                            <span><?php the_title( );?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>