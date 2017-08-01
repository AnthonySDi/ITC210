<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php get_title_tag(); ?></title>
    <link href="<?php bloginfo('template_directory'); ?>/css/reset.css" type="text/css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css" type="text/css" rel="stylesheet"> 

<!--wp head function start-->
 <?PHP wp_head(); ?>
 <!--Die wp head function die!! NOTE: die is not the PHP die statement -->
</head>
<body <?PHP body_class(); ?>>
    <div id="wrapper">
        <header>
            <div id="header-nav">
                <a href="<?php echo home_url(); ?>" title="click here for home page"><img class="logo-upper" src="<?php bloginfo('template_directory'); ?>/images/logo-smaller.png" /></a>
    <!--++++ Start of WordPress Nav ++++-->
        <?PHP wp_nav_menu(); ?>
    <!--++++ End of WordPress Nav ++++-->
                <div id="header-social">
                    <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                    <i class="fa fa-facebook-square" aria-hidden="true"></i>
                </div>
            </div>
            <img class="logo-lower" src="<?php bloginfo('template_directory'); ?>/images/logo-smaller.png" />
        <img id="header-img" src="<?php bloginfo('template_directory'); ?>/images/header-img.png" />
        </header>
        <!--header ends here-->
