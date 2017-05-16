<?php get_header(); ?>

<div class="front-page">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div id="content" role="main">
					<?php get_template_part('loops/content', 'page'); ?>
				</div><!-- /#content -->
			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->
	<div class="container-fluid sub-footer">
		<div class="row">
			<?php dynamic_sidebar('footer-widget-area'); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>