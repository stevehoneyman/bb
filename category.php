<?php get_header(); ?>
	<code>this is category.php</code>

	<h2>All posts for: <?php single_cat_title();?></h2>

	<?php if (have_posts()) :
		while (have_posts() ) : the_post() ; ?>
			<span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span><br>
		<?php endwhile;
	endif; ?>

<?php get_footer(); ?>
