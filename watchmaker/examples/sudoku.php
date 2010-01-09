<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <title>Watchmaker Framework - Sudoku Example</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="keywords" content="evolution, evolutionary, genetic, computation, algorithms, programming, java, open, source, free, watchmaker, framework, dan, daniel, dyer, swing, sudoku, solver" />
    <meta name="author" content="Daniel Dyer" />
    <link href="../watchmaker.css" rel="stylesheet" type="text/css" />
    <?php readfile('../analytics.html'); ?>
  </head>
  <body>
    <div id="container">
      <?php readfile('../header.html'); ?>

      <div id="sidebar">
        <p>
          The applet on this page uses an evolutionary algorithm (implemented using the
          <a href="http://watchmaker.uncommons.org">Watchmaker Framework for Evolutionary
          Computation</a>) to solve <a href="http://en.wikipedia.org/wiki/Sudoku">Sudoku</a>
          puzzles.
        </p>
        <p>
            Harder puzzles may require larger population sizes in order to reliably find solutions.  This
            is because fewer givens (fixed cells) means a significantly larger search space of potential
            solutions.
        </p>
        <p>
            The evolutionary algorithm uses two operators.  Ordered mutation is applied within rows (i.e.
            cells are swapped horizontally but never vertically).  The mutation operator respects fixed cells
            and does not attempt to move them.  An additional heuristic avoids mutations that are certain to
            result in invalid solutions (e.g. moving a value into a column where it will duplicate a fixed
            cell elsewhere in that column).
            Cross-over is applied vertically to whole grids (i.e. entire rows are moved intact, columns
            are disrupted).  This combination of operators ensures that rows never contain duplicates, so it
            is only necessary to check columns and sub-grids.
        </p>
        <p>
            Occasionally the solver may get stuck on an "almost" solution and struggle to make the final
            adjustments to complete the puzzle (this is because the modifications made by the program are
            entirely random).  The likelihood of this happening decreases as the population size
            increases.  If the solver does appear to be stuck, the attempt can be aborted and you can
            try again.
        </p>
        <h3>Other Examples</h3>
        <ul>
          <li><a href="salesman.php">The Travelling Salesman</a></li>
          <li><a href="biomorphs.php">Biomorphs</a></li>
          <li><a href="monalisa.php">Mona Lisa</a></li>
        </ul>
      </div>
      
      <div id="main">
        <h2>An Evolutionary Sudoku Solver</h2>
        <div id="applet">
          <!-- The nested object tags are necessary to work in both IE (inner tag) and Firefox (outer
               tag).  Opera will work with either.  It should not be necessary to modify this code. -->
          <!--[if !IE]>-->
          <object type="application/x-java-applet"
                  archive="watchmaker-examples-0.7.1.jar"
                  height="600"
                  width="503"
                  standby="Loading the Sudoku Solver Applet...">
            <param name="java_arguments" value="-Djnlp.packEnabled=true" />
            <param name="codebase_lookup" value="false" />
            <param name="code" value="org.uncommons.watchmaker.examples.sudoku.SudokuApplet.class" />
          <!--<![endif]-->
            <object classid="clsid:08B0E5C0-4FCB-11CF-AAA5-00401C608501"
                    type="application/x-java-applet"
                    archive="watchmaker-examples-0.7.1.jar"
                    height="600"
                    width="503"
                    standby="Loading the Sudoku Solver Applet...">
              <param name="java_arguments" value="-Djnlp.packEnabled=true" />
              <param name="codebase_lookup" value="false" />
              <param name="code" value="org.uncommons.watchmaker.examples.sudoku.SudokuApplet.class" />
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
