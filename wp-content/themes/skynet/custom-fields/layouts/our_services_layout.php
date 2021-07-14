<section class="our_services_layout">
    <div class="container">
        <h2><?php the_sub_field('title');?></h2>
        <div class="row">
            <?php if (have_rows('boxes')): ?>
                <?php while (have_rows('boxes')) : the_row(); ?>
                    <div class="col-md-4">
                        <div class="our_service_box">
                            <div class="image_box">
                                <img src="<?php the_sub_field('image');?>" alt="">
                            </div>

                            <h4><?php the_sub_field('title');?></h4>
                            <p><?php the_sub_field('content');?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

