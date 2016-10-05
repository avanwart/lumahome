
<?php use Roots\Sage\Titles; ?>
<?php if (!has_post_thumbnail()) {; ?>
<div class="page-header">
  <div class="page-header__container">
    <h1 class="page-header__title">
      <?php echo Titles\title(); ?>
    </h1>
  </div>
</div>
<?php }; ?>