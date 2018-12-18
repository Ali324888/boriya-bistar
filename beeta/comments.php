<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to beeta_comment() which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage Beeta_Theme
 * @since Beeta 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>
<?php // You can start editing here -- including this comment! ?>

<?php if ( have_comments() ) : ?>
<div id="comments" class="comments-area"> 
	
		<h3 class="comments-title">
			<?php
				printf( _n( '1 comment', '%1$s comments', get_comments_number(), 'beeta' ),
					number_format_i18n( get_comments_number() ) );
			?>
		</h3>

		<ol class="commentlist">
			<?php wp_list_comments( array( 'callback' => 'Beeta_Class::beeta_comment', 'style' => 'ol' ) ); ?>
		</ol><!-- .commentlist -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<div class="pagination">
			<?php paginate_comments_links(); ?>
		</div>
		<?php endif; // check for comment navigation ?> 
  
</div><!-- #comments .comments-area -->
<?php endif; // have_comments() ?>
<?php
	/* If there are no comments and comments are closed, let's leave a note.
	 * But we only want the note on posts and pages that had comments in the first place.
	 */
	if ( ! comments_open() && get_comments_number() ) : ?>
	<p class="nocomments"><?php esc_html_e( 'Comments are closed.' , 'beeta' ); ?></p>
<?php endif; ?>
<?php comment_form(); ?>
