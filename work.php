<?php	/* Template Name: Work & Case Studies */ get_header();

$args = new WP_Query(array(
	'post_type' => 'wpb_casestudy',
	'order' => 'DSC'
));

?>
<code>this is work.php</code>
<div class="grid work">
	<?php if (have_posts()) :
		while ($args->have_posts()) : $args->the_post(); ?>
			<article class="<?php the_field('size'); ?>">
				<?php the_post_thumbnail(); ?>
				<h3><a href="<?php the_permalink(); ?>" class="link"><?php the_title(); ?></a></h3>
			</article>
	<?php endwhile;
	endif; ?>
</div>

<?php get_footer(); ?>