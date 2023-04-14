<div class="block__4-high-4-4">
    <div class="lh-col">
        <?php if (have_rows('lh_col')) : ?>
            <?php while (have_rows('lh_col')) : the_row(); ?>
                <article>
                    <a href="<?php the_sub_field('project_link'); ?>">
                        <img src="<?php the_sub_field('image'); ?>">
                    </a>
                    <h3><?php the_sub_field('project_title'); ?></h3>
                </article>
            <?php endwhile; ?>
        <? endif; ?>

        <?php if (have_rows('mid_col')) : ?>
            <?php while (have_rows('mid_col')) : the_row(); ?>
                <div class="col__flex">
                    <article>
                        <img src="<?php the_sub_field('image_tr'); ?>">
                        <h3><?php the_sub_field('project_title_tr'); ?></h3>
                    </article>
                    <article>
                        <img src="<?php the_sub_field('image_br'); ?>">
                        <h3><?php the_sub_field('project_title_br'); ?></h3>
                    </article>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <div class="rh-col col__flex">
        <?php if (have_rows('right_col')) : ?>
            <?php while (have_rows('right_col')) : the_row(); ?>
                <article>
                    <img src="<?php the_sub_field('image_tr'); ?>">
                    <h3><?php the_sub_field('project_title_tr'); ?></h3>
                </article>
                <article>
                    <img src="<?php the_sub_field('image_br'); ?>">
                    <h3><?php the_sub_field('project_title_br'); ?></h3>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>