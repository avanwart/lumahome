<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header-new'); ?>
  <?php get_template_part('templates/content', 'front-page-new'); ?>
  <?php get_template_part('templates/footer', 'promo-new'); ?>
<?php endwhile; ?>
