<?php

if( ! function_exists( 'beeta_get_slider_setting' ) ) {
	function beeta_get_slider_setting() {
		$status_opt = array(
			'',
			__( 'Yes', 'beeta' ) => true,
			__( 'No', 'beeta' ) => false,
		);
		
		$effect_opt = array(
			'',
			__( 'Fade', 'beeta' ) => 'fade',
			__( 'Slide', 'beeta' ) => 'slide',
		);
	 
		return array( 
			array(
				'type' => 'checkbox',
				'heading' => esc_html__( 'Enable slider', 'beeta' ),
				'param_name' => 'enable_slider',
				'value' => true,
				'save_always' => true, 
				'group' => esc_html__( 'Slider Options', 'beeta' ),
			),
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Items Default', 'beeta' ),
				'param_name' => 'items',
				'group' => esc_html__( 'Slider Options', 'beeta' ),
				'value' => 5,
			),
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Item Desktop', 'beeta' ),
				'param_name' => 'item_desktop',
				'group' => esc_html__( 'Slider Options', 'beeta' ),
				'value' => 4,
			), 
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Item Small', 'beeta' ),
				'param_name' => 'item_small',
				'group' => esc_html__( 'Slider Options', 'beeta' ),
				'value' => 3,
			),
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Item Tablet', 'beeta' ),
				'param_name' => 'item_tablet',
				'group' => esc_html__( 'Slider Options', 'beeta' ),
				'value' => 2,
			),
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Item Mobile', 'beeta' ),
				'param_name' => 'item_mobile',
				'group' => esc_html__( 'Slider Options', 'beeta' ),
				'value' => 1,
			),
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Navigation', 'beeta' ),
				'param_name' => 'navigation',
				'value' => $status_opt,
				'save_always' => true,
				'group' => esc_html__( 'Slider Options', 'beeta' ),
			),
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Pagination', 'beeta' ),
				'param_name' => 'pagination',
				'value' => $status_opt,
				'save_always' => true,
				'group' => esc_html__( 'Slider Options', 'beeta' )
			),
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Speed sider', 'beeta' ),
				'param_name' => 'speed',
				'value' => '500',
				'save_always' => true,
				'group' => esc_html__( 'Slider Options', 'beeta' )
			),
			array(
				'type' => 'checkbox',
				'heading' => esc_html__( 'Slider Auto', 'beeta' ),
				'param_name' => 'auto',
				'value' => false, 
				'group' => esc_html__( 'Slider Options', 'beeta' )
			),
			array(
				'type' => 'checkbox',
				'heading' => esc_html__( 'Slider loop', 'beeta' ),
				'param_name' => 'loop',
				'value' => false, 
				'group' => esc_html__( 'Slider Options', 'beeta' )
			),
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Effects', 'beeta' ),
				'param_name' => 'effect',
				'value' => $effect_opt,
				'save_always' => true,
				'group' => esc_html__( 'Slider Options', 'beeta' )
			), 
		);
	}
}
//Shortcodes for Visual Composer

add_action( 'vc_before_init', 'beeta_vc_shortcodes' );
function beeta_vc_shortcodes() { 

	//Main Menu
	vc_map( array(
		'name' => esc_html__( 'Main Menu', 'beeta'),
		'base' => 'roadmainmenu',
		'class' => '',
		'category' => esc_html__( 'Theme', 'beeta'),
		'params' => array(
			array(
				'type' => 'attach_image',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Upload sticky logo image', 'beeta' ),
				'param_name' => 'sticky_logoimage',
				'value' => '',
			),
		)
	) );

	//Categories Menu
	vc_map( array(
		'name' => esc_html__( 'Categories Menu', 'beeta'),
		'base' => 'roadcategoriesmenu',
		'class' => '',
		'category' => esc_html__( 'Theme', 'beeta'),
		'params' => array(
		)
	) );
  

	//Mini Cart
	vc_map( array(
		'name' => esc_html__( 'Mini Cart', 'beeta'),
		'base' => 'roadminicart',
		'class' => '',
		'category' => esc_html__( 'Theme', 'beeta'),
		'params' => array(
		)
	) );

	//Products Search
	vc_map( array(
		'name' => esc_html__( 'Product Search', 'beeta'),
		'base' => 'roadproductssearch',
		'class' => '',
		'category' => esc_html__( 'Theme', 'beeta'),
		'params' => array(
		)
	) );

	//Copyright
	vc_map( array(
		'name' => esc_html__( 'Copyright information', 'beeta'),
		'base' => 'roadcopyright',
		'class' => '',
		'category' => esc_html__( 'Theme', 'beeta'),
		'params' => array(
		)
	) );
	//Brand logos
	vc_map( array(
		'name' => esc_html__( 'Brand Logos', 'beeta' ),
		'base' => 'ourbrands',
		'class' => '',
		'category' => esc_html__( 'Theme', 'beeta'),
		'params' => array_merge( 
			array(
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Number of columns', 'beeta' ),
					'param_name' => 'colsnumber',
					'value' => esc_html__( '6', 'beeta' ),
				),
				array(
					'type' => 'dropdown',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Number of rows', 'beeta' ),
					'param_name' => 'rowsnumber',
					'value' => array(
							'1'	=> '1',
							'2'	=> '2',
							'3'	=> '3',
							'4'	=> '4',
						),
				),
			),beeta_get_slider_setting()
		)

	) );

	//popular category
	vc_map( array(
		"name" => esc_html__( "Popular Categories", "beeta" ),
		"base" => "popular_categories",
		"class" => "",
		"category" => esc_html__( "Theme", "beeta"),
		"params" => array(
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Category slug", "beeta" ),
				"param_name" => "category",
				"value" => "",
			),
			array(
				"type" => "textfield",
				"holder" => "div",
				"class" => "",
				"heading" => esc_html__( "Thumbnail URL", "beeta" ),
				"param_name" => "image",
				"value" => "",
			),
		)
	) );

	//Categories carousel
	vc_map( array(
		'name' => esc_html__( 'Categories Carousel', 'beeta' ),
		'base' => 'categoriescarousel',
		'class' => '',
		'category' => esc_html__( 'Theme', 'beeta'),
		'params' => array_merge(
			array(
				array(
					'type' => 'textfield',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Number of columns', 'beeta' ),
					'param_name' => 'colsnumber',
					'value' => esc_html__( '6', 'beeta' ),
				),
				array(
					'type' => 'dropdown',
					'holder' => 'div',
					'class' => '',
					'heading' => esc_html__( 'Number of rows', 'beeta' ),
					'param_name' => 'rowsnumber',
					'value' => array(
							'1'	=> '1',
							'2'	=> '2',
							'3'	=> '3',
							'4'	=> '4',
						),
				),
			), beeta_get_slider_setting() 
		)
	) );
	
	//MailPoet Newsletter Form
	vc_map( array(
		'name' => esc_html__( 'Newsletter Form (MailPoet)', 'beeta' ),
		'base' => 'wysija_form',
		'class' => '',
		'category' => esc_html__( 'Theme', 'beeta'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Form ID', 'beeta' ),
				'param_name' => 'id',
				'value' => '',
				'description' => esc_html__( 'Enter form ID here', 'beeta' ),
			),
		)
	) );
	
	//Latest posts
	vc_map( array(
		'name' => esc_html__( 'Latest posts', 'beeta' ),
		'base' => 'latestposts',
		'class' => '',
		'category' => esc_html__( 'Theme', 'beeta'),
		'params' =>  array_merge(array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of posts', 'beeta' ),
				'param_name' => 'posts_per_page',
				'value' => esc_html__( '5', 'beeta' ),
			),
			  
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Excerpt length', 'beeta' ),
				'param_name' => 'length',
				'value' => esc_html__( '20', 'beeta' ),
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of columns', 'beeta' ),
				'param_name' => 'colsnumber',
				'value' => esc_html__( '4', 'beeta' ),
			), 
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of rows', 'beeta' ),
				'param_name' => 'rowsnumber',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
					),
			), 
		),beeta_get_slider_setting() )
	) );
	
	//Testimonials
	vc_map( array(
		'name' => esc_html__( 'Testimonials', 'beeta' ),
		'base' => 'woothemes_testimonials',
		'class' => '',
		'category' => esc_html__( 'Theme', 'beeta'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of testimonial', 'beeta' ),
				'param_name' => 'limit',
				'value' => esc_html__( '10', 'beeta' ),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Display Author', 'beeta' ),
				'param_name' => 'display_author',
				'value' => array(
					'Yes'	=> 'true',
					'No'	=> 'false',
				),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Display Avatar', 'beeta' ),
				'param_name' => 'display_avatar',
				'value' => array(
					'Yes'	=> 'true',
					'No'	=> 'false',
				),
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Avatar image size', 'beeta' ),
				'param_name' => 'size',
				'value' => '',
				'description' => esc_html__( 'Avatar image size in pixels. Default is 50', 'beeta' ),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Display URL', 'beeta' ),
				'param_name' => 'display_url',
				'value' => array(
					'Yes'	=> 'true',
					'No'	=> 'false',
				),
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Category', 'beeta' ),
				'param_name' => 'category',
				'value' => esc_html__( '0', 'beeta' ),
				'description' => esc_html__( 'ID/slug of the category. Default is 0', 'beeta' ),
			),
		)
	) );
	
	
	//Rotating tweets
	vc_map( array(
		'name' => esc_html__( 'Rotating tweets', 'beeta' ),
		'base' => 'rotatingtweets',
		'class' => '',
		'category' => esc_html__( 'Theme', 'beeta'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Twitter user name', 'beeta' ),
				'param_name' => 'screen_name',
				'value' => '',
			),
		)
	) );

	//Twitter feed
	vc_map( array(
		'name' => esc_html__( 'Twitter feed', 'beeta' ),
		'base' => 'AIGetTwitterFeeds',
		'class' => '',
		'category' => esc_html__( 'Theme', 'beeta'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Your Twitter Name(Without the "@" symbol)', 'beeta' ),
				'param_name' => 'ai_username',
				'value' => '',
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number Of Tweets', 'beeta' ),
				'param_name' => 'ai_numberoftweets',
				'value' => '',
			),
			// array(
			// 	'type' => 'textfield',
			// 	'holder' => 'div',
			// 	'class' => '',
			// 	'heading' => esc_html__( 'Your Title', 'beeta' ),
			// 	'param_name' => 'ai_tweet_title',
			// 	'value' => '',
			// ),
		)
	) );
	
	//Google map
	vc_map( array(
		'name' => esc_html__( 'Google map', 'beeta' ),
		'base' => 'beeta_map',
		'class' => '',
		'category' => esc_html__( 'Theme', 'beeta'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Map Height', 'beeta' ),
				'param_name' => 'map_height',
				'value' => esc_html__( '400', 'beeta' ),
				'description' => esc_html__( 'Map height in pixels. Default is 400', 'beeta' ),
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Map Zoom', 'beeta' ),
				'param_name' => 'map_zoom',
				'value' => esc_html__( '17', 'beeta' ),
				'description' => esc_html__( 'Map zoom level, min 0, max 21. Default is 17', 'beeta' ),
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Latitude', 'beeta' ),
				'param_name' => 'lat1',
				'value' => '',
				'group' => 'Marker 1'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Longtitude', 'beeta' ),
				'param_name' => 'long1',
				'value' => '',
				'group' => 'Marker 1'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Address', 'beeta' ),
				'param_name' => 'address1',
				'value' => '',
				'description' => esc_html__( 'If you donot enter coordinate, enter address here', 'beeta' ),
				'group' => 'Marker 1'
			),
			array(
				'type' => 'attach_image',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Marker image', 'beeta' ),
				'param_name' => 'marker1',
				'value' => '',
				'description' => esc_html__( 'Upload marker image, image size: 40x46 px', 'beeta' ),
				'group' => 'Marker 1'
			),
			array(
				'type' => 'textarea',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Description', 'beeta' ),
				'param_name' => 'description1',
				'value' => '',
				'description' => esc_html__( 'Allowed HTML tags: a, i, em, br, strong, h1, h2, h3', 'beeta' ),
				'group' => 'Marker 1'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Latitude', 'beeta' ),
				'param_name' => 'lat2',
				'value' => '',
				'group' => 'Marker 2'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Longtitude', 'beeta' ),
				'param_name' => 'long2',
				'value' => '',
				'group' => 'Marker 2'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Address', 'beeta' ),
				'param_name' => 'address2',
				'value' => '',
				'description' => esc_html__( 'If you donot enter coordinate, enter address here', 'beeta' ),
				'group' => 'Marker 2'
			),
			array(
				'type' => 'attach_image',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Marker image', 'beeta' ),
				'param_name' => 'marker2',
				'value' => '',
				'description' => esc_html__( 'Upload marker image', 'beeta' ),
				'group' => 'Marker 2'
			),
			array(
				'type' => 'textarea',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Description', 'beeta' ),
				'param_name' => 'description2',
				'value' => '',
				'description' => esc_html__( 'Allowed HTML tags: a, i, em, br, strong, p, h2, h2, h3', 'beeta' ),
				'group' => 'Marker 2'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Latitude', 'beeta' ),
				'param_name' => 'lat3',
				'value' => '',
				'group' => 'Marker 3'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Longtitude', 'beeta' ),
				'param_name' => 'long3',
				'value' => '',
				'group' => 'Marker 3'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Address', 'beeta' ),
				'param_name' => 'address3',
				'value' => '',
				'description' => esc_html__( 'If you donot enter coordinate, enter address here', 'beeta' ),
				'group' => 'Marker 3'
			),
			array(
				'type' => 'attach_image',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Marker image', 'beeta' ),
				'param_name' => 'marker3',
				'value' => '',
				'description' => esc_html__( 'Upload marker image', 'beeta' ),
				'group' => 'Marker 3'
			),
			array(
				'type' => 'textarea',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Description', 'beeta' ),
				'param_name' => 'description3',
				'value' => '',
				'description' => esc_html__( 'Allowed HTML tags: a, i, em, br, strong, p, h3, h3, h3', 'beeta' ),
				'group' => 'Marker 3'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Latitude', 'beeta' ),
				'param_name' => 'lat4',
				'value' => '',
				'group' => 'Marker 4'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Longtitude', 'beeta' ),
				'param_name' => 'long4',
				'value' => '',
				'group' => 'Marker 4'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Address', 'beeta' ),
				'param_name' => 'address4',
				'value' => '',
				'description' => esc_html__( 'If you donot enter coordinate, enter address here', 'beeta' ),
				'group' => 'Marker 4'
			),
			array(
				'type' => 'attach_image',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Marker image', 'beeta' ),
				'param_name' => 'marker4',
				'value' => '',
				'description' => esc_html__( 'Upload marker image', 'beeta' ),
				'group' => 'Marker 4'
			),
			array(
				'type' => 'textarea',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Description', 'beeta' ),
				'param_name' => 'description4',
				'value' => '',
				'description' => esc_html__( 'Allowed HTML tags: a, i, em, br, strong, p, h4, h4, h4', 'beeta' ),
				'group' => 'Marker 4'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Latitude', 'beeta' ),
				'param_name' => 'lat5',
				'value' => '',
				'group' => 'Marker 5'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Longtitude', 'beeta' ),
				'param_name' => 'long5',
				'value' => '',
				'group' => 'Marker 5'
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Address', 'beeta' ),
				'param_name' => 'address5',
				'value' => '',
				'description' => esc_html__( 'If you donot enter coordinate, enter address here', 'beeta' ),
				'group' => 'Marker 5'
			),
			array(
				'type' => 'attach_image',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Marker image', 'beeta' ),
				'param_name' => 'marker5',
				'value' => '',
				'description' => esc_html__( 'Upload marker image', 'beeta' ),
				'group' => 'Marker 5'
			),
			array(
				'type' => 'textarea',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Description', 'beeta' ),
				'param_name' => 'description5',
				'value' => '',
				'description' => esc_html__( 'Allowed HTML tags: a, i, em, br, strong, p, h5, h5, h5', 'beeta' ),
				'group' => 'Marker 5'
			),
		)
	) );
	
	//Counter
	vc_map( array(
		'name' => esc_html__( 'Counter', 'beeta' ),
		'base' => 'beeta_counter',
		'class' => '',
		'category' => esc_html__( 'Theme', 'beeta'),
		'params' => array(
			array(
				'type' => 'attach_image',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Image icon', 'beeta' ),
				'param_name' => 'image',
				'value' => '',
				'description' => esc_html__( 'Upload icon image', 'beeta' ),
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number', 'beeta' ),
				'param_name' => 'number',
				'value' => '',
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Text', 'beeta' ),
				'param_name' => 'text',
				'value' => '',
			),
		)
	) );
}
?>