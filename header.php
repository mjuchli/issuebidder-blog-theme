<!doctype html>  

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php wp_title( '|', true, 'right' ); ?></title>
				
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
				
		<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="https://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php //wp_head(); ?>
	    <link href="/wp-content/themes/<?php echo get_template(); ?>/library/bounce/css/bootstrap.min.css" rel="stylesheet">
		<link href="/wp-content/themes/<?php echo get_template(); ?>/library/bounce/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="/wp-content/themes/<?php echo get_template(); ?>/library/bounce/css/glyphicons.css" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	    <link href="/wp-content/themes/<?php echo get_template(); ?>/library/bounce/css/base.css" rel="stylesheet">
		<link href="/wp-content/themes/<?php echo get_template(); ?>/library/bounce/css/blue.css" rel="stylesheet">
		<!-- end of wordpress head -->

		<!-- theme options from options panel -->
		<?php get_wpbs_theme_options(); ?>

		<!-- typeahead plugin - if top nav search bar enabled -->
		<?php require_once('library/typeahead.php'); ?>

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-46246970-2', 'issue-bidder.com');
            ga('send', 'pageview');

        </script>

	</head>
	
	<body <?php body_class(); ?>>
    <div id="wrap">
		<header role="banner">
		
			<div id="inner-header" class="clearfix">
				
				<div class="navbar navbar-fixed-top">
					<div class="navbar-inner">
						<div class="container">
							<nav role="navigation">
                                <div class="brand" style="width:auto; height:30px; padding-top: 0px; padding-right: 30px; display:block; background-repeat: no-repeat; background-position: center; background-image:url('https://issue-bidder.com/bundles/issuebidderuser/img/logo_nav.png')"></div>
								<a class="brand" style="padding-left: 0px; margin-left: 5px;" id="logo" title="<?php echo get_bloginfo('description'); ?>" href="<?php echo home_url(); ?>">
									<?php if(of_get_option('branding_logo','')!='') { ?>
										<img src="<?php echo of_get_option('branding_logo'); ?>" alt="<?php echo get_bloginfo('description'); ?>">
										<?php }
										if(of_get_option('site_name','1')) bloginfo('name'); ?></a>
								
								<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
								</a>
								

                                <div class="nav-collapse collapse">
                                    <?php //bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
                                    <ul class="nav pull-right animated">
                                        <li>
                                            <a href="http://issue-bidder.com/home">Back to Home</a>
                                        </li>
                                    </ul>
                                </div>
								
							</nav>
							
							<?php if(of_get_option('search_bar', '1')) {?>
							<form class="navbar-search pull-right" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
								<input name="s" id="s" type="text" class="search-query" autocomplete="off" placeholder="<?php _e('Search','bonestheme'); ?>" data-provide="typeahead" data-items="4" data-source='<?php echo $typeahead_data; ?>'>
							</form>
							<?php } ?>
							
						</div> <!-- end .nav-container -->
					</div> <!-- end .navbar-inner -->
				</div> <!-- end .navbar -->
			
			</div> <!-- end #inner-header -->
		
		</header> <!-- end header -->
