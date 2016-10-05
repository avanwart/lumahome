
<header style="background-image:url(<?=the_post_thumbnail_url(); ?>);" class="header header--left header--light <?=the_field('mobile_background_position') ?>">
  <div class="header__container">
    <?php if ( get_field('header_headline') ): ?>
    <div class="header__copy">
      <h2 class="header__title"><?= the_field('header_headline'); ?></h2>
    </div>
    <?php endif; ?>
    <ul class="header__ctas">
      <?php if ( get_field('purchase_link') ): ?>
      <li><a href="<?=the_field('purchase_link'); ?>" target="_blank" class="btn btn--filled">BUY NOW</a></li>
      <?php endif; ?>
      <?php if ( get_field('video_link') ): ?>
      <li><a href="<?=the_field('video_link'); ?>" target="_blank" class="btn btn--dark js-youtube-popup">WATCH VIDEO</a></li>
      <?php endif; ?>
    </ul>
  </div>
</header>
<section class="product-overlap product-overlap--single"><img src="<?php bloginfo('template_url'); ?>/dist/images/product-luma.png" class="product-overlap__image"/>
  <div class="product-overlap__logos">
    <?php if ( have_rows('header_logos') ): ?>
    <?php $rows = get_field('header_logos'); ?>
    <ul class="media-logos">
      <?php $logos1 = array_slice($rows, 0, 3); ?>
      <?php foreach($logos1 as $item) {; ?>
      <li class="media-logos__logo"><img src="<?php echo $item['logo_image_file'] ?>"/></li>
      <?php }; ?>
    </ul>
    <ul class="media-logos">
      <?php $logos2 = array_slice($rows, 3, 3); ?>
      <?php foreach($logos2 as $item) {; ?>
      <li class="media-logos__logo"><img src="<?php echo $item['logo_image_file'] ?>"/></li>
      <?php }; ?>
    </ul>
  </div>
  <?php endif; ?>
</section>
<section class="meet-luma">
  <div class="meet-luma__container">
    <div class="headline">
      <?php if ( get_field('section1_headline') ): ?>
      <h2 class="headline__title"><?= the_field('section1_headline'); ?></h2>
      <?php endif; ?>
      <?php if ( get_field('section1_tagline') ): ?>
      <p class="headline__description"><?= the_field('section1_tagline'); ?></p>
      <?php endif; ?>
    </div>
    <?php if ( have_rows('feature_cards') ): ?>
    <div class="meet-luma__features">
      <?php while( have_rows('feature_cards') ): the_row(); ?>
      <?php $imageURL = get_sub_field('image'); ?>
      <?php $title = get_sub_field('title'); ?>
      <?php $description = get_sub_field('description'); ?>
      <?php $targetURL = get_sub_field('target'); ?>
      <?php $targetAnchor = get_sub_field('target_anchor'); ?>
      <?php if ($targetAnchor) { $targetURL .= '#anchor--'.$targetAnchor; }; ?>
      <div data-match-height="luma-features" class="luma-feature">
        <div style="background-image: url(<?= $imageURL ?>);" class="luma-feature__image"></div>
        <div class="luma-feature__copy">
          <?php if ($title): ?>
          <h6 class="luma-feature__title"><?= $title ?></h6>
          <?php endif; ?>
          <?php if ($description): ?>
          <p class="luma-feature__description"><?= $description ?></p>
          <?php endif; ?>
          <?php if ($targetURL): ?><a href="<?= $targetURL ?>" class="luma-feature__link btn btn--arrow">LEARN MORE</a>
          <?php endif; ?>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>
  </div>
</section>
<section class="feature-screenshots feature-screenshots--scaled-sides">
  <div class="feature-screenshots__container">
    <div class="headline headline--white">
      <?php if ( get_field('section2_headline') ): ?>
      <h2 class="headline__title"><?= the_field('section2_headline'); ?></h2>
      <?php endif; ?>
      <?php if ( get_field('section2_tagline') ): ?>
      <p class="headline__description"><?= the_field('section2_tagline'); ?></p>
      <?php endif; ?>
      <?php $learnMoreLink = get_field('learn_more_link'); ?>
      <?php $learnMoreAnchor = get_field('learn_more_anchor'); ?>
      <?php if ($learnMoreAnchor) { $learnMoreLink .= '#anchor--'.$learnMoreAnchor; }; ?><a href="<?= $learnMoreLink; ?>" class="headline__link btn btn--arrow btn--arrow-white">LEARN MORE</a>
    </div>
    <?php if ( have_rows('screenshots') ): ?>
    <div class="feature-screenshots__features">
      <?php while( have_rows('screenshots') ): the_row(); ?>
      <?php $title = get_sub_field('title'); ?>
      <?php $description = get_sub_field('description'); ?>
      <?php $iconURL = get_sub_field('icon'); ?>
      <?php $screenshotURL = get_sub_field('screenshot'); ?>
      <div class="screenshot-block">
        <div class="screenshot-block__image">
          <div style="background-image: url(<?= $screenshotURL ?>);" class="screenshot-block__screenshot"></div>
        </div><img src="<?= $iconURL ?>" class="screenshot-block__icon"/>
        <h3 class="screenshot-block__title"><?= $title ?></h3>
        <p class="screenshot-block__description"><?= $description ?></p>
      </div>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>
  </div>
</section>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>