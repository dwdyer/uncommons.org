<?php echo '<?xml version="1.0" encoding="utf-8" ?>'."\n" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <title>Watchmaker Framework - Changelog</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="description" content="Changelog and roadmap for the Watchmaker Framework for Evolutionary Computation." />
    <meta name="keywords" content="changelog, roadmap, evolution, evolutionary, genetic, computation, algorithms, programming, java, open, source, free, watchmaker, framework" />
    <meta name="author" content="Daniel Dyer" />
    <link href="http://uncommons.org/uncommons.css" rel="stylesheet" type="text/css" />
    <link href="watchmaker.css" rel="stylesheet" type="text/css" />
  </head>
  <body class="yui-skin-sam">
    <div id="container">
      <?php readfile('header.html'); ?>

      <div id="sidebar">
        <h2>API Changes</h2>
        <p>
          <strong>Pre-1.0 releases of the Watchmaker Framework are not guaranteed to be fully backwards-compatible with previous releases.</strong> Where API changes
          make sense to improve the design, usability and/or flexibility of the framework, they have been made. The changelog on the left of this
          page documents all changes made since the first public release.
        </p>
        <h2>Roadmap</h2>
        <h3>Planned (0.7.x releases)</h3>
        <ul>
          <li>Distributed processing for islands models</li>
          <li>First-class support for tree-based Genetic Programming (currently only supported as an example application)</li>
        </ul>
        <h3>Planned (version 0.8.0)</h3>
        <ul>
          <li>Differential Evolution</li>
          <li>Learning Classifier Systems</li>
        </ul>
        <h3>Probable (version 0.9.0)</h3>
        <ul>
          <li>Multi-objective evolutionary algorithms</li>
        </ul>
        <h3>Maybe</h3>
        <ul>
          <li>SWT support</li>
        </ul>
        <p>
          If you have suggestions for new features or enhancements that are not on this roadmap, please submit them
          using the <a href="http://github.com/dwdyer/watchmaker/issues">issue tracker</a>.
        </p>
      </div>

      <div id="main">
        <h2>Changelog</h2>
        <pre><?php readfile('CHANGELOG.txt'); ?></pre>
      </div>

      <?php readfile('footer.html'); ?>
    </div>
  </body>
</html>
