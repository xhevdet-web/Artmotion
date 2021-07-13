<section class="our_products_layout">
    <div class="container">
        <div class="row">
            <?php if (have_rows('boxes')): ?>
                <?php while (have_rows('boxes')) : the_row(); ?>
                    <div class="col-md-4">
                        <div class="product_information_box_wrapper_info">
                            <img src="<?php the_sub_field('image');?>" alt="">
                            <h5><?php the_sub_field('title');?></h5>
                            <p><?php the_sub_field('content');?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>