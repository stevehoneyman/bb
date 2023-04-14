<div class="wp-wysiwyg">
	<?php if (have_posts()) :
		while (have_posts() ) : the_post() ; ?>
			<?php the_content(); ?>

			<?php
				//wp_get_attachment_image( $attachment_id, $size, $icon, $attr [could be src, class, alt etc..] );
				$attachment_id = get_post_thumbnail_id($post->ID);
				echo wp_get_attachment_image($attachment_id, 'full', false, array('loading' => false));
			?>

			<?php endwhile;
		endif; ?>
</div>
