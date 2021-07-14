<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Skynet
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <nav class="header">
        <div class="skynet_header">
            <div class="container">
                <div class="skynet_header_content">
                    <div class="logo">
                        <img src="<?php the_field('logo','option');?>" alt="skynet_logo">
                    </div>
                    <div class="skynet_header_menu_list">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'header',
                            'menu_id'        => '',
                        ) );
                        ?>
                    </div>
                    <div class="skynet_hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </nav>
