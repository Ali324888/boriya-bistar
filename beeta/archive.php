<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, beeta already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
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
			
			<div class="col-12 <?php echo 'col-lg-'.$beeta_blogcolclass; ?>">
				<div class="page-content blog-page <?php echo esc_attr($beeta_blogclass); if($beeta_blogsidebar=='left') {echo ' left-sidebar'; } if($beeta_blogsidebar=='right') {echo ' right-sidebar'; } ?>">
					<?php if ( have_posts() ) : ?>
						<header class="archive-header">
							<?php
								the_archive_title( '<h1 class="archive-title">', '</h1>' );
								the_archive_description( '<div class="archive-description">', '</div>' );
							?>
						</header>

						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/* Include the post format-specific template for the content. If you want to
							 * this in a child theme then include a file called called content-___.php
							 * (where ___ is the post format) and that will be used instead.
							 */
							get_template_part( 'content', get_post_format() );

						endwhile;
						?>
						
						<div class="pagination">
							<?php Beeta_Class::beeta_pagination(); ?>
						</div>
						
					<?php else : ?>
						<?php get_template_part( 'content', 'none' ); ?>
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