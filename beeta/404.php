<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Beeta_Theme
 * @since Beeta 1.0
 */

$beeta_opt = get_option( 'beeta_opt' );

get_header();

?>
	<div class="main-container error404">
		<div class="container">
			<div class="search-form-wrapper">
				<h1>404</h1>
				<h2><?php esc_html_e( "PAGE NOT BE FOUND", 'beeta' ); ?></h2>
				<p class="home-link"><?php esc_html_e( "Sorry but the page you are looking for does not exist, have been removed, name changed or is temporarity unavailable.", 'beeta' ); ?></p>
				<?php get_search_form(); ?>
				<a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( 'Back to home', 'beeta' ); ?>"><?php esc_html_e( 'Back to home page', 'beeta' ); ?></a>
			</div>
		</div> 
	</div>
</div>
<?php get_footer(); ?>