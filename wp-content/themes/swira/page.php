<?php get_header(); ?>

<div id="primary" class="content-area container">
    <div id="content" class="site-content row" role="main">
      <div class="col-xs-12">

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>

  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
<?php if(!is_front_page()) : ?>
    <h1><?php the_title(); ?></h1>
<?php endif; ?>
    <div class="entry clear">
        <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
    </div><!--end entry-->
    </div><!--end post footer-->
  </div><!--end post-->

<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
  <div class="navigation index">
    <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
    <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
  </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>

      </div><!-- #column -->
    </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>
