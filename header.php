<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php get_title_tag(); ?></title>

    <link href="<?php bloginfo('stylesheet_url'); ?>style.css" type="text/css" rel="stylesheet">
    <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet"> 

<!--wp head function start-->
 <?PHP wp_head(); ?>
 <!--Die wp head function die!! NOTE: die is not the PHP die statement -->
</head>
<body <?PHP body_class(); ?>>
    <div id="wrapper">
        <header>
            <div id="header-nav">
                <img class="logo-upper" src="<?php bloginfo('template_directory'); ?>/images/logo-smaller.png" />
    <!--++++ Start of WordPress Nav ++++-->
        <?PHP wp_nav_menu(); ?>
    <!--++++ End of WordPress Nav ++++-->
                <ul>
                    <li>
                        <a href="">
                            About
                        </a>
                    </li>
                    <li>
                        <a href="">
                            News
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Events
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Resources
                        </a>
                    </li>
                </ul>
                <div id="header-social">
                    <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                    <i class="fa fa-facebook-square" aria-hidden="true"></i>
                </div>
            </div>
            <img class="logo-lower" src="<?php bloginfo('template_directory'); ?>/images/logo-smaller.png" />
        <img id="header-img" src="<?php bloginfo('template_directory'); ?>/images/header-img.png" />
        </header>
        <!--header ends here-->