<!-- begin sidebar -->

<div id="right">
  <div id="author">    
    <a href="http://www.dandyer.co.uk" rel="me"><img src="http://www.dandyer.co.uk/blogdan.png" style="float: right;" alt="Dan Dyer"/></a>
    <h3>
      by Dan Dyer
    </h3>
    <p>
      <a href="http://dandyer.co.uk" rel="me">dandyer.co.uk</a> / <a href="http://uncommons.org">uncommons.org</a><br/>
      <small>Hosted by <a href="http://rectangularsoftware.com">Rectangular Software</a></small>
    </p>      
  </div>

  <div class="line" style="clear: both; margin-bottom: 10px;"></div>
		
  <ul id="sidebar" style="list-style-type: none;">
    <?php if ( !function_exists('dynamic_sidebar')
              || !dynamic_sidebar() ) : ?>

    <?php endif; ?>
  </ul>

</div>

<!-- end sidebar -->
