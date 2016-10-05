
<header style="background-image:url(<?=the_post_thumbnail_url(); ?>);" class="header header--center-top-center <?=the_field('mobile_background_position') ?>">
  <div class="header__container">
    <h1 class="header__title">Our story.</h1>
  </div>
</header>
<section class="article">
  <div class="article__container">
    <?php the_content(); ?>
  </div>
</section>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>