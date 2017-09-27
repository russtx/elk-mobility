<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css?family=Assistant" rel="stylesheet">
    <?php wp_head(); ?>
	</head>
  <body <?php body_class(isset($class) ? $class : ''); ?>>



          <nav class="navbar navbar-default" role="navigation">
            <div class="container">
              <div class="row">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="col-xs-2 col-sm-2 headerLogo">
              <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <h1 class="headerTitle">RussBerge.Com</h1>
              </a>
            </div>
            <div class="col-xs-4 col-sm-2 col-sm-push-8 ">
              <div class="headerSocials">
                <a href="<?php the_field('facebook', 'option'); ?>" target="_blank" class="blueFacebook"></a>
                <a href="<?php the_field('facebook', 'option'); ?>" target="_blank" class="blueLinkedIn"></a>
              </div>
            </div>
            <div class="col-xs-6 col-sm-8 col-sm-pull-2">
              <div class=" navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>

              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class=" collapse navbar-collapse">
               <?php wp_nav_menu( array('menu' => 'Main', 'menu_class' => 'nav navbar-nav ', 'depth'=> 3, 'container'=> false, 'walker'=> new Bootstrap_Walker_Nav_Menu)); ?>
              </div><!-- /.navbar-collapse -->
            </div>
          </div><!-- row -->
        </div><!-- container -->
          </nav>



    <div id="main-container" >
