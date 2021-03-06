<?php

class vertical_menu_widgets extends WP_Widget {

	function __construct() {
		parent::__construct(
			'vertical_menu_widgets', 
			esc_html__('Vertial Menu Widgets', 'beeta'), 

			// Widget description
			array( 'description' => esc_html__( 'Display vertical menu', 'beeta' ), ) 
		);
	}

	// Creating widget front-end
	public function widget( $args, $instance ) {
		global $post;

		$beeta_opt = get_option( 'beeta_opt' );
		
		$title = apply_filters( 'widget_title', $instance['title'] );
		// before and after widget arguments are defined by themes
		echo wp_kses($args['before_widget'], array(
			'aside'=> array(
				'id'=>array(),
				'class'=>array()
			)
		));
		if ( ! empty( $title ) )
			echo wp_kses($args['before_title'] . $title . $args['after_title'], array(
				'aside'=> array(
					'id'=>array(),
					'class'=>array()
				),
				'h3'=> array(
					'class'=>array()
				),
				'span'=> array(
					'class'=>array()
				)
			));
		
		$cat_menu_class = '';

		if(isset($beeta_opt['categories_menu_home']) && $beeta_opt['categories_menu_home']) {
			$cat_menu_class .=' show_home';
		}
		if(isset($beeta_opt['categories_menu_sub']) && $beeta_opt['categories_menu_sub']) {
			$cat_menu_class .=' show_inner';
		}
		?>
		<div class="categories-menu visible-large <?php echo esc_attr($cat_menu_class); ?>">
			<div class="catemenu-toggler"><span><?php if(isset($beeta_opt)) { echo esc_html($beeta_opt['categories_menu_label']); } else { esc_html_e('Category', 'beeta'); } ?></span><i class="zmdi zmdi-chevron-down zmdi-hc-fw"></i></div>
			<div class="menu-inner">
				<?php wp_nav_menu( array( 'theme_location' => 'categories', 'container_class' => 'categories-menu-container', 'menu_class' => 'categories-menu' ) ); ?>
				<div class="morelesscate">
					<span class="morecate"><i class="fa fa-plus"></i><?php if ( isset($beeta_opt['categories_more_label']) && $beeta_opt['categories_more_label']!='' ) { echo esc_html($beeta_opt['categories_more_label']); } else { esc_html_e('More Categories', 'beeta'); } ?></span>
					<span class="lesscate"><i class="fa fa-minus"></i><?php if ( isset($beeta_opt['categories_less_label']) && $beeta_opt['categories_less_label']!='' ) { echo esc_html($beeta_opt['categories_less_label']); } else { esc_html_e('Close Menu', 'beeta'); } ?></span>
				</div>
			</div> 
		</div>

		<?php echo wp_kses($args['after_widget'], array(
			'aside'=> array(
				'id'=>array(),
				'class'=>array()
			),
			'h3'=> array(
				'class'=>array()
			),
			'span'=> array(
				'class'=>array()
			)
		));
	}
			
	// Widget Backend 
	public function form( $instance ) {
		// Widget admin form

		if( $instance) {
			$title = $instance[ 'title' ]; 
		} else {
			$title = ''; 
		}
		?>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html_e( 'Title:', 'beeta' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p> 
	<?php 
	}
		
	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : ''; 
		return $instance;
	}
}
// Register and load the widget
function beetatheme_load_vertical_menu_widgets() {
	register_widget( 'vertical_menu_widgets' );
}
add_action( 'widgets_init', 'beetatheme_load_vertical_menu_widgets' );