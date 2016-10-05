<?php
/**
 * Template Name: Features template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'features'); ?>
  <?php get_template_part('templates/footer', 'promo'); ?>
<?php endwhile; ?>
