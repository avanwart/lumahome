
<section class="default">
  <div class="default__container">
    <?php the_content(); ?>
  </div>
</section>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>