<?php 
/**
 * Template Name: Our Team
*/
?>
<?php get_header( );?>
    <!-- Breadcrumb Section Begin -->
    <?php get_template_part( 'section-templates/bradcrump');?>
    <!-- Breadcrumb Section End -->
    <!-- Team Section Begin -->
    <section class="team-section team-page spad">
        <div class="container">
            <div class="row">
            <?php get_template_part( 'section-templates/common/team-heading');?>
            </div>
            <div class="row">
            <?php 
                    $gymlife_trainer = new WP_Query(
                        array(
                            "post_type" => "trainer"
                        )
                    )
                ?>
                <?php 
                while($gymlife_trainer->have_posts(  )):
                $gymlife_trainer->the_post(  );
                ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="ts-item set-bg" data-setbg="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>">
                        <div class="ts_text">
                            <h4><?php the_title( );?></h4>
                            <?php 
                            foreach((get_the_category()) as $category) {
                            $category->name.'';
                          } ?>
                            <span><?php echo $category->name;?></span>
                            <?php 
                                $social_profile = get_field('social_profile');
                                if($social_profile):
                                    $facebook = $social_profile['facebook'];
                                    $twitter = $social_profile['twitter'];
                                    $youtube = $social_profile['youtube'];
                                    $pinterest = $social_profile['pinterest'];
                                    $linkedin = $social_profile['linkedin'];
                            ?>
                            <div class="tt_social">
                                <a href="<?php echo esc_url($facebook);?>"><i class="fa fa-facebook"></i></a>
                                <a href="<?php echo esc_url($twitter);?>"><i class="fa fa-twitter"></i></a>
                                <a href="<?php echo esc_url($youtube);?>"><i class="fa fa-youtube-play"></i></a>
                                <a href="<?php echo esc_url($pinterest);?>"><i class="fa fa-pinterest"></i></a>
                                <a href="<?php echo esc_url($linkedin);?>"><i class="fa  fa-linkedin"></i></a>
                            </div>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
                <?php endwhile;?>

            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Get In Touch Section Begin -->
    <?php get_template_part( 'section-templates/section-getintouch');?> 
    <!-- Get In Touch Section End -->
<?php get_footer( );?>