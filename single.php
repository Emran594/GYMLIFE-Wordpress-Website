<?php the_post(  );?>
<?php get_header( );?>


    <!-- Blog Details Hero Section Begin -->
    <section class="blog-details-hero set-bg" data-setbg="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 p-0 m-auto">
                    <div class="bh-text">
                        <h3><?php the_title( );?></h3>
                        <ul>
                            <li><?php the_author( );?></li>
                            <li><?php echo get_the_date( );?></li>
                            <li><?php comments_number( );?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero Section End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 p-0 m-auto">
                    <div class="blog-details-text">
                        <div class="blog-details-title">
                            <?php the_content( );?>
                        </div>
                        <div class="blog-details-tag-share">
                            <div class="tags">
                            <?php the_tags('', ', ', '<br />'); ?>
                            </div>
                            <?php 
                                    if(is_active_sidebar( 'social_share' )){
                                        dynamic_sidebar( 'social_share' );
                                    }
                                ?>
                        </div>
                        <div class="blog-details-author">
                            <div class="ba-pic">
                               <?php echo get_avatar( get_the_author_meta('ID'));?>
                            </div>
                            <div class="ba-text">
                                <h5><?php the_author( );?></h5>
                                <p><?php the_author_meta( 'description');?></p>
                                        <?php 
                                            $author_social = get_field('author_social');
                                                if($author_social):
                                                    $facebook = $author_social['facebook'];
                                                    $twitter = $author_social['twitter'];
                                                    $youtube = $author_social['youtube'];
                                                    $pinterest = $author_social['github'];
                                                endif;
                                            ?>
                                <div class="bp-social">
                                    <a href="<?php echo $facebook ?>"><i class="fa fa-facebook"></i></a>
                                    <a href="<?php echo $twitter ?>"><i class="fa fa-twitter"></i></a>
                                    <a href="<?php echo $youtube ?>"><i class="fa fa-youtube"></i></a>
                                    <a href="<?php echo $github ?>"><i class="fa fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php
                            if(!post_password_required()){
                                comments_template();
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    <!-- Get In Touch Section Begin -->
    <?php get_template_part( 'section-templates/section-getintouch');?> 
    <!-- Get In Touch Section End -->
<?php get_footer( );?>