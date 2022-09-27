<?php get_header( );?>

    <!-- Breadcrumb Section Begin -->
    <?php get_template_part( 'section-templates/bradcrump');?>
    <!-- Breadcrumb Section End -->
    <!-- Class Details Section Begin -->
    <section class="class-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="class-details-text">
                        <div class="cd-pic">
                            <?php the_post_thumbnail( );?>
                        </div>
                        <div class="cd-text">
                            <div class="cd-single-item">
                                <h3><?php the_title( );?></h3>
                                <p><?php the_content( );?></p>
                            </div>
                        </div>
                        <?php get_template_part( 'section-templates/single-class-trainer');?> 
                    </div>
                </div>
                <?php get_sidebar( );?>
            </div>
        </div>
    </section>
    <!-- Class Details Section End -->


        <!-- Get In Touch Section Begin -->
        <?php get_template_part( 'section-templates/timetable');?> 
        <!-- Get In Touch Section End -->
        <!-- Get In Touch Section Begin -->
        <?php get_template_part( 'section-templates/section-getintouch');?> 
        <!-- Get In Touch Section End -->
<?php get_footer( );?>

  