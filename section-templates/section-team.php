<section class="team-section spad">
        <div class="container">
            <div class="row">
            <?php get_template_part( 'section-templates/common/team-heading');?>
            </div>
            <div class="row">
                <div class="ts-slider owl-carousel">
                <?php 
                    $gymlife_trainer = new WP_Query(
                        array(
                            "post_type" => "trainer",
                            'posts_per_page' => 6
                        )
                    )
                ?>
                <?php 
                    while($gymlife_trainer->have_posts(  )):
                        $gymlife_trainer->the_post(  );
                ?>
                    <div class="col-lg-4">
                        <div class="ts-item set-bg" data-setbg="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>">
                            <div class="ts_text">
                                <h4><?php the_title( );?></h4>
                                <?php 
                                    foreach((get_the_category()) as $category) {
                                $category->name.'';
                          } ?>
                                <span><?php echo $category->name;?></span>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;?>
                </div>
            </div>
        </div>
    </section>