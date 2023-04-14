<div class="block__8-high-4">
    <article class="lh-col">
        <?php if (have_rows('lefthand_image')) : ?>
            <?php while (have_rows('lefthand_image')) : the_row(); ?>
                <img src="<?php the_sub_field('image'); ?>">
                <h3 class="excerpt"><?php the_sub_field('lh_project'); ?></h3>
            <?php endwhile; ?>
        <? endif; ?>
    </article>

    <?php if (have_rows('righthand_images_column')) : ?>
        <?php while (have_rows('righthand_images_column')) : the_row(); ?>
            <div class="rh-col col__flex">
                <article>
                    <img src="<?php the_sub_field('image_top'); ?>">
                    <h3><?php the_sub_field('image_top_title'); ?></h3>
                </article>
                <article>
                    <img src="<?php the_sub_field('image_bottom_row'); ?>">
                    <h3><?php the_sub_field('image_bottom_project_title'); ?></h3>
                </article>
            </div>
        <?php endwhile; ?>
    <? endif; ?>
</div>