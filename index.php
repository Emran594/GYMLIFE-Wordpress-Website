<?php get_header( );?>

    <!-- Breadcrumb Section Begin -->
    <?php get_template_part( 'section-templates/bradcrump');?>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 p-0">
                    <?php 
                        while(have_posts(  )){
                            the_post(  )
                            ?>
                        <div class="blog-item">
                        <div class="bi-pic">
                            <?php the_post_thumbnail( );?>
                        </div>
                        <div class="bi-text">
                            <h5><a href="<?php the_permalink( );?>"><?php the_title( );?></a></h5>
                            <ul>
                                <li><?php the_author( );?></li>
                                <li><?php echo get_the_date( );?></li>
                                <li><?php comments_number( );?></li>
                            </ul>
                            <p><?php the_excerpt(  );?></p>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                    <div class="blog-pagination">
                    <?php the_posts_pagination( array() ); ?>
                    </div>
                </div>
            <?php get_sidebar( );?>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Get In Touch Section Begin -->
    <?php get_template_part( 'section-templates/section-getintouch');?> 
    <!-- Get In Touch Section End -->

    <!-- Footer Section Begin -->
    <?php get_footer( );?>