<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="keywords" content="software, engineering, development, programming, java, haskell, python, php, objective-c, android, ios, open, source, mobile, evoultionary, computation, genetic, algorithms, artificial, intelligence"/>
    <meta name="description" content="Software development blog written by Dan Dyer." />
    <meta name="author" content="Dan Dyer" />
    <link rel="alternate" type="application/rss+xml" title="RSS" href="https://blog.dandyer.co.uk/feed/" />
    <link rel="alternate" type="application/atom+xml" title="Atom" href="https://blog.dandyer.co.uk/feed/atom/" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="//netdna.bootstrapcdn.com/bootswatch/3.0.0/flatly/bootstrap.min.css" rel="stylesheet"/>
    <style type="text/css" media="screen">
      @import url( <?php bloginfo('stylesheet_url'); ?> );
    </style>
    <?php wp_get_archives('type=monthly&format=link'); ?>
    <?php wp_head(); ?>
    <script src="//code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://uncommons.org/amazon.js"></script>
    <script type="text/javascript">
      var _paq = _paq || [];
      _paq.push(["setCookieDomain", "*.dandyer.co.uk"]);
      _paq.push(["setDomains", ["*.dandyer.co.uk","*.blog.dandyer.co.uk"]]);
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      (function() {
        var u="https://rectangular.it/analytics/js/";
        _paq.push(['setTrackerUrl', u]);
        _paq.push(['setSiteId', '3']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.type='text/javascript'; g.async=true; g.defer=true; g.src=u; s.parentNode.insertBefore(g,s);
      })();
    </script>
    <noscript><p><img src="https://rectangular.it/analytics/js/?idsite=3" style="border:0;" alt="" /></p></noscript>
  </head>
  <body>
    <div id="wrap">
      <?php readfile('/var/www/dan/includes/navbar.html'); ?>
      <div class="container">
        <div class="page-header">
          <h1><?php bloginfo('name'); ?> <small>by Dan Dyer</small></h1>
        </div>
