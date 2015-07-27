<!DOCTYPE html>
<html lang="en">
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
    <script type="text/javascript" src="http://uncommons.org/amazon.js"></script>
  </head>
  <body>
    <div id="container">
      <div id="title">
        <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
      </div>
