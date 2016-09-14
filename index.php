<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header('blog'); ?>

<div class="main blog">
		<?php get_template_part('sidebar') ?>
  <div class="container">
    <div class="content clearfix">
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/.content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>