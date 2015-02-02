<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href="<?php echo get_template_directory_uri() ?>/assets/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css"  />

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri() ?>/assets/javascripts/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/assets/javascripts/fonts.fsjs"></script>

	<?php wp_head(); ?>
  </head>
<body <?php body_class(); ?>>

<header id="swira-header">
	<div class="swira-topbar">

		<div class="container">
			<div class="row">
				<div class="col-md-12">

				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#swira-navbar-collapse">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				    </div>

	    			<div id="swira-navbar-collapse" class="collapse navbar-collapse">

	<?php wp_nav_menu( array(  'container' => false, 'menu_class' => 'nav navbar-nav' ) ); ?>
						<?php // get_search_form();
						?>
	    			</div>

				</div>
			</div>
		</div>
	</div>
	<div class="container" id="swira-logo-and-tagline">
		<div class="row">
			<div class="col-md-5"><a href="/"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt="<?php echo get_bloginfo( 'name', 'display' ); ?>" border="0" /></a></div>
			<div class="col-md-7"><p><?php
            $quote = get_post_meta(get_the_ID(), 'custom_quote', true);
            if(!$quote)
                $quote = get_bloginfo( 'description', 'display' );
            echo $quote; ?></p>
			</div>
		</div>
	</div>

</header>


