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
            <ul id='social'>
                  <li><a href='https://www.facebook.com/KSDT-UCSD-College-Radio-449663035074953/timeline/'><i class="fa fa-facebook-f fa-2x"></i></a></li>
                  <li><a href='https://twitter.com/radioksdt'><i class="fa fa-twitter fa-2x"></i></a></li>
                  <li><a href='https://instagram.com/ksdt_radio/'><i class="fa fa-instagram fa-2x"></i></a></li>
              </ul>
            <nav id="menu" role="navigation">
                <div class="navlinks">
                    <a class="navlink" id="listen" href="#" >click to listen</a>
                    <a class="navlink" href="?page_id=25">about us</a>
                    <a class="navlink" href="?page_id=28">shows</a>
                    <!--<a class="navlink" href="?page_id=30">blog</a>-->
                    <a class="navlink" href="?page_id=32">get involved</a>
                    <a class="navlink" href="?page_id=34">musicdb</a>
                    <a class="navlink" href="?page_id=54">contact us</a>
                    <!--<a class="navlink" href="?page_id=36">vault</a>-->
                </div>
                <?php //wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            </nav>
            <script>
                $(document).ready(function() {
                    var audio;
                    $('#listen').click(function() {
                        if (!audio || audio && audio.paused) {
                            audio = new Audio('http://ksdt.ucsd.edu:8000/stream');
                            $(this).text('loading...');
                            audio.addEventListener('canplay', function() { audio.play(); $('#listen').text('click to pause'); });
                            audio.addEventListener('playing', function() { $('#listen').text('click to pause'); });
                            audio.addEventListener('pause', function() { $('#listen').text('click to listen'); });
                        } else {
                            audio.pause();
                        }
                    });
                });
                </script>
        </header>
        <div id="container">
