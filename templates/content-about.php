
<header style="background-image:url(<?=the_post_thumbnail_url(); ?>);" class="header header--center-top-center <?=the_field('mobile_background_position') ?>">
  <div class="header__container">
    <div class="header__copy">
      <?php if ( get_field('header_headline') ): ?>
      <h1 class="header__title"><?= the_field('header_headline'); ?></h1>
      <?php endif; ?>
      <?php if ( get_field('headerder_tagline') ): ?>
      <h2 class="header__tagline"><?= the_field('header_tagline'); ?></h2>
      <?php endif; ?>
    </div>
  </div>
</header>
<section class="article">
  <div class="article__container">
    <?php the_content(); ?>
  </div>
</section>
<?php if ( have_rows('team') ): ?>
<section class="founders">
  <div class="founders__container">
    <?php while( have_rows('team') ): the_row(); ?>
    <?php $personName = get_sub_field('person_name'); ?>
    <?php $personRole = get_sub_field('person_role'); ?>
    <?php $personPhoto = get_sub_field('person_photo'); ?>
    <div class="founders__founder founder">
      <div style="background-image: url('<?= $personPhoto; ?>');" class="founder__image"></div>
      <div class="founder__copy">
        <h3><strong><?= $personName; ?></strong><span><?= $personRole; ?></span></h3>
      </div>
    </div>
    <?php endwhile; ?>
  </div>
</section>
<?php endif; ?>
<section class="investors">
  <h3 class="investors__title">Investors</h3>
  <?php if ( have_rows('investors_primary') ): ?>
  <ul class="investors__list investors__list--top">
    <?php while( have_rows('investors_primary') ): the_row(); ?>
    <?php $investorLogoPrimary = get_sub_field('investor_logo'); ?>
    <?php $investorURLPrimary = get_sub_field('investor_url'); ?>
    <li>
      <?php if ($investorURLPrimary) { echo "<a href='"; echo $investorURLPrimary; echo "' target='_blank'>"; }; ?><img src="<?= $investorLogoPrimary; ?>"/>
      <?php if ($investorURLPrimary) { echo "</a>"; }; ?>
    </li>
    <?php endwhile; ?>
  </ul>
  <?php endif; ?>
  <?php if ( have_rows('investors_secondary') ): ?>
  <ul class="investors__list investors__list--below">
    <?php while( have_rows('investors_secondary') ): the_row(); ?>
    <?php $investorLogoSecondary = get_sub_field('investor_logo'); ?>
    <?php $investorURLSecondary = get_sub_field('investor_url'); ?>
    <li>
      <?php if ($investorURLSecondary) { echo "<a href='"; echo $investorURLSecondary; echo "' target='_blank'>"; }; ?><img src="<?= $investorLogoSecondary; ?>"/>
      <?php if ($investorURLSecondary) { echo "</a>"; }; ?>
    </li>
    <?php endwhile; ?>
  </ul>
  <?php endif; ?>
</section>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>