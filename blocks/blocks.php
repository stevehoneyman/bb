<?php if (have_rows('blocks')) : ?>
    <?php while (have_rows('blocks')) : the_row(); ?>

        <?php
        if (!get_row_layout()) :
            return;

        // block__4-4-4    
        elseif (get_row_layout() == 'three_cols') :
            get_template_part('blocks/block/threecols');

        // block__8-wide-4        
        elseif (get_row_layout() == 'wide_right_block') :
            get_template_part('blocks/block/wideright');

        // block__4-tall-4-4         
        elseif (get_row_layout() == 'three_cols_left_tall') :
            get_template_part('blocks/block/lefthigh');

        // full-width    
        elseif (get_row_layout() == 'full_width') :
            get_template_part('blocks/block/fullwidth');

        endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>