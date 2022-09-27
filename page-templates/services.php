<?php 
/**
 * Template Name: Services
*/
?>
<?php get_header( );?>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <?php get_template_part( 'section-templates/bradcrump');?>
    <!-- Breadcrumb Section End -->
    <!-- Services Section Begin -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>What we do?</span>
                        <h2>PUSH YOUR LIMITS FORWARD</h2>
                    </div>
                </div>
            </div>
            <?php 
                $services = get_field('services');
                $image = $services['service_image'];
            ?>
            <div class="row">
                <div class="col-lg-3 order-lg-1 col-md-6 p-0">
                    <div class="ss-pic">
                    <?php echo wp_get_attachment_image( $image);?>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-2 col-md-6 p-0">
                    <div class="ss-text">
                        <h4><?php echo $services['service_title'];?></h4>
                        <p><?php echo $services['service_content'];?></p>
                        <a href="<?php echo $services['service_link'];?>"><?php echo $services['service_button'];?></a>
                    </div>
                </div>
                <?php 
                $services2 = get_field('services2');
                $image2 = $services2['service_image'];
            ?>
                <div class="col-lg-3 order-lg-3 col-md-6 p-0">
                    <div class="ss-pic">
                    <?php echo wp_get_attachment_image( $image2);?>
                    </div>
                </div>

                <div class="col-lg-3 order-lg-4 col-md-6 p-0">
                    <div class="ss-text">
                        <h4><?php echo $services2['service_title'];?></h4>
                        <p><?php echo $services2['service_content'];?></p>
                        <a href="<?php echo $services2['service_link'];?>"><?php echo $services2['service_button'];?></a>
                    </div>
                </div>
            <?php 
                $services3 = get_field('services3');
                $image3 = $services3['service_image'];
            ?>
                <div class="col-lg-3 order-lg-8 col-md-6 p-0">
                    <div class="ss-pic">
                    <?php echo wp_get_attachment_image( $image3);?>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-7 col-md-6 p-0">
                    <div class="ss-text second-row">
                    <h4><?php echo $services3['service_title'];?></h4>
                        <p><?php echo $services3['service_content'];?></p>
                        <a href="<?php echo $services3['service_link'];?>"><?php echo $services3['service_button'];?></a>
                    </div>
                </div>
                <?php 
                $services4 = get_field('services4');
                $image4 = $services4['service_image'];
                ?>
                <div class="col-lg-3 order-lg-6 col-md-6 p-0">
                    <div class="ss-pic">
                    <?php echo wp_get_attachment_image( $image4);?>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-5 col-md-6 p-0">
                    <div class="ss-text second-row">
                        <h4><?php echo $services4['service_title'];?></h4>
                        <p><?php echo $services4['service_content'];?></p>
                        <a href="<?php echo $services4['service_link'];?>"><?php echo $services4['service_button'];?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Banner Section Begin -->
	<?php get_template_part( 'section-templates/section-banner');?> 
    <!-- Get In Touch Section Begin -->
    <?php get_template_part( 'section-templates/section-pricing');?> 
    <?php get_template_part( 'section-templates/section-getintouch');?> 
    <!-- Get In Touch Section End -->
<?php get_footer( );?>