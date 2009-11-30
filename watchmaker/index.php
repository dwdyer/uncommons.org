<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <title>The Watchmaker Framework for Evolutionary Computation (evolutionary/genetic algorithms for Java)</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="description" content="Watchmaker is an extensible, high-performance, multi-threaded, object-oriented framework for implementing platform-independent evolutionary computation (evolutionary/genetic algorithms/programming) in Java." />
    <meta name="keywords" content="evolution, evolutionary, genetic, computation, algorithms, programming, java, open, source, free, watchmaker, framework, dan, daniel, dyer, swing, sudoku, mona, lisa, biomorphs, travelling, traveling, salesman" />
    <meta name="author" content="Daniel Dyer" />
    <link href="watchmaker.css" rel="stylesheet" type="text/css" />
    <!-- YUI Carousel -->
    <link type="text/css" rel="stylesheet" href="http://yui.yahooapis.com/2.8.0r4/build/carousel/assets/skins/sam/carousel.css" />  
    <script type="text/javascript" src="http://yui.yahooapis.com/combo?2.8.0r4/build/yahoo-dom-event/yahoo-dom-event.js&2.8.0r4/build/element/element-min.js&2.8.0r4/build/carousel/carousel-min.js"></script> 
  </head>
  <body class="yui-skin-sam">
    <div id="container">
      <?php readfile('header.html'); ?>

      <p>
        The Watchmaker Framework is an extensible, high-performance, object-oriented framework for implementing platform-independent
        <a href="http://en.wikipedia.org/wiki/Evolutionary_algorithm">evolutionary/genetic algorithms</a> in Java. The framework
        provides type-safe evolution for arbitrary types via a non-invasive API.  The Watchmaker Framework is Open Source software,
        free to use subject to the terms of the <a href="http://www.apache.org/licenses/LICENSE-2.0.html">Apache Software Licence, Version 2.0</a>.
      </p>
 
      <div id="sidebar">
        <?php readfile('examples.html'); ?>
      </div>
      
      <div id="main">
        <h2>Features</h2>
        <ul id="features">
          <li>
            <strong>Multi-Threaded Evolution Engine</strong> - Takes advantage of parallelism to
            improve performance on multi-core and multi-processor machines.
          </li>
          <li>
            <strong>Non-Invasive</strong> - Objects of any type can be evolved without the evolvable class having
            to implement a particular interface or extend from a common base class.  This means that there are no
            restrictions on the implementation of the evolvable type and no dependencies on any framework classes.
            The evolvable type is completely decoupled.
          </li>
          <li>
            <strong>Pluggable Selection Strategies</strong> - Roulette Wheel Selection, Tournament Selection,
            Rank Selection, Truncation Selection and Stochastic Universal Sampling are all provided.  Alternatively,
            you can implement your own selection strategy quickly and easily.
          </li>
          <li>
            <strong>Flexible Evolution Schemes</strong> - The evolution process can be as simple or as complicated
            as you like.  A single step or several operators combined in sequence and/or with branching.  Use
            the provided operators, implement your own, or use a combination of both.
          </li>
          <li>
            <strong>Re-usable Operators for Common Types</strong> - Ready-to-use cross-over and mutation implementations
            are provided for several data types including bit strings, character strings, arrays and lists.
          </li>
          <li>
            <strong>Interactive Evolutionary Algorithms</strong> - Support for user-guided selection makes the
            framework suitable for applictions in which defining an adequate fitness function is difficult, such as
            evolutionary art and evolutionary music.
          </li>
          <li>
            <strong>Distributed Processing</strong> - Support for distributed fitness evaluations using either
            <a href="http://hadoop.apache.org/">Hadoop</a> (via the <a href="http://lucene.apache.org/mahout/">Apache
            Mahout</a> project) or
            <a href="http://blog.uncommons.org/2009/08/03/watchmaker-framework-for-evolutionary-computation-version-0-6-1-terracotta-clustering-and-more/">Terracotta</a>.
          </li>
          <li>
            <strong>Swing Component Library</strong> - Re-usable components to simplify the building of graphical user
            interfaces for evolutionary programs.  Includes a generic Evolution Monitor component that provides
            information about a running evolutionary program.
          </li>
        </ul>
      </div>

      <?php readfile('footer.html'); ?>
    </div>
  </body>
</html>
