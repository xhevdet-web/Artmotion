<section class="clients_services_layout">
    <div class="container">
        <div class="row">
            <?php if (have_rows('boxes')): ?>
                <?php while (have_rows('boxes')) : the_row(); ?>
                    <div class="col-md-6">
                        <div class="box">
                            <h3><?php the_sub_field('title');?></h3>
                            <?php the_sub_field('content');?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>