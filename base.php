<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <?php include Wrapper\template_path(); ?>
    <?php if (Setup\display_sidebar()) : ?>
      <aside class="sidebar">
        <?php include Wrapper\sidebar_path(); ?>
      </aside>
    <?php endif; ?>
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>

<script>

jQuery(document).ready(jQuery("#menu-item-56 > a").click(function(){var e=(new Date).getTime()/1e3,a=parseInt(e/3600)%24;a-=4;var n=parseInt(e/60)%60,t=e%60;t=Math.round(100*t)/100;var r=(10>a?"0"+a:a)+"-"+(10>n?"0"+n:n)+"-"+(10>t?"0"+t:t);ga("send","event","purchase button top","click",r,399)}))

jQuery(document).ready(jQuery("body > header.header.header--left.header--light.header--mobile-center > div > ul > li:nth-child(1) > a").click(function(){var e=(new Date).getTime()/1e3,a=parseInt(e/3600)%24;a-=4;var n=parseInt(e/60)%60,t=e%60;t=Math.round(100*t)/100;var r=(10>a?"0"+a:a)+"-"+(10>n?"0"+n:n)+"-"+(10>t?"0"+t:t);ga("send","event","purchase button center","click",r,399)}))

jQuery(document).ready(jQuery("body > section.order-luma > div > a").click(function(){var e=(new Date).getTime()/1e3,a=parseInt(e/3600)%24;a-=4;var n=parseInt(e/60)%60,t=e%60;t=Math.round(100*t)/100;var r=(10>a?"0"+a:a)+"-"+(10>n?"0"+n:n)+"-"+(10>t?"0"+t:t);ga("send","event","purchase button  bottom","click",r,399)}))


jQuery(document).ready(jQuery("li a.js-youtube-popup").click(function(){var e=(new Date).getTime()/1e3,a=parseInt(e/3600)%24;a-=4;var n=parseInt(e/60)%60,t=e%60;t=Math.round(100*t)/100;var r=(10>a?"0"+a:a)+"-"+(10>n?"0"+n:n)+"-"+(10>t?"0"+t:t);ga("send","event","watch video","click",r,399)}))



//jQuery(".job_listings").addClass("container");

</script>
  </body>
</html>