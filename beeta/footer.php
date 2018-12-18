<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Beeta_Theme
 * @since Beeta 1.0
 */
 
$beeta_opt = get_option( 'beeta_opt' );
?>
			<?php if(isset($beeta_opt['footer_layout']) && $beeta_opt['footer_layout']!=''){
				$footer_class = str_replace(' ', '-', strtolower($beeta_opt['footer_layout']));
			} else {
				$footer_class = '';
			} ?>

			<div class="footer <?php echo esc_html($footer_class);?>">
				<?php
				if ( isset($beeta_opt['footer_layout']) && $beeta_opt['footer_layout']!="" ) {

					$jscomposer_templates_args = array(
						'orderby'          => 'title',
						'order'            => 'ASC',
						'post_type'        => 'templatera',
						'post_status'      => 'publish',
						'posts_per_page'   => 30,
					);
					$jscomposer_templates = get_posts( $jscomposer_templates_args );

					if(count($jscomposer_templates) > 0) {
						foreach($jscomposer_templates as $jscomposer_template){
							if($jscomposer_template->post_title == $beeta_opt['footer_layout']){
								echo do_shortcode($jscomposer_template->post_content);
							}
						}
					}
				} else { ?>
					<div class="widget-copyright default-copyright">
						<?php 
						if( isset($beeta_opt['copyright']) && $beeta_opt['copyright']!='' ) {
							echo wp_kses($beeta_opt['copyright'], array(
								'a' => array(
									'href' => array(),
									'title' => array()
								),
								'br' => array(),
								'em' => array(),
								'strong' => array(),
							));
						} else {
							echo 'Copyright <a href="'.esc_url( home_url( '/' ) ).'">'.get_bloginfo('name').'</a> '.date('Y').'. All Rights Reserved';
						}
						?>
					</div>
				<?php
				}
				?>
			</div>
		</div><!-- .page -->
	</div><!-- .wrapper -->
	<!--<div class="beeta_loading"></div>-->
	<?php if ( isset($beeta_opt['back_to_top']) && $beeta_opt['back_to_top'] ) { ?>
	<div id="back-top" class="hidden-xs hidden-sm hidden-md"></div>
	<?php } ?>
	<?php wp_footer(); ?> 
</body>
</html>