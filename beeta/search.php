<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Beeta_Theme
 * @since Beeta 1.0
 */

$beeta_opt = get_option( 'beeta_opt' );

get_header();

$beeta_bloglayout = 'nosidebar';
if(isset($beeta_opt['blog_layout']) && $beeta_opt['blog_layout']!=''){
	$beeta_bloglayout = $beeta_opt['blog_layout'];
}
if(isset($_GET['layout']) && $_GET['layout']!=''){
	$beeta_bloglayout = $_GET['layout'];
}
$beeta_blogsidebar = 'right';
if(isset($beeta_opt['sidebarblog_pos']) && $beeta_opt['sidebarblog_pos']!=''){
	$beeta_blogsidebar = $beeta_opt['sidebarblog_pos'];
}
if(isset($_GET['sidebar']) && $_GET['sidebar']!=''){
	$beeta_blogsidebar = $_GET['sidebar'];
}
if ( !is_active_sidebar( 'sidebar-1' ) )  {
	$beeta_bloglayout = 'nosidebar';
}
switch($beeta_bloglayout) {
	case 'sidebar':
		$beeta_blogclass = 'blog-sidebar';
		$beeta_blogcolclass = 9;
		Beeta_Class::beeta_post_thumbnail_size('beeta-category-thumb');
		break;
	case 'largeimage':
		$beeta_blogclass = 'blog-large';
		$beeta_blogcolclass = 9;
		$beeta_postthumb = '';
		break;
	default:
		$beeta_blogclass = 'blog-nosidebar';
		$beeta_blogcolclass = 12;
		$beeta_blogsidebar = 'none';
		Beeta_Class::beeta_post_thumbnail_size('beeta-post-thumb');
}
?>
<div class="main-container">
	<div class="blog-header-title">
		<div class="container">
			<div class="title-breadcrumb-inner">
				<?php Beeta_Class::beeta_breadcrumb(); ?>
				<header class="entry-header">
					<h1 class="entry-title"><?php if(isset($beeta_opt)) { echo esc_html($beeta_opt['blog_header_text']); } else { esc_html_e('Blog', 'beeta');}  ?></h1>
				</header> 
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<?php if($beeta_blogsidebar=='left') : ?>
				<?php get_sidebar(); ?>
			<?php endif; ?>
			
			<div class="col-12 <?php echo 'col-md-'.$beeta_blogcolclass; ?>">
			
				<div class="page-content blog-page <?php echo esc_attr($beeta_blogclass); if($beeta_blogsidebar=='left') {echo ' left-sidebar'; } if($beeta_blogsidebar=='right') {echo ' right-sidebar'; } ?>">
					<?php if ( have_posts() ) : ?>
						
						<header class="archive-header">
							<h1 class="archive-title"><?php printf( wp_kses(__( 'Search Results for: %s', 'beeta' ), array('span'=>array())), '<span>' . get_search_query() . '</span>' ); ?></h1>
						</header><!-- .archive-header -->

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'content', get_post_format() ); ?>
						<?php endwhile; ?>

						<div class="pagination">
							<?php Beeta_Class::beeta_pagination(); ?>
						</div>

					<?php else : ?>

						<article id="post-0" class="post no-results not-found">
							<header class="entry-header">
								<h3 class="entry-title"><?php esc_html_e( 'Nothing Found', 'beeta' ); ?></h3>
							</header>

							<div class="entry-content">
								<p><?php esc_html_e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'beeta' ); ?></p>
								<?php get_search_form(); ?>
							</div><!-- .entry-content -->
						</article><!-- #post-0 -->

					<?php endif; ?>
				</div>
			</div>
			<?php if( $beeta_blogsidebar=='right') : ?>
				<?php get_sidebar(); ?>
			<?php endif; ?>
		</div>
		
	</div>
</div>
<?php get_footer(); ?>