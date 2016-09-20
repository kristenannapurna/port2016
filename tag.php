<?php get_header('blog'); ?>

<div class="main blog archive">
	<?php get_sidebar(); ?>
  <div class="container">

    <div class="content">
      <h1 class="tagTitle"><?php //single_tag_title(); ?></h1>
      <?php get_template_part( 'loop', 'tag' ); ?>
    </div> <!-- /.content -->



  </div><!-- /.container -->
</div><!-- /.main -->

<?php get_footer(); ?>