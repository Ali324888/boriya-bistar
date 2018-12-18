<?php
/**
 * Product Loop Start
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.3.0
 */

global $wp_query, $woocommerce_loop;

$beeta_opt = get_option( 'beeta_opt' );

$shoplayout = 'sidebar';
if(isset($beeta_opt['shop_layout']) && $beeta_opt['shop_layout']!=''){
	$shoplayout = $beeta_opt['shop_layout'];
}
if(isset($_GET['layout']) && $_GET['layout']!=''){
	$shoplayout = $_GET['layout'];
}
$shopsidebar = 'left';
if(isset($beeta_opt['sidebarshop_pos']) && $beeta_opt['sidebarshop_pos']!=''){
	$shopsidebar = $beeta_opt['sidebarshop_pos'];
}
if(isset($_GET['sidebar']) && $_GET['sidebar']!=''){
	$shopsidebar = $_GET['sidebar'];
}
if ( !is_active_sidebar( 'sidebar-shop' ) )  {
	$shoplayout = 'fullwidth';
}
switch($shoplayout) {
	case 'fullwidth':
		Beeta_Class::beeta_shop_class('shop-fullwidth');
		$shopcolclass = 12;
		$shopsidebar = 'none';
		$productcols = 4;
		break;
	default:
		Beeta_Class::beeta_shop_class('shop-sidebar');
		$shopcolclass = 9;
		$productcols = 3;
} 

$beeta_viewmode = Beeta_Class::beeta_show_view_mode();
?>
<div class="shop-products products row <?php echo esc_attr($beeta_viewmode);?> <?php echo esc_attr($shoplayout);?>">