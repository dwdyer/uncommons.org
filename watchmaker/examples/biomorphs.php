<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <title>Watchmaker Framework - Biomorphs Example</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="keywords" content="evolution, evolutionary, genetic, computation, algorithms, programming, java, open, source, free, watchmaker, framework, dan, daniel, dyer, swing, biomorphs, interactive, selection" />
    <meta name="author" content="Daniel Dyer" />
    <link href="../watchmaker.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://www.uncommons.org/amazon.js"></script> 
    <?php readfile('../analytics.html'); ?>
  </head>
  <body>
    <div id="container">
      <?php readfile('../header.html'); ?>

      <div id="sidebar">
        <p>
          The applet on this page is an example of an interactive evolutionary algorithm that
          uses user-guided selection rather than using pre-determined fitness evaluation and
          selection algorithms.
        </p>
        <p>
          The program is based on Richard Dawkin's Biomorph program as described in his book,
          <a href="http://www.amazon.co.uk/exec/obidos/ASIN/155860510X/uncommonsorg-21">The Blind Watchmaker</a>.  Each evolved entity consists of 9 genes
          that control the appearance of the individual.  The user may select any individual from the
          population and this is used as the seed for the next generation, with each of the members being
          mutated versions of the selected biomorph.
        </p>
        <h3>Other Examples</h3>
        <ul>
          <li><a href="salesman.php">The Travelling Salesman</a></li>
          <li><a href="sudoku.php">Sudoku</a></li>
          <li><a href="monalisa.php">Mona Lisa</a></li>
        </ul>
      </div>
      
      <div id="main">
        <h2>Biomorphs</h2>
        <div id="applet">
          <!-- The nested object tags are necessary to work in both IE (inner tag) and Firefox (outer
               tag).  Opera will work with either.  It should not be necessary to modify this code. -->
          <!--[if !IE]>-->
          <object classid="java:org.uncommons.watchmaker.examples.biomorphs.BiomorphApplet.class"
                  type="application/x-java-applet"
                  archive="watchmaker-examples-0.7.0.jar"
                  height="240"
                  width="623"
                  standby="Loading the Biomorphs Example Applet...">
            <!--<![endif]-->
            <object classid="clsid:08B0E5C0-4FCB-11CF-AAA5-00401C608501"
                    type="application/x-java-applet"
                    archive="watchmaker-examples-0.7.0.jar"
                    height="240"
                    width="623"
                    standby="Loading the Biomorphs Example Applet...">
              <param name="code" value="org.uncommons.watchmaker.examples.biomorphs.BiomorphApplet.class" />
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
