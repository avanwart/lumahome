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
<!-- start analytics -->

<script type="text/javascript">

      var $buoop = {vs:{i:9,f:25,o:12.1,s:7},c:2};
      function $buo_f(){
       var e = document.createElement("script");
       e.src = "//browser-update.org/update.min.js";
       document.body.appendChild(e);
      };
      try {document.addEventListener("DOMContentLoaded", $buo_f,false)}
      catch(e){window.attachEvent("onload", $buo_f)}
    
/*!function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready","alias","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t){var e=document.createElement("script");e.type="text/javascript";e.async=!0;e.src=("https:"===document.location.protocol?"https://":"http://")+"cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(e,n)};analytics.SNIPPET_VERSION="3.1.0";analytics.load("dYNCKt7rqB8Y7mUDzPlRb1Kg5YvmBRkB");analytics.page()}}();
    
    adroll_adv_id = "UKNLAVEPQZD35C6QE2PLJT";
    adroll_pix_id = "A45GBDVKGVAZ7EFHWMDC3F";
    (function () {
        var _onload = function(){
            if (document.readyState && !/loaded|complete/.test(document.readyState)){setTimeout(_onload, 10);return}
            if (!window.__adroll_loaded){__adroll_loaded=true;setTimeout(_onload, 50);return}
            var scr = document.createElement("script");
            var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
            scr.setAttribute('async', 'true');
            scr.type = "text/javascript";
            scr.src = host + "/j/roundtrip.js";
            ((document.getElementsByTagName('head') || [null])[0] ||
                document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
        };
        if (window.addEventListener) {window.addEventListener('load', _onload, false);}
        else {window.attachEvent('onload', _onload)}
    }()); */
    
<!-- Begin Google Analytics -->

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69680118-1', 'auto');
 window.optimizely = window.optimizely || [];
 window.optimizely.push("activateUniversalAnalytics");
  ga('send', 'pageview');
 
   <!-- End Google Analytics -->
  </script>
  
   <!-- Optimizely Snippet -->
   <script src="https://cdn.optimizely.com/js/5614381003.js"></script>

<script>

jQuery(document).ready(jQuery("#menu-item-56 > a").click(function(){var e=(new Date).getTime()/1e3,a=parseInt(e/3600)%24;a-=4;var n=parseInt(e/60)%60,t=e%60;t=Math.round(100*t)/100;var r=(10>a?"0"+a:a)+"-"+(10>n?"0"+n:n)+"-"+(10>t?"0"+t:t);ga("send","event","purchase button top","click",r,399)}))

jQuery(document).ready(jQuery("body > header.header.header--left.header--light.header--mobile-center > div > ul > li:nth-child(1) > a").click(function(){var e=(new Date).getTime()/1e3,a=parseInt(e/3600)%24;a-=4;var n=parseInt(e/60)%60,t=e%60;t=Math.round(100*t)/100;var r=(10>a?"0"+a:a)+"-"+(10>n?"0"+n:n)+"-"+(10>t?"0"+t:t);ga("send","event","purchase button center","click",r,399)}))

jQuery(document).ready(jQuery("body > section.order-luma > div > a").click(function(){var e=(new Date).getTime()/1e3,a=parseInt(e/3600)%24;a-=4;var n=parseInt(e/60)%60,t=e%60;t=Math.round(100*t)/100;var r=(10>a?"0"+a:a)+"-"+(10>n?"0"+n:n)+"-"+(10>t?"0"+t:t);ga("send","event","purchase button  bottom","click",r,399)}))


jQuery(document).ready(jQuery("li a.js-youtube-popup").click(function(){var e=(new Date).getTime()/1e3,a=parseInt(e/3600)%24;a-=4;var n=parseInt(e/60)%60,t=e%60;t=Math.round(100*t)/100;var r=(10>a?"0"+a:a)+"-"+(10>n?"0"+n:n)+"-"+(10>t?"0"+t:t);ga("send","event","watch video","click",r,399)}))



//jQuery(".job_listings").addClass("container");

</script>
  </body>
</html>