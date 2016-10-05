<?php
/**
 * Template Name: Download App template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'download-app'); ?>
<?php endwhile; ?>
