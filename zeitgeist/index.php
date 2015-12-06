<?php echo '<?xml version="1.0" encoding="utf-8" ?>'."\n" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <title>Zeitgeist - Intelligent RSS News Aggregator</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="description" content="Zeitgeist is an intelligent RSS news aggregator." />
    <meta name="keywords" content="zeitgeist, rss, news, aggregator, feed, java, html, open, source, free, dan, daniel, dyer, uncommons" />
    <meta name="author" content="Daniel Dyer" />
    <link href="http://uncommons.org/uncommons.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div id="container">
      <?php readfile('header.html'); ?>
      <p style="text-align: center;">
        <em>Zeitgeist is Open Source software, free to download and use subject to the terms of the
        <a href="http://www.apache.org/licenses/LICENSE-2.0.html">Apache Software Licence, Version 2.0</a>.</em>
      </p>
      <p>
        Zeitgeist is a Java library for identifying common topics among a set of news articles downloaded from RSS feeds.
        It groups and ranks related articles.  It is loosely based on the non-negative matrix factorisation example presented
        in chapter 10 of Toby Segaran's Programming Collective Intelligence book.
      </p>
      <img src="sample.png" width="447" height="336" alt="Sample HTML output." style="border: 1px dashed #888888; float: right; margin-left: 1em; margin-bottom: 1em;" />
      <h2>Sample HTML Output</h2>
      <p>
        Zeitgeist includes a basic HTML publisher for generating a page of news
        headlines, complete with relevant images extracted from the feed articles.
        Refer to the <a href="http://github.com/dwdyer/zeitgeist/blob/master/README.txt">README file</a> for instructions on
        how to use Zeitgeist to generate a web page of news topics.  The default output looks something like the image on the right
        (it can be customised with CSS).
      </p>
      <?php readfile('footer.html'); ?>
    </div>
  </body>
</html>
