<?php get_header(); ?>
<div id="content-wrap">
<div class="container">
  <div class="row">
    
    <div class="col-sm-12">
      <div id="content" role="main">
        <?php get_template_part('loops/content', 'single'); ?>
      </div><!-- /#content -->
    </div>
    
<!--     <div class="col-sm-4" id="sidebar" role="navigation">
       <?php get_sidebar(); ?>
    </div> -->
    
  </div><!-- /.row -->
</div><!-- /.container -->
</div>
<?php get_footer(); ?>