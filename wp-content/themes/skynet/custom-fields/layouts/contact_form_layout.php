<section class="contact_form_layout">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="contact_form_layout_title_wrapper">
                    <h2><?php the_sub_field('title');?></h2>
                    <?php the_sub_field('content');?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <?php echo do_shortcode(get_sub_field('shortcode'))?>
            </div>
        </div>
    </div>
</section>