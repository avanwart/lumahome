
<header style="background-image:url(<?=the_post_thumbnail_url(); ?>);" class="header header--left header--light <?=the_field('mobile_background_position') ?>">
	<div class="header__container">
		<?php if ( get_field('header_headline') ): ?>
		<div class="header__copy">
			<h2 class="header__title"><?= the_field('header_headline'); ?></h2>
		</div>
		<?php endif; ?>
		<ul class="header__ctas">
			<?php if ( get_field('purchase_link') ): ?>
			<li><a href="<?=the_field('purchase_link'); ?>" class="btn btn--filled">BUY NOW</a></li>
			<?php endif; ?>
			<?php if ( get_field('video_link') ): ?>
			<li><a href="<?=the_field('video_link'); ?>" target="_blank" class="btn btn--dark js-youtube-popup">WATCH VIDEO</a></li>
			<?php endif; ?>
		</ul>
	</div>
</header>
<section class="logos">
	<img src="<?php bloginfo('template_directory'); ?>/assets/images/logo-bar.jpg" alt="">
</section>
<section class="how" id="how">
	<div class="meet-luma__container">
		<div class="headline">
			<h2 class="headline__title">Say Goodbye to WiFi Dead Zones</h2>
			<h3>Luma is the world’s fastest and most reliable home WiFi system - that only takes minutes to set up. Just three little Lumas will work together to blanket your home with stable, super-fast WiFi in every room.</h3>
		</div>
		<ul class="comparison">
			<li>
				<p>Normal WiFi routers often <br/>lead to dead zones in your home.</p>
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/normal-routers.jpg" alt="">
			</li>
			<li>
				<p>Lumas work together to expand <br/>WiFi coverage to your entire home.</p>
				<img src="<?php bloginfo('template_directory'); ?>/assets/images/luma-routers.jpg" alt="">
			</li>
		</ul>
</section>
<div class="app" id="features">
	<div class="headline">
		<h2 class="headline__title">Your Network.  In Your Hands.</h2>
		<h3>Use the Luma app to grant access, create security policies, even pause the internet.</h3>
	</div>
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
	<script>
		jQuery(document).ready(function($){
			$('.control-slider--screenshot').slick({
				dots: false,
				arrows: true,
				autoplay: true,
				autoplaySpeed: 7500,
				prevArrow: '<a href="#" class="control__nav control__nav--prev"><div class="control__nav__image"></div></a>',
				nextArrow: '<a href="#" class="control__nav control__nav--next"><div class="control__nav__image"></div></a>',
				appendArrows: $('.control'),
				fade: true,
				adaptiveHeight: true,
				speed: 500,
				slide: '.control-slider__image',
				asNavFor: '.control-slider--text'
			});
			// Bind ready event to screenshot element
			$('.control-slider--text').on('init', function(){
				$('.control').removeClass('is-not-loaded');
			});
			$('.control-slider--text').slick({
				dots: false,
				arrows: false,
				fade: true,
				speed: 500,
				slide: '.control-slider__copy',
				asNavFor: '.control-slider--screenshot'
			});
		});
	</script>
	<?php endif; ?>
</div>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>