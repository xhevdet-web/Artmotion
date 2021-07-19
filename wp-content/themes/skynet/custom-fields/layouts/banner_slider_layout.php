<section class="banner_layout_slider">
    <?php if (have_rows('slider')): ?>
        <?php while (have_rows('slider')) : the_row(); ?>
            <img src="<?php the_sub_field("image");?>" alt="">
        <?php endwhile; ?>
    <?php endif; ?>
</section>