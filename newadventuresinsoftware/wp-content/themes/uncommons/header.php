<?php echo '<?xml version="1.0" encoding="utf-8" ?>'."\n" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta name="keywords" content="software, engineering, development, programming, java, haskell, python, php, objective-c, android, ios, open, source, mobile, evoultionary, computation, genetic, algorithms, artificial, intelligence"/>
    <meta name="description" content="Software development blog written by Dan Dyer." />
    <meta name="author" content="Dan Dyer" />
    <link rel="alternate" type="application/rss+xml" title="RSS" href="http://blog.uncommons.org/feed/" />
    <link rel="alternate" type="application/atom+xml" title="Atom" href="http://blog.uncommons.org/feed/atom/" />
    <link href="http://uncommons.org/uncommons.css" rel="stylesheet" type="text/css" />
    <style type="text/css" media="screen">
      @import url( <?php bloginfo('stylesheet_url'); ?> );
    </style>
    <?php wp_get_archives('type=monthly&format=link'); ?>
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
      <div id="title">
        <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
        <h2><a href="<?php bloginfo('url'); ?>"><?php bloginfo('description'); ?></a></h2>
      </div>
