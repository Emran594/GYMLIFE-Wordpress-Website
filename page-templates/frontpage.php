<?php 
/**
 * Template Name: Homepage
*/
get_header(  );?>

    <!-- Hero Section Begin -->
	<?php get_template_part( 'section-templates/section-hero');?>
    <!-- Hero Section End -->

    <!-- ChoseUs Section Begin -->
	<?php get_template_part( 'section-templates/section-choseus');?> 
    <!-- ChoseUs Section End -->

    <!-- Classes Section Begin -->
	<?php get_template_part( 'section-templates/section-classes');?> 

    <!-- Banner Section Begin -->
	<?php get_template_part( 'section-templates/section-banner');?> 
    <!-- Banner Section End -->

    <!-- Pricing Section Begin -->
	<?php get_template_part( 'section-templates/section-pricing');?> 
    <!-- Pricing Section End -->

    <!-- Gallery Section Begin -->
	<?php get_template_part( 'section-templates/section-gallery');?> 
    <!-- Gallery Section End -->

    <!-- Team Section Begin -->
	<?php get_template_part( 'section-templates/section-team');?> 
    <!-- Team Section End -->

    <!-- Get In Touch Section Begin -->
    <?php get_template_part( 'section-templates/section-getintouch');?> 
    <!-- Get In Touch Section End -->
<?php get_footer(  ); ?>