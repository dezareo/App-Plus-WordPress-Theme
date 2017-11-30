<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package App_Plus_WordPress_Theme
 */
$header_logo = get_field('header_logo');
$header_favicon = get_field('header_favicon');
$header_facebook = get_field('header_facebook');
$header_twitter = get_field('header_twitter');
$header_linkedin = get_field('header_linkedin');
$header_google_plus = get_field('header_google_plus');
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php echo $header_favicon; ?>" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-6 col-sm-3">
                    <a href="#" class="logo">
                        <img src="<?php echo $header_logo; ?>" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-xs-6 col-sm-6">
                    <div class="menu">
                        <nav class="navbar navbar-default" role="navigation">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li><a href="#banner">Home</a></li>
                                        <li><a href="#service">Service</a></li>
                                        <li><a href="#feature">Feature</a></li>
                                        <li><a href="#utility">Utility</a></li>
                                        <li><a href="#subscribe">Subscribe</a></li>
                                    </ul>
                                  
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-3">
                    <ul class="social-info">
                        <li><a href="<?php echo $header_facebook; ?>"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="<?php echo $header_twitter; ?>"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="<?php echo $header_linkedin; ?>"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="<?php echo $header_google_plus; ?>"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
