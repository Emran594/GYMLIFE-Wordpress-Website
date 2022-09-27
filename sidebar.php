
                <div class="col-lg-4 col-md-8">
                    <div class="sidebar-option">
                        <div class="so-categories">
                            <h5 class="title">Categories</h5>
                                <ul>
                                <?php 
                                $defaults = array(
                                    'echo'                => 1,
                                    'exclude'             => '',
                                    'exclude_tree'        => '',
                                    'feed'                => '',
                                    'feed_image'          => '',
                                    'feed_type'           => '',
                                    'hide_empty'          => 0,
                                    'hide_title_if_empty' => false,
                                    'hierarchical'        => true,
                                    'order'               => 'ASC',
                                    'orderby'             => 'name',
                                    'separator'           => '<br />',
                                    'show_count'          => 1,
                                    'show_option_all'     => '',
                                    'show_option_none'    => __( 'No categories' ),
                                    'style'               => 'list',
                                    'taxonomy'            => 'category',
                                    'title_li'            => __return_false(  ),
                                    'use_desc_for_title'  => 1,
                                );
                                $links = wp_list_categories($defaults);
                                $links = str_replace('</a><span>', '<span>', $links);
                                $links = str_replace('</span>','</span></a>', $links);
                              echo $links;
                            ?>
                        </ul>
                        </div>
                        <div class="so-latest">
                            <h5 class="title">Latest posts</h5>
                            <?php 
                                $sidebar_post= new WP_Query(
                                array(
                                    "post_type" => "post",
                                    'posts_per_page' => 6
                                            )
                                        )
                            ?>
                            <?php while($sidebar_post->have_posts(  )):
                                $sidebar_post->the_post(  );    
                            ?>
                            <?php if(0 == $sidebar_post->current_post):?>
                            <div class="latest-large set-bg" data-setbg="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>">
                                <div class="ll-text">
                                    <h5><a href="<?php the_permalink( );?>"><?php the_title( );?></a></h5>
                                    <ul>
                                        <li><?php echo get_the_date( );?></li>
                                        <li><?php comments_number( );?></li>
                                    </ul>
                                </div>
                            </div>
                            <?php endif;?>
                            <div class="latest-item">
                                <div class="li-pic">
                                    <?php the_post_thumbnail( 'sidebar');?>
                                </div>
                                <div class="li-text">
                                    <h6><a href="<?php the_permalink( );?>"><?php the_title( );?></a></h6>
                                    <span class="li-time"><?php echo get_the_date( );?></span>
                                </div>
                            </div>
                            <?php endwhile;
                                wp_reset_query(  );
                            ?>
                        </div>
                                <?php 
                                    if(is_active_sidebar( 'sidebar-4' )){
                                        dynamic_sidebar( 'sidebar-4' );
                                    }
                                ?>
                    </div>
                </div>
