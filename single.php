<?php get_header(); ?>
<code>this is single.php</code>
<?php if (have_posts()) :
	while (have_posts()) : the_post(); ?>
		<h3><?php the_title(); ?></h3><br>
		<?php the_post_thumbnail(); ?>
<?php endwhile;
endif; ?>

<?php get_footer(); ?>