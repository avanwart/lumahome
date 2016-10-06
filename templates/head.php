
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="x-ua-compatible" content="ie=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300" rel="stylesheet" type="text/css"/>
  <?php wp_head(); ?>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/styles/css/child.css">

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
	</script>
	    
	<!-- Begin Google Analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-69680118-1', 'auto');
	 window.optimizely = window.optimizely || [];
	 window.optimizely.push("activateUniversalAnalytics");
	  ga('send', 'pageview');
	 
	</script>
	<!-- End Google Analytics -->

	<!-- Optimizely Snippet -->
	<script src="https://cdn.optimizely.com/js/5614381003.js"></script>

	<!-- Hotjar Tracking Code for https://getluma.com -->
	<script>
	  (function(h,o,t,j,a,r){
	      h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
	      h._hjSettings={hjid:169072,hjsv:5};
	      a=o.getElementsByTagName('head')[0];
	      r=o.createElement('script');r.async=1;
	      r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
	      a.appendChild(r);
	  })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
	</script>
	
  <!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
	n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
	document,'script','https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '1621631474767585');
	fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=1621631474767585&ev=PageView&noscript=1"
	/></noscript>
	<!-- DO NOT MODIFY -->
	<!-- End Facebook Pixel Code -->
</head>