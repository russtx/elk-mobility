<footer>
  <div class="container">
    <div class="row">
      <div class=" col-xs-3 col-sm-2 footerLogo">
        <a class="navbar-brand" href="<?php echo home_url(); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo">
        </a>
      </div>
      <div class="col-xs-9 col-sm-7 footerMenu">
        <?php wp_nav_menu(); ?>
      </div>
      <div class="col-xs-12 col-sm-3 footerSocials">
        <a href="<?php the_field('facebook', 'option'); ?>" target="_blank" class="blueFacebook"></a>
        <a href="<?php the_field('facebook', 'option'); ?>" target="_blank" class="blueLinkedIn"></a>
      </div>

        <p class="col-sm-6 copyright">
          &copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.
        </p>
        <p class="col-sm-6 childress">
          Created by<a href="#" target="_blank">The Childress Agency</a>
        </p>
      <?php wp_footer(); ?>
    </div><!-- row -->
  </div><!-- container -->
</footer>
</div> <!-- close main container -->
</body>
</html>
