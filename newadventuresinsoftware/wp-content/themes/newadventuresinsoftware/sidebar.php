<!-- begin sidebar -->

<div id="right">
  <div id="author">    
    <a href="http://www.dandyer.co.uk" rel="me"><img src="http://www.dandyer.co.uk/blogdan.png" style="float: right;" alt="Dan Dyer"/></a>
    <h3>
      by Dan Dyer
    </h3>
    <p>
      <a href="mailto:blog@uncommons.org">blog@uncommons.org</a><br />      
      <a href="http://www.dandyer.co.uk" rel="me">www.dandyer.co.uk</a>
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
