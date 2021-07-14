<section class="images_layout">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <?php if (have_rows('images')): ?>
                    <?php while (have_rows('images')) : the_row(); ?>
                        <div data-aos="zoom-out-left">
                            <div class="image_wrapper">
                                <img src="<?php the_sub_field('image');?>" alt="">
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

