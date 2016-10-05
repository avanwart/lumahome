
<section class="order-luma">
  <div class="order-luma__container">
    <div class="headline">
      <?php if ( get_field('purchase_headline', 'option') ): ?>
      <h2 class="headline__title"><?php the_field('purchase_headline', 'option'); ?></h2>
      <?php endif; ?>
      <?php if ( get_field('purchase_tagline', 'option') ): ?>
      <?php endif; ?>
    </div><img src="<?php bloginfo('template_url'); ?>/dist/images/product-luma-trio.png" class="order-luma__image"/>
    <?php if ( get_field('purchase_description', 'option') ): ?>
    <h3 class="order-luma__tagline"><?php the_field('purchase_description', 'option'); ?></h3>
    <?php endif; ?>
    <?php if ( get_field('purchase_amazon_link', 'option') ): ?><a href="<?php the_field('purchase_amazon_link', 'option'); ?>" class="order-luma__link btn btn--filled btn--filled-orange">BUY NOW</a>
    <?php endif; ?>
  </div>
</section>
<section class="meet-luma">
  <div class="meet-luma__container">
    <div class="headline">
      <?php if ( get_field('section1_headline') ): ?>
      <h2 class="headline__title"><?= the_field('section1_headline'); ?></h2>
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