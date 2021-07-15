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
                    <p>@ 2021 Copyright : Skynet </p>
                    <div class="footer_social_icons">
                        <a class="footer_social_icon" href="">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="footer_social_icon" href="">
                            <i class="fa fa-instagram"></i>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--<footer class="text-center text-lg-start" style="background-color: #222222;">
        <div class="container d-flex justify-content-center py-5">
            <button type="button" class="btn mx-2">
                <img src="images/facebook.png" alt="">
            </button>
            <button type="button" class="btn mx-2">
                <img src="images/youtube.png" alt="">
            </button>
            <button type="button" class="btn mx-2">
                <img src="images/instagram.png" alt="">
            </button>
            <button type="button" class="btn mx-2">
                <img src="images/twitter.png" alt="">
            </button>
        </div>
        <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="https://artmotion.net/">https://artmotion.net/</a>
        </div>
    </footer>-->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
