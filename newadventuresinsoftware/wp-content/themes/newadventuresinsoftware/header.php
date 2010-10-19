<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><!-- Replace with your own languge code - more info here (http://www.w3.org/TR/REC-html40/struct/dirlang.html#h-8.1) -->

<head profile="http://gmpg.org/xfn/11">
  <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
  <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
  <meta name="blogcatalog" content="9BC9867678" />
  <style type="text/css" media="screen">
    @import url( <?php bloginfo('stylesheet_url'); ?> );
  </style>

  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
  <link rel="shortcut icon" type="image/ico" href="<?php bloginfo('template_url'); ?>/favicon.ico" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <script type="text/javascript" src="http://www.uncommons.org/amazon.js"></script>
  <?php wp_get_archives('type=monthly&format=link'); ?>
  <?php //comments_popup_script(); // off by default ?>
  <?php wp_head(); ?>
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-3303586-1'],
              ['_trackPageview'],
              ['_setDomainName', '.uncommons.org'],
              ['_setAllowHash', 'false']);
    (function() {
      var ga = document.createElement('script');
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 
                'http://www') + '.google-analytics.com/ga.js';
      ga.setAttribute('async', 'true');
      document.documentElement.firstChild.appendChild(ga);
    })();
  </script>
</head>

<body>
<div id="container">

<div id="skip">
	<p><a href="#content" title="Skip to site content">Skip to content</a></p>
	<p><a href="#search" title="Skip to search" accesskey="s">Skip to search - Accesskey = s</a></p>
</div>
<hr />
<a href="http://feeds.feedburner.com/NewAdventuresInSoftware"><img src="/wp-content/themes/greenmarinee/images/feed.png" alt="RSS Feed" style="border: 0px; position: absolute; margin: -40px 0px 0px 873px;" height="36" width="36"/></a>
<a href="http://feeds.feedburner.com/NewAdventuresInSoftware"><img src="http://feeds.feedburner.com/~fc/NewAdventuresInSoftware?bg=78A515&amp;fg=444444&amp;anim=0" height="26" width="88" style="border: 0px; position: absolute; margin: -30px 0px 0px 775px;" alt="" /></a>
	<h1><a href="<?php bloginfo('url'); ?>"><img src="/wp-content/themes/greenmarinee/images/nais.png" alt="<?php bloginfo('name'); ?>" width="608" height="47" style="border: 0px;"/></a></h1>
	<!-- Tag line description is off by default. Please see readme.txt or CSS(h1,tagline) for more info
		<div class="tagline"><?php // remove bloginfo('description'); ?></div> 
	-->
	<div id="content_bg">
	<!-- Needed for dropshadows -->
	<div class="container_left">
	<div class="container_right">
	<div class="topline">
	<!-- Start float clearing -->
	<div class="clearfix">
<!-- end header -->