<?php
/**
 * Template Name: Product Purchase Page
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'product-purchase'); ?>
<?php endwhile; ?>
