<section class="jobs_section">
    <div class="container">
        <h1><?php the_sub_field('title');?></h1>
        <div class="row">
            <div class="col-md-7">
                <?php
                $args = array(
                    'post_type' => 'job',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="col-md-12">
                        <div class="box">
                            <h4><?php the_title() ?></h4>
                            <?php the_field('short_description');?>
                            <a class="box_btn" href="<?php echo get_the_permalink();?>">me shume</a>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
            <div class="col-md-5">
                <div class="skynet_form_box">
                    <h4>APLIKO</h4>
                    <form id="aplikim-form" class="submit_post" name="form" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="ispost" value="1" />
                        <?php wp_nonce_field(); ?>
                        <input type="text" required name="emri" placeholder="Emri dhe Mbiemri">
                        <input type="email" name="email" placeholder="Email">
                        <input type="text" required name="telefoni" placeholder="Telefoni">
                        <input type="text" required name="pozita"  placeholder="Pozita per te cilen po aplikoni">
                        <textarea name="shkollimi" id="" cols="30" rows="10" placeholder="Shkollimi dhe aftesit tjera"></textarea>
                        <textarea name="eksperiencat" id="" cols="30" rows="10" placeholder="Eksperiencat"></textarea>
                        <input class="box_btn" type="submit" value="Dergo">
                        <div class="alert alert-success d-none" >
                            Aplikuat me sukses
                        </div>
                        <div class="alert alert-danger d-none" >
                            Aplikimi pati probleme
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
