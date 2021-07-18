<section class="tv_layout">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-lg-10 offset-lg-1">
                <div class="tv_layout_title_wrapper">
                    <h2><?php the_sub_field('title');?></h2>
                    <?php the_sub_field('content');?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-lg-10 offset-lg-1">
                <div class="skynet_accordions">
                    <?php if (have_rows('accordions')): ?>
                        <?php while (have_rows('accordions')) : the_row(); ?>
                            <div class="skynet_accordion">
                                <div class="skynet_accordion_header open_accordion">
                                    <h4><?php the_sub_field('title');?></h4>
                                    <span><i class="fa fa-chevron-down"></i></span>
                                </div>
                                <div class="skynet_accordion_body">
                                    <div class="skynet_accordion_body_content">
                                        <?php the_sub_field('content');?>
                                        <div class="accordion_image_box">
                                            <img src="<?php the_sub_field('image'); ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>