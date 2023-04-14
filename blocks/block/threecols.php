<div class="block__4-4-4">
    <article>
        <?php if (have_rows('column_one')) : ?>
            <?php while (have_rows('column_one')) : the_row(); ?>
                <img src="<?php the_sub_field('image'); ?>">
                <h3 class="excerpt"><?php the_sub_field('project_title'); ?></h3>
            <?php endwhile; ?>
        <? endif; ?>
    </article>

    <article>
        <?php if (have_rows('column_two')) : ?>
            <?php while (have_rows('column_two')) : the_row(); ?>
                <img src="<?php the_sub_field('image'); ?>">
                <h3 class="excerpt"><?php the_sub_field('project_title'); ?></h3>
            <?php endwhile; ?>
        <? endif; ?>
    </article>

    <article>
        <?php if (have_rows('column_three')) : ?>
            <?php while (have_rows('column_three')) : the_row(); ?>
                <img src="<?php the_sub_field('image'); ?>">
                <h3 class="excerpt"><?php the_sub_field('project_title'); ?></h3>
            <?php endwhile; ?>
        <? endif; ?>
    </article>
</div>