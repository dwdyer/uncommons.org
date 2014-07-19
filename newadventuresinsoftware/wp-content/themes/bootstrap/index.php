<?php get_header(); ?>

<div class="row">
  <div class="col-md-9">
  
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="post clearfix">
    
      <h2 class="posttitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      <p><small>Posted in <?php the_category(', '); ?> by <b><?php the_author() ?></b> on <?php the_time('F jS, Y') ?> <?php edit_post_link(__('Edit This')); ?></small></p>
     
      <div class="entry">
        <?php the_content(); ?>
      </div>
    </div>
  
    <!-- <?php trackback_rdf(); ?> -->
    <?php endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
  
    <p>
      <?php next_posts_link("&laquo; Older Posts", 0);?>
    </p>
  </div>

  <div class="col-md-3">
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>
