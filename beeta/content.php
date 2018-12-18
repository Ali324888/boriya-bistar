<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Beeta_Theme
 * @since Beeta 1.0
 */
$beeta_opt = get_option( 'beeta_opt' );
$beeta_postthumb = Beeta_Class::beeta_post_thumbnail_size('');
if(Beeta_Class::beeta_post_odd_event() == 1){
	$beeta_postclass='even';
} else {
	$beeta_postclass='odd';
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class($beeta_postclass); ?>>
	<?php if ( ! post_password_required() && ! is_attachment() ) : ?>
		<?php 
			if ( is_single() ) { ?>
				<?php if ( has_post_thumbnail() ) { ?>
					<div class="post-thumbnail">
						<?php the_post_thumbnail(); ?> 
					</div>
				<?php } ?>
			<?php }
		?>
		<?php if ( !is_single() ) { ?>
			<?php if ( has_post_thumbnail() ) { ?>
			<div class="post-thumbnail">
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($beeta_postthumb); ?></a>
			</div>
			<?php } ?>
		<?php } ?>
	<?php endif; ?>
	<div class="postinfo-wrapper <?php if ( !has_post_thumbnail() ) { echo 'no-thumbnail';} ?>">
		<header class="entry-header">
			<?php if ( is_single() ) : ?> 
				<h3 class="entry-title"><?php the_title(); ?></h3>
				 
			<?php else : ?> 
				<h3 class="entry-title">
					<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h3>
				 
			<?php endif; ?>
		</header>
		<div class="post-info"> 
			<?php if (is_home() && is_page_template('page-templates/front-page.php')){ ?>
				<header class="entry-header">  
					<h3 class="entry-title">
						<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
					</h3>
					<div class="post-meta">
						<span class="post-date"> <?php echo get_the_date('', $post->ID);?> </span>
						<span class="post-author">
							<span class="post-by"><?php esc_html_e('Posts by', 'beeta');?> : </span>
							<?php printf( get_the_author() ); ?>
						</span>
						<span class="post-category"> 
							<?php echo get_the_category_list( ', ' ); ?>
						</span>  
					</div>
				</header>
			<?php }?>
			<?php if ( is_single() ) : ?>
				<div class="post-meta">
					<span class="post-date"> <?php echo get_the_date('', $post->ID);?> </span>
					<span class="post-author">
						<span class="post-by"><?php esc_html_e('Posts by', 'beeta');?> : </span>
						<?php printf( get_the_author() ); ?>
					</span>
					<span class="post-category"> 
						<?php echo get_the_category_list( ', ' ); ?>
					</span>  
				</div>
				<div class="entry-content">
					<?php the_content( wp_kses(__( 'Continue reading <span class="meta-nav">&rarr;</span>', 'beeta' ), array('span'=>array('class'=>array())) )); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'beeta' ), 'after' => '</div>', 'pagelink' => '<span>%</span>' ) ); ?>
				</div>
			<?php else : ?>
				<div class="post-meta">
					<span class="post-date"> <?php echo get_the_date('', $post->ID);?> </span>
					<span class="post-author">
						<span class="post-by"><?php esc_html_e('Posts by', 'beeta');?> : </span>
						<?php printf( get_the_author() ); ?>
					</span>
					<span class="post-category"> 
						<?php echo get_the_category_list( ', ' ); ?>
					</span>  
				</div>
				<div class="entry-summary">
					<?php the_excerpt(); ?>
					<a class="readmore button" href="<?php the_permalink(); ?>"><?php if(isset($beeta_opt['readmore_text']) && $beeta_opt['readmore_text']!=''){ echo esc_html($beeta_opt['readmore_text']); } else { echo esc_html_e('Read more', 'beeta');}  ?></a>
					<?php if( function_exists('beeta_blog_sharing') ) { ?>
						<div class="social-sharing"><?php beeta_blog_sharing(); ?></div>
					<?php } ?>
				</div>
			<?php endif; ?>
			<?php if ( is_single() ) : ?>
				<?php if( function_exists('beeta_blog_sharing') ) { ?>
					<div class="social-sharing"><?php beeta_blog_sharing(); ?></div>
				<?php } ?>
				<div class="entry-meta">
					<?php Beeta_Class::beeta_entry_meta(); ?>
				</div> 
				<?php if(get_the_author_meta()!="") { ?>
				<div class="author-info">
					<div class="author-avatar">
						<?php
						$author_bio_avatar_size = apply_filters( 'beeta_author_bio_avatar_size', 68 );
						echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
						?>
					</div>
					<div class="author-description">
						<h2><?php esc_html_e( 'About the Author:', 'beeta'); printf( '<a href="'.esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ).'" rel="author">%s</a>' , get_the_author()); ?></h2>
						<p><?php the_author_meta( 'description' ); ?></p>
					</div>
				</div>
				<?php } ?>
			<?php endif; ?>
		</div>
	</div>
	<?php if ( is_single() ) : ?> 
		<?php comments_template( '', true );  ?>
		<?php 
		//related posts
		$orig_post = $post;
		global $post;
		$tags = wp_get_post_tags($post->ID);
		if ($tags) { ?>
		<div class="relatedposts">
			<h3><?php esc_html_e('Related posts', 'beeta');?></h3>
			<div class="row">
				<?php
				$tag_ids = array();
				foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
				$args=array(
				'tag__in' => $tag_ids,
				'post__not_in' => array($post->ID),
				'posts_per_page'=>3, // Number of related posts to display.
				'ignore_sticky_posts'=>1
				);
				$my_query = new wp_query( $args );
				while( $my_query->have_posts() ) {
					$my_query->the_post();
					?>
					<div class="relatedthumb col-md-4">
						<div class="image">
							<?php the_post_thumbnail('beeta-post-thumb'); ?>
						</div> 
						<h4><a rel="external" href="<?php the_permalink()?>"><?php the_title(); ?></a></h4>
						<span class="post-date">
							<?php echo get_the_date(get_option('date_format'), $post->ID) ;?>
						</span>
					</div>
				<?php }
				$post = $orig_post;
				wp_reset_postdata();
				?>
			</div> 
		</div>
		<?php } ?>
	<?php endif; ?>
</article>