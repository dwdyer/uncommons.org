<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <title>Watchmaker Framework - Mona Lisa Example</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="keywords" content="evolution, evolutionary, genetic, computation, algorithms, programming, java, open, source, free, watchmaker, framework, dan, daniel, dyer, swing, mona, lisa" />
    <meta name="author" content="Daniel Dyer" />
    <link href="http://uncommons.org/uncommons.css" rel="stylesheet" type="text/css" />
    <link href="../watchmaker.css" rel="stylesheet" type="text/css" />
    <?php readfile('../analytics.html'); ?>
  </head>
  <body>
    <div id="container">
      <?php readfile('../header.html'); ?>

      <h2>Evolving The Mona Lisa</h2>
      <div id="applet">
        <!-- The nested object tags are necessary to work in both IE (inner tag) and Firefox (outer
             tag).  Opera will work with either.  It should not be necessary to modify this code. -->
        <!--[if !IE]>-->
        <object type="application/x-java-applet"
                archive="watchmaker-examples-0.7.1.jar"
                height="600"
                width="860"
                standby="Loading the Mona Lisa Example Applet...">
          <param name="java_arguments" value="-Djnlp.packEnabled=true" />
          <param name="codebase_lookup" value="false" />
          <param name="code" value="org.uncommons.watchmaker.examples.monalisa.MonaLisaApplet.class" />
        <!--<![endif]-->
          <object classid="clsid:08B0E5C0-4FCB-11CF-AAA5-00401C608501"
                  type="application/x-java-applet"
                  archive="watchmaker-examples-0.7.1.jar"
                  height="600"
                  width="860"
                  standby="Loading the Mona Lisa Example Applet...">
            <param name="java_arguments" value="-Djnlp.packEnabled=true" />
            <param name="codebase_lookup" value="false" />
            <param name="code" value="org.uncommons.watchmaker.examples.monalisa.MonaLisaApplet.class" />
          </object>
        <!--[if !IE]>-->
        </object>
        <!--<![endif]-->
      </div>

      <p>
        This program is inspired by Roger Alsing's
        <a href="http://rogeralsing.com/2008/12/07/genetic-programming-evolution-of-mona-lisa/">evolution
        of the Mona Lisa</a>.  It attempts to find the combination of 50 translucent polygons that most
        closely resembles Leonardo da Vinci's Mona Lisa.
        This implementation is not identical to Roger's - it uses a population of candidate solutions
        and applies cross-over as well as the various types of mutation.
      </p>
      <p>
        This program also demonstrates the Watchmaker Swing library.  This library provides GUI components
        for manipulating evolution parameters (even while the evolution is running).  It also provides
        the re-usable Evolution Monitor component that graphs the state of the evolving population over time.
      </p>
      <p>
        This program is CPU-intensive.  The faster the machine you have, the quicker it will approach a recognisable
        image.  The evolution will stop if there is no improvement observed for 1000 generations (an example of the
        <a href="/api/org/uncommons/watchmaker/framework/termination/Stagnation.html">Stagnation</a>
        termination condition in action).  It could run for hours.
      </p>
 
      <h3>Other Examples</h3>
      <ul>
        <li><a href="salesman.php">The Travelling Salesman</a></li>
        <li><a href="biomorphs.php">Biomorphs</a></li>
        <li><a href="sudoku.php">Sudoku</a></li>
      </ul>
      <?php readfile('../footer.html'); ?>
    </div>
  </body>
</html>
