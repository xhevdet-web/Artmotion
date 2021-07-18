<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Skynet
 */

?>
    <footer class="skynet_footer">
        <div class="skynet_top_footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <img class="footer_logo" src="<?php the_field('footer_logo', 'option'); ?>" alt="">
                    </div>
                    <div class="col-md-3 offset-md-1">
                        <div class="top_footer_content_wrapper">
                            <h4 class="footer_title"><?php the_field('footer_title','option');?></h4>
                            <?php the_field('footer_content','option');?>

                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="top_footer_content_wrapper">
                            <?php the_field('footer_second_content','option');?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="top_footer_content_wrapper">
                            <div class="footer_menu">
                                <?php
                                wp_nav_menu( array(
                                    'theme_location' => 'footer',
                                    'menu_id'        => '',
                                ) );
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="skynet_bottom_footer">
            <div class="container">
                <div class="skynet_bottom_footer_content">
                    <p><?php the_field('footer_copyright_text','otpion');?></p>
                    <div class="footer_social_icons">
                        <?php if (have_rows('footer_social_media','option')): ?>
                            <?php while (have_rows('footer_social_media','option')) : the_row(); ?>
                                <a class="footer_social_icon" href="<?php the_sub_field('url');?>">
                                    <?php the_sub_field('icon');?>
                                </a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>

<?php wp_footer(); ?>

</body>
</html>
