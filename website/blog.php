<div id="blog">
  <img src="/dan.png" width="70" height="70" alt="Dan" id="mugshot"/>
  <h2>New Adventures<br/>in Software</h2>
  <?php
  if (file_exists('../newadventuresinsoftware/wp-load.php'))
  {
      define('WP_USE_THEMES', false);
      require('../newadventuresinsoftware/wp-load.php');
      query_posts('showposts=5');
  ?>
      <dl id="headlines">
      <?php while (have_posts()): the_post(); ?>
        <dt><a href="<?php the_permalink() ?>"><?php the_title(); ?></a><br /><span class="date"><?php the_time('F jS, Y') ?></span></dt>
        <dd><?php the_excerpt(); ?></dd>
      <?php endwhile; ?>
      </dl>
  <?php } else { ?>
    <p><a href="http://blog.uncommons.org">New Adventures in Software Blog</a></p>
  <?php } ?>
</div>
