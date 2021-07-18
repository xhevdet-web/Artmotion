<section class="contact_boxes_section">
    <div class="container">
        <div class="row">
            <?php if (have_rows('boxes')): ?>
                <?php while (have_rows('boxes')) : the_row(); ?>
                    <div class="col-md-4">
                        <div class="contact_box">
                            <div class="icon_wrapper">
                                <div class="icon">
                                    <?php the_sub_field('icon');?>
                                </div>
                            </div>
                            <div class="contact_box_content">
                                <h6 class="contact_box_content_title"><?php the_sub_field('title');?></h6>
                                <?php the_sub_field('content');?>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>