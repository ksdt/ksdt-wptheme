<?php get_header(); ?>
<section id="content" role="main">
	<?php query_posts('category_name=blog&showposts=5'); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part('entry'); ?>
	<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
    <?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
