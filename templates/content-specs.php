
<header style="background-image:url(<?=the_post_thumbnail_url(); ?>);" class="header header--left header--light <?=the_field('mobile_background_position') ?>">
  <div class="header__container">
    <?php if ( get_field('header_headline') ): ?>
    <h1 class="header__title"><?= the_field('header_headline'); ?></h1>
    <?php endif; ?>
    <?php if ( get_field('header_tagline') ): ?>
    <h2 class="header__tagline"><?= the_field('header_tagline'); ?></h2>
    <?php endif; ?>
  </div>
</header>
<?php if ( have_rows('core_features') ): ?>
<section class="core-features">
  <div class="core-features__container">
    <h2 class="core-features__title">Core Features</h2>
    <div class="core-features__features feature-list">
      <?php while( have_rows('core_features') ): the_row(); ?>
      <?php $featureTitle = get_sub_field('feature_title'); ?>
      <?php $featureIcon = get_sub_field('feature_icon'); ?>
      <?php $featureDescription = get_sub_field('feature_description'); ?>
      <div class="feature-list__item">
        <div class="feature-list__image"><img src="<?= $featureIcon; ?>"/></div>
        <div class="feature-list__copy">
          <h3><?= $featureTitle; ?></h3>
          <p><?= $featureDescription; ?></p>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
<?php endif; ?>
<?php if ( have_rows('diagrams') ): ?>
<section class="diagrams">
  <div class="diagrams__container">
    <?php while( have_rows('diagrams') ): the_row(); ?>
    <?php $diagramTitle = get_sub_field('diagram_title'); ?>
    <?php $diagramImage = get_sub_field('diagram_image'); ?>
    <div class="diagrams__diagram diagram">
      <h2 class="diagram__title"><?= $diagramTitle; ?></h2><img src="<?= $diagramImage; ?>" class="diagram__image"/>
    </div>
    <?php endwhile; ?>
  </div>
</section>
<?php endif; ?>
<?php if ( have_rows('spec_list') ): ?>
<section class="tech-specs">
  <div class="tech-specs__container">
    <h2 class="tech-specs__title">Tech Specs</h2>
    <div class="tech-specs__lists">
      <?php while( have_rows('spec_list') ): the_row(); ?>
      <?php $listTitle = get_sub_field('list_title'); ?>
      <div class="tech-specs__list spec-list">
        <h4 class="spec-list__title"><?= $listTitle; ?></h4>
        <?php if ( have_rows('list_items') ): ?>
        <ul class="spec-list__list">
          <?php while( have_rows('list_items') ): the_row(); ?>
          <?php $listItem = get_sub_field('list_item'); ?>
          <li><?= $listItem; ?></li>
          <?php endwhile; ?>
        </ul>
        <?php endif; ?>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
<?php endif; ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>