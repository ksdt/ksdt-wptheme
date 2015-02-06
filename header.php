<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?php wp_title( ' | ', true, 'right' ); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
        
    <div id="wrapper" class="hfeed">
        <header id="header" role="banner">

            <section id="branding">
                <div id="site-title"><a id="site-title-link" href="/"><?php bloginfo( 'name' ); ?></a></div>
                <div class="sun"></div>
                <div class="bar bar1"></div>
                <div class="bar bar2"></div>
                <div class="bar bar3"></div>
                <div class="bar bar4"></div>
                <div class="bar bar5"></div>            
            </section>
            <nav id="menu" role="navigation">
                <div class="navlinks">
                    <a class="navlink" href="player/player.html" onclick="window.open(this.href,'_blank',
                    'width=400,height=600,resizable,scrollbars=no,status=1');
                    return false;">listen</a>
                    <a class="navlink" href="?page_id=25">about us</a>
                    <a class="navlink" href="?page_id=28">shows</a>
                    <!--<a class="navlink" href="?page_id=30">blog</a>-->
                    <a class="navlink" href="?page_id=32">get involved</a>
                    <a class="navlink" href="?page_id=34">musicdb</a>
                    <a class="navlink" href="?page_id=54">contact us</a>
                    <a href="past_shows/" class="navlink">past shows</a>
                    <!--<a class="navlink" href="?page_id=36">vault</a>-->
                </div>
                <?php //wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            </nav>
        </header>
        <div id="container">