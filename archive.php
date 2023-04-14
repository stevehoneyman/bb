<?php get_header(); ?>

<code>this is archive.php</code>

<div class="grid">
	<?php if (have_posts()) :
		while (have_posts()) : the_post(); ?>
			<article class="<?php the_field('controls'); ?>">
				<?php the_post_thumbnail(); ?>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			</article>
	<?php endwhile;
	endif; ?>
</div>

<?php get_footer(); ?>