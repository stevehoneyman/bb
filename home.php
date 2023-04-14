<?php get_header(); ?>
<code>this is home.php</code><br>

<div class="grid">
	<?php if (have_posts()) :
		while (have_posts()) : the_post(); ?>
			<article class="grid-item">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php the_post_thumbnail(); ?>
				<span class="post-date"><?php the_date(); ?></span>
				<span class="post-author"><?php the_author(); ?></span>
			</article>
	<? endwhile;
	endif; ?>
</div>

<ul class="categories-active">
	<?php wp_list_categories(array(
		'title_li' => '',
		'order' => "ASC",
		'exclude'  => 1
	)); ?>
</ul>

<?php the_posts_pagination(); ?>
<?php get_footer(); ?>