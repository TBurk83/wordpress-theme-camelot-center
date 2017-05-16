<footer id="site-footer" class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <p>&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></p>
    </div>
    <div class="col-md-6">
      <div class="pull-right">                
        <?php
        if ( has_nav_menu( 'social' ) ) : ?>
        <nav class="social" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'camelot' ); ?>">
          <?php
          wp_nav_menu( array(
            'theme_location' => 'social',
            'menu_class'     => 'social-links-menu',
            'depth'          => 1,
            'link_before'    => '<span class="screen-reader-text">',
            'link_after'     => '</span>' . camelot_get_icon( array( 'icon' => 'chain' ) ),
            ) );
            ?>
          </nav>
        <?php endif; ?>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
