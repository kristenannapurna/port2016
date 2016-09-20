<?php get_header('blog'); ?>

<div class="main blog single">
  <?php get_template_part('sidebar') ?>
  <div class="container">
    <article class="content">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1 class="entry-title"><?php the_title(); ?></h1>
          <?php the_tags( '<ul class="tagsList"><li>', '</li><li>', '</li></ul>' ); ?>
          <div class="entry-meta">
            <?php //hackeryou_posted_on(); ?>
          </div><!-- .entry-meta -->

          <div class="entry-content">
            <?php the_content(); ?>
            <p class="blogEnd">Published on <?php the_date(); ?>. Follow me on twitter <a href="http://twitter.com/kristencodes">@kristencodes</a></p>
            <?php wp_link_pages(array(
              'before' => '<div class="page-link"> Pages: ',
              'after' => '</div>'
            )); ?>
          </div><!-- .entry-content -->

          <div class="entry-utility">
            <?php //hackeryou_posted_in(); ?>
            <?php //edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-utility -->
        </div><!-- #post-## -->

        <div id="nav-below" class="navigation blogNav">
          <p class="nav-previous"><?php previous_post_link('%link', '<span>👈</span> %title'); ?></p>
          <p class="nav-next"><?php next_post_link('%link', '%title <span> 👉</span>'); ?></p>
        </div><!-- #nav-below -->

        <?php //comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>

    </article> <!-- /.content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>