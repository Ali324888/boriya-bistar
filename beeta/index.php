<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Beeta_Theme
 * @since Beeta 1.0
 */

$beeta_opt = get_option( 'beeta_opt' );

get_header();

$beeta_bloglayout = 'sidebar';

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
		Beeta_Class::beeta_post_thumbnail_size('beeta-category-thumb');
		break;
	case 'grid':
		$beeta_blogclass = 'grid';
		$beeta_blogcolclass = 9;
		Beeta_Class::beeta_post_thumbnail_size('beeta-category-thumb');
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

						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
							
							<?php get_template_part( 'content', get_post_format() ); ?>
							
						<?php endwhile; ?>

						<div class="pagination">
							<?php Beeta_Class::beeta_pagination(); ?>
						</div>
						
					<?php else : ?>

						<article id="post-0" class="post no-results not-found">

						<?php if ( current_user_can( 'edit_posts' ) ) :
							// Show a different message to a logged-in user who can add posts.
						?>
							<header class="entry-header">
								<h3 class="entry-title"><?php esc_html_e( 'No posts to display', 'beeta' ); ?></h3>
							</header>

							<div class="entry-content">
								<p><?php printf( wp_kses(__( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'beeta' ), array('a'=>array('href'=>array()))), admin_url( 'post-new.php' ) ); ?></p>
							</div><!-- .entry-content -->

						<?php else :
							// Show the default message to everyone else.
						?>
							<header class="entry-header">
								<h3 class="entry-title"><?php esc_html_e( 'Nothing Found', 'beeta' ); ?></h3>
							</header>

							<div class="entry-content">
								<p><?php esc_html_e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'beeta' ); ?></p>
								<?php get_search_form(); ?>
							</div><!-- .entry-content -->
						<?php endif; // end current_user_can() check ?>

						</article><!-- #post-0 -->

					<?php endif; // end have_posts() check ?>
				</div>
				
			</div>
			<?php if( $beeta_blogsidebar=='right') : ?>
				<?php get_sidebar(); ?>
			<?php endif; ?>
		</div>
	</div> 
</div>
<?php get_footer(); ?>