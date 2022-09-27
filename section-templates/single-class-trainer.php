                    <?php $data = get_field('trainer')?>            
                    <?php
                    $inside_post = new WP_Query(array(
                        'post_type' => 'trainer',
                        'posts_per_page' => 1,
                        'p' => $data
                    )); 
                    while($inside_post->have_posts()):
                        $inside_post->the_post(  );
                    ?>                    
                        <div class="cd-trainer">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="cd-trainer-pic">
                                      <?php the_post_thumbnail( );?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="cd-trainer-text">
                                        <div class="trainer-title">
                                            <h4><?php the_title( );?></h4>
                                            <h1><?php echo the_field('trainer')?></h1>
                                            <?php 
                                                foreach((get_the_category()) as $category) {
                                                $category->name.'';
                                            } ?>
                                            <span><?php echo $category->name;?></span> 
                                        </div>
                                        <?php 
                                        $social_profile = get_field('social_profile');
                                        if($social_profile):
                                            $facebook = $social_profile['facebook'];
                                            $twitter = $social_profile['twitter'];
                                            $youtube = $social_profile['youtube'];
                                            $pinterest = $social_profile['pinterest'];
                                            $linkedin = $social_profile['linkedin'];
                                           ?>
                                        <?php endif;?>
                                        <div class="trainer-social">
                                        <a href="<?php echo esc_url($facebook);?>"><i class="fa fa-facebook"></i></a>
                                        <a href="<?php echo esc_url($twitter);?>"><i class="fa fa-twitter"></i></a>
                                        <a href="<?php echo esc_url($youtube);?>"><i class="fa fa-youtube-play"></i></a>
                                        <a href="<?php echo esc_url($pinterest);?>"><i class="fa fa-pinterest"></i></a>
                                        <a href="<?php echo esc_url($linkedin);?>"><i class="fa  fa-linkedin"></i></a>
                                        </div>
                                        <p><?php the_content( );?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile;
                            wp_reset_query(  );
                        ?>