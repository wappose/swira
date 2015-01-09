<?php get_header(); ?>

<div id="primary" class="content-area container">
  <div id="content" class="site-content row" role="main">
    <div class="<?php echo !is_active_sidebar( 'sidebar_1' )  ? "col-xs-12" : "col-md-8" ?>">

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>

  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
    <h1 id="page-title" class="title"><?php the_title(); ?></h1>
    <div class="row post-date-and-categories">
      <div class="col-md-3"><p>
        <?php the_date(); ?></p>
      </div>
      <div class="col-md-9"><p>
        <?php the_terms( $post->ID, 'category', '', ' / ' ); ?></p>
      </div>
    </div>

    <div class="entry clear">
        <?php the_content(); ?>
        <?php wp_link_pages(); ?>
    </div><!--end entry-->
  </div><!--end post-->

<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>

<?php else : ?>
<?php endif; ?>

    </div><!-- #column -->
<?php if(is_active_sidebar( 'sidebar_1' )) : ?>
    <div class="sidebar-1 col-md-4">
      <div class="sidebar-content">
<?php  dynamic_sidebar( 'sidebar_1' ); ?>
      </div>
    </div><!-- #column -->
<?php endif; ?>
  </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>
