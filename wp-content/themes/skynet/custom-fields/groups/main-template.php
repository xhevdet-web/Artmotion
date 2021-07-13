<?php while (have_rows('content_elements')) : the_row();
    if(!get_sub_field('hide_block')){
        require __DIR__ . '/../layouts/' . get_row_layout() . '.php';
    }
endwhile; ?>
