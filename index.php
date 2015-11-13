<?php get_header(); ?>
<section id="content" role="main">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php if (!(in_category( 'Site-wide' ))) { continue; } ?>
        <?php get_template_part( 'entry' ); ?>
    <?php endwhile;?>
    <?php get_template_part( 'nav', 'below' ); endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
