
<section class="order-luma">
  <div class="order-luma__container">
    <div class="headline">
      <?php if ( get_field('purchase_headline', 'option') ): ?>
      <h2 class="headline__title"><?php the_field('purchase_headline', 'option'); ?></h2>
      <?php endif; ?>
      <?php if ( get_field('purchase_tagline', 'option') ): ?>
      <p class="headline__description"><?php the_field('purchase_tagline', 'option'); ?></p>
      <?php endif; ?>
    </div><img src="<?php bloginfo('template_url'); ?>/dist/images/product-luma-trio.png" class="order-luma__image"/>
    <?php if ( get_field('purchase_description', 'option') ): ?>
    <h3 class="order-luma__tagline"><?php the_field('purchase_description', 'option'); ?></h3>
    <?php endif; ?>
    <?php if ( get_field('purchase_amazon_link', 'option') ): ?><a href="<?php the_field('purchase_amazon_link', 'option'); ?>" target="_blank" class="order-luma__link btn btn--filled btn--filled-orange">BUY NOW</a>
    <?php endif; ?>
  </div>
</section>