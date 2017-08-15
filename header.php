<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php get_title_tag(); ?></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <!-- Begin Toggle Menu -->     
    <script type="text/javascript" charset="utf-8">
    $(window).load(function() { // start function
    $("#toggle").click(function() { // toggle
    $("#navigation").toggle(); // display and close navigation
    });
    });
    </script>   
    <!-- End Toggle Menu -->

    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="<?php bloginfo('template_directory'); ?>/css/reset.css" type="text/css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

<!--wp head function start-->
 <?PHP wp_head(); ?>
 <!--Die wp head function die!! NOTE: die is not the PHP die statement -->
</head>
<body <?PHP body_class(); ?>>
    <div id="wrapper">
        <header>
            <div id="header-nav">
                <a href="<?php echo home_url(); ?>" title="click here for home page"><img class="logo-upper" src="<?php bloginfo('template_directory'); ?>/images/kcvc_logo_color.svg" /></a>
    <!--++++ Start of WordPress Nav ++++-->
        <?PHP wp_nav_menu(); ?>
    <!--++++ End of WordPress Nav ++++-->


    <!--++++ Start of WordPress ++++ MOBILE ++++ Nav ++++-->
    <img id="toggle" src="<?php bloginfo('template_directory'); ?>/images/menu-icon-large.png" width="50" height="50" alt="Toggle Menu">
</div>
        <?php wp_nav_menu(array('theme_location' => 'mobilemenu','container' => 'div','container_id' => 'navigation',)); ?>
    <!--++++ End of WordPress ++++ MOBILE ++++ Nav ++++-->
        <img id="header-img" src="<?php bloginfo('template_directory'); ?>/images/kcvchero.jpg" />
        </header>
        <!--header ends here-->
