<?php
/**
 * Template Name: Press template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'press'); ?>
<?php endwhile; ?>
