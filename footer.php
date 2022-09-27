<?php
?>
<!-- Footer Section Begin -->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <?php 
                        if(is_active_sidebar( "sidebar-1" )){
                            dynamic_sidebar( "sidebar-1" );
                        }
                    ?>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="fs-widget">
                        <h4>Useful links</h4>
                            <?php 
                                wp_nav_menu( array(
                                    'theme_location' => 'footer-left',
                                    'container_class'=> 'fs-widget'
                                ) );
                            ?>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="fs-widget">
                        <h4>Support</h4>
                        <?php 
                                wp_nav_menu( array(
                                    'theme_location' => 'footer-right',
                                    'container_class'=> 'fs-widget'
                                ) );
                            ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="fs-widget">
                        <h4>Tips & Guides</h4>
                        <div class="fw-recent">
                        <?php  
                        $footer_post = new WP_Query( array(
                            'post_type' => 'post',
                            'posts_per_page' => 2
                        ) );
                        if ( $footer_post->have_posts() ) {
                            while ( $footer_post->have_posts() ) {
                                $footer_post->the_post();
                               ?>
                            <h6><a href="<?php the_permalink( );?>"><?php the_title( );?></a></h6>
                            <ul>
                                <li>3 min read</li>
                                <li><?php echo get_comments_number(); ?>Comment</li>
                            </ul>

                               <?php 
                            }
                        } else {
                            echo "There is no post here";
                        }
                        wp_reset_postdata();
                        
                        ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <?php  
                        if (is_active_sidebar( 'sidebar-3' )){
                            dynamic_sidebar( 'sidebar-3' );
                        }
                    ?>
                </div>
            </div>za
        </div>
    </section>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->
<?php wp_footer(  );?>



</body>

</html>