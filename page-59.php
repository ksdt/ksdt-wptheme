<?php get_header(); ?>
<section id="content chartscontent" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>
            <?php
                /** @var SpinPapiData */
                $spData = include('/var/www/html/spinpapi/app/getSpd.php');

                // Fetch all scheduled shows for "today" starting at the top of the last hour. See the SpinPapi spec.
                $hour = date('H');
                $shows = $spData->regularShowsInfo('today', $hour);

                if ($shows === false) {
                    return '';
                }

                // Sort the shows received from SpinPapi by on-air time.
                usort(
                    $shows,
                    function ($a, $b) {
                        return strcmp($a['OnairTime'], $b['OnairTime']);
                    }
                );

                // Select the shows with on-air time in the past 6 hours.
                $coming = array();
                //echo var_dump($shows);
                for ($h = $hour - 6; $h <= $hour || count($coming) < 3; $h += 1) {
                    foreach ($shows as $show) {
                        if (substr($show['OnairTime'], 0, 2) == $h % 24) {
                            $coming[] = $show;
                        }
                    }
                }
            ?>

            <h1 class="entry-title">
                recent shows
            </h1>
            <div class="recent_shows_container">
                <div class="artist_box"><div class="overlay"></div><span class="dj_title">Test</span></div>
                <div class="artist_box"><div class="overlay"></div><span class="dj_title">Test</span></div>
                <div class="artist_box"><div class="overlay"></div><span class="dj_title">Test</span></div>
                <div class="artist_box"><div class="overlay"></div><span class="dj_title">Test</span></div>
            </div>

            </article>
            <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
        <?php endwhile; endif; ?>
    </section>
    <?php //get_sidebar(); ?>
    <?php get_footer(); ?>