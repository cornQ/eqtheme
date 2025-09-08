<?php
$has_elementor_footer = function_exists('elementor_theme_do_location') && elementor_theme_do_location('footer');

$has_crocoblock_footer = false;
if ( function_exists('jet_theme_core') && is_object(jet_theme_core()) && isset(jet_theme_core()->frontend) ) {
    $has_crocoblock_footer = jet_theme_core()->frontend->has_location('footer');
}

if ( ! $has_elementor_footer && ! $has_crocoblock_footer ) :
?>

<footer class="site-footer">
    <div class="container">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
    </div>
</footer>

<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
