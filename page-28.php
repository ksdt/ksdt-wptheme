<?php get_header(); ?>
<section id="content chartscontent" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>
            <section class="entry-content">
                <iframe id="shows" src='//spinitron.com/radio/playlist.php?station=ksdt&show=schedule&ptype=d&css=true'></iframe>
            </section>
        </article>
        <?php if ( ! post_password_required() ) comments_template( '', true ); ?>
    <?php endwhile; endif; ?>
</section>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
