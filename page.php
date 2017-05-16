<?php get_header(); ?>

<div id="content-wrap">
	<div class="container">
	  <div class="row">
	    
	    <div class="col-sm-12">
	      <div id="content" role="main">
	        <?php get_template_part('loops/content', 'page'); ?>
	      </div><!-- /#content -->
	    </div>
	  </div><!-- /.row -->
	</div><!-- /.container -->
</div>

<?php get_footer(); ?>