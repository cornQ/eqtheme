<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php
$has_elementor_header = function_exists('elementor_theme_do_location') && elementor_theme_do_location('header');

$has_crocoblock_header = false;
if ( function_exists('jet_theme_core') && is_object(jet_theme_core()) && isset(jet_theme_core()->frontend) ) {
    $has_crocoblock_header = jet_theme_core()->frontend->has_location('header');
}

if ( ! $has_elementor_header && ! $has_crocoblock_header ) :
?>

<header class="site-header">
    <div class="container header-flex">
        <div class="site-branding">
            <?php
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
                echo '<h1>' . get_bloginfo('name') . '</h1>';
            }
            ?>
        </div>

        <nav class="primary-nav">
            <div class="menu-container">
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'main-menu',
                    'fallback_cb'    => false,
                ]);
                ?>
            </div>
        </nav>
    </div>
</header>

<?php endif; ?>
