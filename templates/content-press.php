
<header style="background-image:url(<?=the_post_thumbnail_url(); ?>);" class="header header--short header--light header--center-center <?=the_field('mobile_background_position') ?>">
  <div class="header__container">
    <?php if ( get_field('header_headline') ): ?>
    <h1 class="header__title"><?= the_field('header_headline'); ?></h1>
    <?php endif; ?>
  </div>
</header>
<?php if ( have_rows('featured_articles') ): ?>
<section class="press-examples press-examples--primary">
  <div class="press-examples__container">
    <?php while( have_rows('featured_articles') ): the_row(); ?>
    <?php $logoURL = get_sub_field('article_logo'); ?>
    <?php $articleURL = get_sub_field('article_url'); ?>
    <?php $articleExcerpt = get_sub_field('article_excerpt'); ?><a href="<?= $articleURL; ?>" target="_blank" data-match-height="press-blocks" class="press-examples__block press-quote">
      <div class="press-quote__image"><img src="<?= $logoURL; ?>"/></div>
      <p class="press-quote__excerpt"><?= $articleExcerpt; ?></p></a>
    <?php endwhile; ?>
  </div>
</section>
<?php endif; ?>
<?php if ( have_rows('articles') ): ?>
<section class="press-examples press-examples--secondary">
  <div class="press-examples__container">
    <?php while( have_rows('articles') ): the_row(); ?>
    <?php $logoURL = get_sub_field('article_logo'); ?>
    <?php $articleURL = get_sub_field('article_url'); ?><a href="<?= $articleURL; ?>" target="_blank" class="press-examples__block press-logo">
      <div class="press-quote__image"><img src="<?= $logoURL; ?>"/></div></a>
    <?php endwhile; ?>
  </div>
</section>
<?php endif; ?>
<section class="press-kit">
  <div class="press-kit__container">
    <?php if ( get_field('presskit_image') ): ?><img src="<?=the_field('presskit_image'); ?>" class="press-kit__image"/>
    <?php endif; ?>
    <div class="press-kit__copy">
      <?php if ( get_field('presskit_headline') ): ?>
      <h2><?=the_field('presskit_headline'); ?></h2>
      <?php endif; ?>
      <?php if ( get_field('presskit_tagline') ): ?>
      <p><?=the_field('presskit_tagline'); ?></p>
      <?php endif; ?>
      <?php if ( get_field('presskit_url') ): ?><a href="<?=the_field('presskit_url'); ?>" target="_blank" class="btn btn--outline">Download Press Kit</a>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>