<?php get_header(); ?>

<div id="main">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="post">
  
    <h2 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <p class="byline">Posted in <?php the_category(', '); ?> by <b><?php the_author() ?></b> on <?php the_time('F jS, Y') ?> <?php edit_post_link(__('Edit This')); ?></p>
   
    <div class="entry">
      <?php the_content(); ?>
    </div>
    <div class="postfooter">
      <p>
        <?php comments_popup_link(__('<strong>0</strong> Comments'), __('<strong>1</strong> Comment'), __('<strong>%</strong> Comments')); ?>
        &nbsp;&middot;&nbsp;
        <?php the_tags(); ?>
      </p>
    </div>
  </div>

  <!-- <?php trackback_rdf(); ?> -->
  <?php if (is_single()) { ?>
  <div style="text-align: center; margin: 0 0 1.8em 0;">
    <a href="https://www.digitalocean.com/?refcode=a1e64d7dc147"><img src="http://uncommons.org/digitalocean468x60.jpg" width="468" height="60" alt="Digital Ocean VPS Hosting" /></a>
  </div>
  <?php } ?>
  <?php comments_template(); ?> 

  <?php endwhile; else: ?>
  <p>Sorry, no posts matched your criteria.</p>
  <?php endif; ?>

  <p>
    <?php next_posts_link("&laquo; Older Posts", 0);?>
  </p>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
