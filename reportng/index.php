<?php echo '<?xml version="1.0" encoding="utf-8" ?>'."\n" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <title>ReportNG - An HTML/XML reporting plug-in for TestNG</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta name="description" content="ReportNG is a simple HTML/XML reporting plug-in for the TestNG framework." />
    <meta name="keywords" content="reportng, testng, reporting, unit, test, java, html, xml, css, open, source, free, dan, daniel, dyer, uncommons" />
    <meta name="author" content="Daniel Dyer" />
    <link href="reportng.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://www.uncommons.org/amazon.js"></script> 
    <?php readfile('analytics.html'); ?>
  </head>
  <body>
    <div id="container">
      <?php readfile('header.html'); ?>
      <img src="detail.gif" alt="Report detail page." width="483" height="356" style="float: right; margin-left: 1em; margin-bottom: 1em;"/>
      <p>
        <em>ReportNG is Open Source software, free to download and use subject to the terms of the
        <a href="http://www.apache.org/licenses/LICENSE-2.0.html">Apache Software Licence, Version 2.0</a>.</em>
      </p>
      <p>
        ReportNG is a simple HTML reporting plug-in for the <a href="http://www.testng.org">TestNG</a> unit-testing
        framework.  It is intended as a replacement for the default TestNG HTML report.  The default report is
        comprehensive but is not so easy to understand at-a-glance.  ReportNG provides a simple, colour-coded view of
        the test results.
      </p>
      <p>
        ReportNG generates 100% valid XHTML 1.0 files.  The output can be customised by over-riding the default stylesheet
        with your own CSS file.
      </p>
      <p>
        Since version 0.9.0, ReportNG also includes a second reporter that produces JUnit format XML output.
        This enables TestNG to integrate with tools, such as <a href="https://hudson.dev.java.net">Hudson</a>, that
        understand these XML files.  This is an alternative to the JUnit XML reporter that is provided with TestNG.
        The ReportNG implementation maps each test class to a single &lt;testsuite&gt; element, resulting in one
        XML file per test class.  This is different from the approach taken by the core TestNG implementation.
        The ReportNG version of the JUnit reporter ignores TestNG's notion of suites to produce output that is closer
        to what you would get if you were using JUnit.
      </p>
      <p>
        Suggestions for improvements to ReportNG are encouraged.  Please use the
        <a href="http://github.com/dwdyer/reportng/issues">issue tracker</a>.
      </p>
      <p>
        The current version is <a href="http://github.com/dwdyer/reportng/downloads">1.1.2</a>,
        which has been tested with TestNG 5.12 and 5.13.1 (it should work with any version of TestNG after 5.0,
        but this has not been tested).
      </p>
      <h3>Sample Reports</h3>
      <img src="overview.png" alt="Report overview page." width="511" height="172" style="float: left; clear: right; margin-right: 2em; margin-bottom: 2em;"/>
      <ul>
        <li>
          <a href="sample/index.html">A very basic sample report</a> with some test failures.  This report demonstrates
          most of the features of the reporter.
        </li>
        <li>
          The <a href="sample/custom/index.html">same report with a custom stylesheet</a>.
        </li>
      </ul>
      <h2>How to use ReportNG</h2>
      <h3>Apache Ant</h3>
      <p>
        To use the reporting plug-in, set the <code>listeners</code> attribute of the <code>testng</code> element in
        your <a href="http://ant.apache.org">Ant</a> build file.  This attribute takes a comma-separated list of
        reporter class names.  The class names for the ReportNG reporters are:
      </p>
      <pre>
        org.uncommons.reportng.HTMLReporter
        org.uncommons.reportng.JUnitXMLReporter
      </pre>
      <p>
        You may also want to disable the default TestNG reporters by setting the <code>useDefaultListeners</code>
        attribute to "false".
      </p>
      <p>
        Your Ant task will probably look something like this:
      </p>
      <pre>
        &lt;testng classpathref="test-path"
                outputdir="${test-results.dir}"
                haltonfailure="true"
                useDefaultListeners="false"
                listeners="org.uncommons.reportng.HTMLReporter,org.uncommons.reportng.JUnitXMLReporter"&gt;
          &lt;xmlfileset dir="." includes="testng.xml"/&gt;
          &lt;sysproperty key="org.uncommons.reportng.title" value="My Test Report"/&gt;
        &lt;/testng&gt;
      </pre>
      <p>
        The <code>reportng-1.1.2.jar</code> and <code>velocity-dep-1.4.jar</code> files must be
        included in the classpath used to run the tests.
      </p>
      <h3>Other Build Systems</h3>
      <p>
        If you use <a href="http://maven.apache.org">Maven</a>, you may find 
        <a href="http://solidsoft.wordpress.com/2011/01/23/better-looking-html-test-reports-for-testng-with-reportng-maven-guide/">Marcin Zajączkowski's instructions</a>
        helpful.
        Maven users can find the latest version of ReportNG in the <a href="https://maven2-repository.dev.java.net/">Java.net Maven 2 repository</a>.
      </p>
      <p>
        If you are using <a href="http://www.gradle.org/">Gradle</a>, Tomek Kaczanowski has written
        <a href="http://kaczanowscy.pl/tomek/2009-12/better-looking-test-reports-with-reportng">these instructions</a>
        on how to use ReportNG.
      </p>
      <p>
        If you are using the command line, an IDE plug-in or some other build system,
        please refer to the <a href="http://testng.org/doc/documentation-main.html#running-testng">TestNG documentation</a>
        to find out how to register custom listeners/reporters.
      <h3>Supported System Properties</h3>
      <p>
        The following optional system properties can be set (via nested <code>&lt;sysproperty&gt;</code> elements
        within the <code>&lt;testng&gt;</code> element) in order to customise the report output:
      </p>
      <dl>
        <dt><code>org.uncommons.reportng.coverage-report</code></dt>
        <dd>A relative or absolute URL that links to a test coverage report.</dd>
        <dt><code>org.uncommons.reportng.escape-output</code></dt>
        <dd>
          Used to turn off escaping for log output in the reports (not recommended).
          The default is for output to be escaped, since this prevents characters such as
          '&lt;' and '&amp;' from causing mark-up problems.  If escaping is turned off, then log
          text is included as raw HTML/XML, which allows for the insertion of hyperlinks and
          other nasty hacks.
        </dd>
        <dt><code>org.uncommons.reportng.frames</code></dt>
        <dd>
          Defaults to <code>"true"</code>.  If set to <code>"false"</code>, generates the HTML report
          without using a frameset.  No navigation page is generated and the overview page becomes the
          index page.
        </dd>
        <dt><code>org.uncommons.reportng.locale</code></dt>
        <dd>
          Over-rides the default locale for localised messages in generated reports.  If not
          specified, the JVM default locale is used.  If there are no translations available for
          the selected locale the default English messages are used instead.  This property should
          be set to an ISO language code (e.g. "en" or "fr") or to an ISO language code and an ISO
          country code separated by an underscore (e.g. "en_US" or "fr_CA").
          <em>
            ReportNG 1.1 includes translations for the following languages: English, French and
            Portuguese.  If you would like to contribute translations for other languages, please
            open an issue in the
            <a href="http://github.com/dwdyer/reportng/issues">issue tracker</a> and attach
            a translated version of
            <a href="http://github.com/dwdyer/reportng/blob/master/reportng/src/java/resources/org/uncommons/reportng/messages/reportng.properties">the properties file</a>.
          </em>
        </dd>
        <dt><code>org.uncommons.reportng.show-expected-exceptions</code></dt>
        <dd>
          Set to <code>"true"</code> or <code>"false"</code> to specify whether the stack-traces of expected
          exceptions should be included in the output for passed test cases.  The default is "false" because
          the presence of stack-traces for successful tests may be confusing.
        </dd>
        <dt><code>org.uncommons.reportng.stylesheet</code></dt>
        <dd>
          The path to a custom CSS file that over-rides some or all of the default styles used by
          the <code>HTMLReporter</code>.  This allows the appearance of reports to be customised.
          See the <a href="http://github.com/dwdyer/reportng/blob/master/reportng/src/java/resources/org/uncommons/reportng/templates/html/reportng.css">default
          stylesheet</a> for the classes and selectors that can be styled.
          For an example, see <a href="sample/custom/index.html">this version</a> of the
          <a href="sample/index.html">sample report</a>, which uses the bundled hudsonesque.css file
          to customise the report's appearance.
        </dd>
        <dt><code>org.uncommons.reportng.title</code></dt>
        <dd>Used to over-ride the report title.</dd>
        <dt><code>org.uncommons.reportng.xml-dialect</code></dt>
        <dd>
          Controls the XML generated by <code>JUnitXMLReporter</code>.  If set to <code>"testng"</code>
          (the default), then skipped tests appear as "skipped" in the XML.  This is suitable for use with
          tools such as <a href="https://hudson.dev.java.net">Hudson</a> that understand the TestNG
          dialect of the XML format.  Other tools, such as
          <a href="http://ant.apache.org/manual/OptionalTasks/junitreport.html">Ant's junitreport task</a>,
          do not have a notion of skipped tests.  For these tools the dialect can be set to
          <code>"junit"</code> and skipped tests will be marked as failures.
        </dd>
      </dl>
      <?php readfile('footer.html'); ?>
    </div>
  </body>
</html>
