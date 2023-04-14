<?php
$image = get_sub_field('image');
?>

<div class="full-width">
    <?php if ($image) : ?>
        <img src="<?php echo $image; ?>">
        <h3><?php the_sub_field('project_title'); ?></h3>
    <?php endif; ?>
</div>