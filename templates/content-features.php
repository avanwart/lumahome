
<header style="background-image:url(<?=the_post_thumbnail_url(); ?>);" class="header header--center-center header--shadow-bg header--light <?=the_field('mobile_background_position') ?>">
  <div class="header__container">
    <?php if ( get_field('header_headline') ): ?>
    <h1 class="header__title"><?= the_field('header_headline'); ?></h1>
    <?php endif; ?>
    <?php if ( get_field('header_description') ): ?>
    <p class="header__description"><?= the_field('header_description'); ?></p>
    <?php endif; ?>
  </div>
</header>
<nav class="nav-subsection js-sticky-nav">
  <div class="nav-subsection__container">
    <ul class="nav-subsection__list">
      <li><a href="#anchor--speed">Speed</a></li>
      <li><a href="#anchor--security">Security</a></li>
      <li><a href="#anchor--control">Control</a></li>
    </ul>
  </div>
</nav>
<section style="background-image:url(<?= the_field('speed_background'); ?>);" class="speed">
  <div id="anchor--speed"></div>
  <div class="speed__container">
    <div class="headline headline--white">
      <?php if ( get_field('speed_headline') ): ?>
      <h1 class="headline__title"><?= the_field('speed_headline'); ?></h1>
      <?php endif; ?>
      <?php if ( get_field('speed_description') ): ?>
      <p class="headline__description"><?= the_field('speed_description'); ?></p>
      <?php endif; ?>
    </div>
  </div>
</section>
<section class="security">
  <div id="anchor--security"></div>
  <div class="security__container">
    <div class="headline">
      <?php if ( get_field('security_headline') ): ?>
      <h2 class="headline__title"><?= the_field('security_headline'); ?></h2>
      <?php endif; ?>
      <?php if ( get_field('security_description') ): ?>
      <p class="headline__description"><?= the_field('security_description'); ?></p>
      <?php endif; ?>
      <?php if ( have_rows('security_blocks') ): ?>
      <div class="security__columns">
        <?php while( have_rows('security_blocks') ): the_row(); ?>
        <?php $blockImage = get_sub_field('block_image'); ?>
        <?php $blockTitle = get_sub_field('block_title'); ?>
        <?php $blockDescription = get_sub_field('block_description'); ?>
        <div class="security__column"><img src="<?= $blockImage; ?>"/>
          <h4><?= $blockTitle; ?></h4>
          <p><?= $blockDescription; ?></p>
        </div>
        <?php endwhile; ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
</section>
<?php if ( have_rows('control_slides') ): ?>
<section class="control is-not-loaded">
  <div id="anchor--control"></div>
  <div class="control__backgrounds">
    <?php if ( get_field('control_background_01') ): ?>
    <div style="background-image: url('<?= the_field('control_background_01'); ?>');" class="control__background control__background--01"></div>
    <?php endif; ?>
    <?php if ( get_field('control_background_02') ): ?>
    <div style="background-image: url('<?= the_field('control_background_02'); ?>');" class="control__background control__background--02"></div>
    <?php endif; ?>
  </div>
  <div class="control__container">
    <div class="control__copy control-slider control-slider--text">
      <?php while( have_rows('control_slides') ): the_row(); ?>
      <?php $slideTitle = get_sub_field('slide_title'); ?>
      <?php $slideDescription = get_sub_field('slide_description'); ?>
      <div class="control-slider__copy">
        <h2><?= $slideTitle; ?></h2>
        <p><?= $slideDescription; ?></p>
      </div>
      <?php endwhile; ?>
    </div>
    <div class="control__screenshots control-slider control-slider--screenshot">
      <?php while( have_rows('control_slides') ): the_row(); ?>
      <?php $slideScreenshot = get_sub_field('slide_screenshot'); ?>
      <div class="control-slider__image"><img src="<?= $slideScreenshot; ?>"/></div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
<?php endif; ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>