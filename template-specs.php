<?php
/**
 * Template Name: Specs & Design template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'specs'); ?>
  <?php get_template_part('templates/footer', 'promo'); ?>
<?php endwhile; ?>
