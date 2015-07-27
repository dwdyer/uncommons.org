<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="keywords" content="software, engineering, development, programming, java, haskell, python, php, objective-c, android, ios, open, source, mobile, evoultionary, computation, genetic, algorithms, artificial, intelligence"/>
    <meta name="description" content="Software development blog written by Dan Dyer." />
    <meta name="author" content="Dan Dyer" />
    <link rel="alternate" type="application/rss+xml" title="RSS" href="http://blog.uncommons.org/feed/" />
    <link rel="alternate" type="application/atom+xml" title="Atom" href="http://blog.uncommons.org/feed/atom/" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="http://netdna.bootstrapcdn.com/bootswatch/3.0.0/flatly/bootstrap.min.css" rel="stylesheet"/>
    <style type="text/css" media="screen">
      @import url( <?php bloginfo('stylesheet_url'); ?> );
    </style>
    <?php wp_get_archives('type=monthly&format=link'); ?>
    <?php wp_head(); ?>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://uncommons.org/amazon.js"></script>
  </head>
  <body>
    <div id="wrap">
      <?php readfile('/var/www/dan/includes/navbar.html'); ?>
      <div class="container">
        <div class="page-header">
          <h1><?php bloginfo('name'); ?> <small>by Dan Dyer</small></h1>
        </div>
