<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <title>Watchmaker Framework - Travelling Salesman Example</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="keywords" content="evolution, evolutionary, genetic, computation, algorithms, programming, java, open, source, free, watchmaker, framework, dan, daniel, dyer, swing, travelling, traveling, salesman" />
    <meta name="author" content="Daniel Dyer" />
    <link href="../watchmaker.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div id="container">
      <?php readfile('../header.html'); ?>

      <div id="sidebar">
        <p>
          The applet on this page demonstrates two ways of generating solutions
          to the <a href="http://en.wikipedia.org/wiki/Traveling_salesman_problem">Travelling Salesman problem</a>
          - evolution and brute force.  If you cannot see the applet, make sure your browser has Java enabled and
          that the version of your Java plug-in is 1.5.0 or later.</p>
        <p>
          The basic premise of the Travelling Salesman problem is that there is a salesman who must
          visit a set of cities.  He must visit each city exactly once and must return to his starting
          city.  The problem is to find the shortest route.  This is not as easy as it might sound because
          the number of possible routes increases factorially with the number of cities.  In other words, for
          5 cities there are 5! (120) possible routes and for 6 cities there are 6! (720).  A salesman who
          had to visit the 15 European capitals in this example would have 1,307,674,368,000 (over 1.3
          trillion) possible routes to consider.
        </p>
        <p>
          Evolutionary algorithms provide a way to perform a non-exhaustive search of this huge search
          space and to still find a good (though not necessarily optimal) solution.  The applet on this page 
          uses the <a href="http://watchmaker.uncommons.org">Watchmaker Framework</a> to find routes
          using a simple evolutionary algorithm.  The evolutionary operators are a mutation operator
          that changes the order of cities in a route, and an ordered cross-over operator that splices different
          routes together without duplicating or omitting any cities.  The fitness function simply calculates the
          total length (in kilometres) of the route.
        </p>
        <h3>Other Examples</h3>
        <ul>
          <li><a href="biomorphs.php">Biomorphs</a></li>
          <li><a href="sudokue.php">Sudoku</a></li>
          <li><a href="monalisa.php">Mona Lisa</a></li>
        </ul>
      </div>
      
      <div id="main">
        <h2>The Travelling Salesman</h2>
        <div id="applet">
          <!-- The nested object tags are necessary to work in both IE (inner tag) and Firefox (outer
               tag).  Opera will work with either.  It should not be necessary to modify this code. -->
          <!--[if !IE]>-->
          <object classid="java:org.uncommons.watchmaker.examples.travellingsalesman.TravellingSalesmanApplet.class"
                  type="application/x-java-applet"
                  archive="watchmaker-examples-0.6.2.jar"
                  height="480"
                  width="623"
                  standby="Loading the Travelling Salesman Example Applet...">
          <!--<![endif]-->
            <object classid="clsid:08B0E5C0-4FCB-11CF-AAA5-00401C608501"
                    type="application/x-java-applet"
                    archive="watchmaker-examples-0.6.2.jar"
                    height="480"
                    width="623"
                    standby="Loading the Travelling Salesman Example Applet...">
              <param name="code" value="org.uncommons.watchmaker.examples.travellingsalesman.TravellingSalesmanApplet.class" />
            </object>
          <!--[if !IE]>-->
          </object>
          <!--<![endif]-->
        </div>
      </div>

      <?php readfile('../footer.html'); ?>
    </div>
  </body>
</html>
