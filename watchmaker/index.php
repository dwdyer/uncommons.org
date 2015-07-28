<?php echo '<?xml version="1.0" encoding="utf-8" ?>'."\n" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <title>The Watchmaker Framework for Evolutionary Computation (evolutionary/genetic algorithms for Java)</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="description" content="Watchmaker is an extensible, high-performance, multi-threaded, object-oriented framework for implementing platform-independent evolutionary computation (evolutionary/genetic algorithms/programming) in Java." />
    <meta name="keywords" content="evolution, evolutionary, genetic, computation, algorithms, programming, java, open, source, free, watchmaker, framework, dan, daniel, dyer, swing, sudoku, mona, lisa, biomorphs, travelling, traveling, salesman" />
    <meta name="author" content="Daniel Dyer" />
    <link href="http://uncommons.org/uncommons.css" rel="stylesheet" type="text/css" />
    <link href="watchmaker.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://www.uncommons.org/amazon.js"></script>
    <!-- YUI Carousel -->
    <link type="text/css" rel="stylesheet" href="http://yui.yahooapis.com/2.8.0r4/build/carousel/assets/skins/sam/carousel.css" />
    <script type="text/javascript" src="http://yui.yahooapis.com/combo?2.8.0r4/build/yahoo-dom-event/yahoo-dom-event.js&amp;2.8.0r4/build/element/element-min.js&amp;2.8.0r4/build/carousel/carousel-min.js"></script>
  </head>
  <body class="yui-skin-sam">
    <div id="container">
      <?php readfile('header.html'); ?>
      <p>
        The Watchmaker Framework is an extensible, high-performance, object-oriented framework for implementing platform-independent
        <a href="http://en.wikipedia.org/wiki/Evolutionary_algorithm">evolutionary/genetic algorithms</a> in Java. The framework
        provides type-safe evolution for arbitrary types via a non-invasive API.  The Watchmaker Framework is Open Source software,
        free to <a href="http://watchmaker.uncommons.org/download.php">download</a> and use subject to the terms of the
        <a href="http://www.apache.org/licenses/LICENSE-2.0.html">Apache Software Licence, Version 2.0</a>.
      </p>
      <div id="sidebar">
        <?php readfile('examples.html'); ?>
        <?php readfile('reading.html'); ?>
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
            <strong>Pluggable Selection Strategies</strong> - Roulette Wheel Selection, Tournament Selection
            and several other selection strategies are provided.  Alternatively, you can implement your own
            selection strategy quickly and easily.
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
            <strong>Island Model Evolution</strong> <span class="newfeature">(new in version 0.7.0)</span>
            - Evolve multiple populations in parallel with periodic migration
            of individuals between islands.
          </li>
          <li>
            <strong>Steady-State Evolution</strong> <span class="newfeature">(new in version 0.7.0)</span>
            - Evolve one member of the population at a time.
          </li>
          <li>
            <strong>Evolution Strategies</strong> <span class="newfeature">(new in version 0.7.1)</span>
            - Support for both (&#x03bc;+&#x03bb;) and (&#x03bc;,&#x03bb;)
            <a href="http://en.wikipedia.org/wiki/Evolution_strategy">evolution strategies</a>.
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
            <a href="http://blog.dandyer.co.uk/2009/08/03/watchmaker-framework-for-evolutionary-computation-version-0-6-1-terracotta-clustering-and-more/">Terracotta</a>.
          </li>
          <li>
            <strong>Swing Component Library</strong> - Re-usable components to simplify the building of graphical user
            interfaces for evolutionary programs.  Includes a generic Evolution Monitor component that provides
            information about a running evolutionary program.
          </li>
        </ul>

        <h2>Getting Started</h2>
        <p>
          If you are already familiar with evolutionary algorithms, you can
          <a href="https://watchmaker.dev.java.net/servlets/ProjectDocumentList?folderID=6343">download the latest version of the Watchmaker Framework</a>
          and dive straight in.  If you need a primer, start with chapter one of the <a href="/manual">user manual</a> or refer to the resources listed under
          "Background Reading" on the right of this page.
        </p>
        <p>
          The core component of the Watchmaker Framework is the <code><a href="/api/org/uncommons/watchmaker/framework/EvolutionEngine.html">EvolutionEngine</a></code>.
          To write an evolutionary program using the Watchmaker Framework you have to instantiate an <code>EvolutionEngine</code> and invoke one of its <code>evolve</code>
          or <code>evolvePopulation</code> methods.
        </p>
        <p>
          To create an evolution engine you will need to provide a few other objects.  The only class that you will always have to write yourself is an implementation
          of the <a href="/api/org/uncommons/watchmaker/framework/FitnessEvaluator.html"><code>FitnessEvaluator</code></a> interface.  This is specific to the problem
          that you are trying to solve.
        </p>
        <p>
          You'll also need a <a href="/api/org/uncommons/watchmaker/framework/CandidateFactory.html"><code>CandidateFactory</code></a> and one or more
          <a href="/api/org/uncommons/watchmaker/framework/EvolutionaryOperator.html"><code>EvolutionaryOperator</code></a>s (i.e. mutation and/or cross-over).
          Depending on the type of object that you are evolving, you might find the classes you need are already included in the framework.  If not, it's straightforward
          to write the required implementations for any type that you choose to evolve.  Finally, you need to pick one of the included selection strategies and a random
          number generator (RNG).  You could use the standard <code>java.util.Random</code> RNG but there are faster and more random alternatives.  The Watchmaker Framework
          bundles the <a href="http://maths.uncommons.org">Uncommons Maths</a> library, which includes several RNGs.
          The <a href="https://uncommons-maths.dev.java.net/nonav/api/org/uncommons/maths/random/MersenneTwisterRNG.html"><code>MersenneTwisterRNG</code></a> is a good
          choice in most cases.
        </p>
        <p>
          <strong>The Watchmaker download includes source code for several example programs, including the applets that are featured on this website.  This code may help in
          understanding how the various components are combined into working programs.</strong>
        </p>
        <h3>The Evolution Monitor</h3>
        <p>
          The Watchmaker Swing module includes a generic <a href="/api/org/uncommons/watchmaker/swing/evolutionmonitor/EvolutionMonitor.html"><code>EvolutionMonitor</code></a>
          component.  This can be added to any <code>EvolutionEngine</code> to provide feedback on the progress of the evolution.  The information displayed by the monitor includes
          a visual representation of the fittest candidate found so far and a graph of population fitness over time.  An <code>EvolutionMonitor</code> is added to an
          <code>EvolutionEngine</code> via the <code>addEvolutionObserver</code> method.
        </p>
        <p>
          To see the evolution monitor in action, refer to the <a href="examples/monalisa.php">Mona Lisa example applet</a>.  The lower half of the UI is an embedded
          <code>EvolutionMonitor</code> component.
        </p>
      </div>

      <?php readfile('footer.html'); ?>
    </div>
  </body>
</html>
