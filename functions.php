<?php
	/* moore of content has no link*/
	add_filter( 'the_content_more_link', 'modify_read_more_link' );
	function modify_read_more_link() {
	return ' ...';
	}
	
	/* have a post thumbnail suppoit */
	add_theme_support( 'post-thumbnails' ); 
	
	/* custom title */
	add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
	function baw_hack_wp_title_for_home( $title )
	{
	  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
		return __( 'Home', 'theme_domain' ) . ' | ' . get_bloginfo( 'name' );
	  }
	  return $title.get_bloginfo( 'name' );
	}

	/* modify pagination*/
	add_filter('next_posts_link_attributes', 'posts_link_attributes_1');
	add_filter('previous_posts_link_attributes', 'posts_link_attributes_2');
	function posts_link_attributes_1() {
		return 'class="demo-nav__button"';
	}
	function posts_link_attributes_2() {
		return 'class="demo-nav__button"';
	}

	/* do not show admin bar when logged in */
	show_admin_bar(false);
	
	
	/*custom  feature*/
	function themeslug_theme_customizer( $wp_customize ) {
		/*logo*/
    	$wp_customize->add_section( 'themeslug_logo_section' , array(
		'title'       => __( 'Logo', 'themeslug' ),
		'priority'    => 1,
		'description' => 'Upload a logo to replace the default site name and description in the header',
		) );
		
		$wp_customize->add_setting( 'themeslug_logo' );
		
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
		'label'    => __( 'Logo', 'themeslug' ),
		'section'  => 'themeslug_logo_section',
		'settings' => 'themeslug_logo',
		) ) );
		
		/*bg image*/
		$wp_customize->add_section( 'themeslug_bg_section' , array(
		'title'       => __( 'Background Image', 'themeslug' ),
		'priority'    => 2,
		'description' => 'Upload an image to replace the default site background',
		) );
		
		$wp_customize->add_setting( 'themeslug_bg' );
		
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_bg', array(
		'label'    => __( 'Background Image', 'themeslug' ),
		'section'  => 'themeslug_bg_section',
		'settings' => 'themeslug_bg',
		) ) );
		
		
		/*bg image*/
		$wp_customize->add_section( 'themeslug_fab_section' , array(
		'title'       => __( 'FAB icon', 'themeslug' ),
		'priority'    => 3,
		'description' => 'Select your fab icon of your owner card. Check out <a href="https://www.google.com/design/icons/#" target="_blank">this page</a> to explore all material icon. Sample: face ',
		) );
		
		$wp_customize->add_setting( 'themeslug_fab_icon' );
		
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'themeslug_fab_icon', array(
		'label'    => __( 'FABB icon', 'themeslug' ),
		'section'  => 'themeslug_fab_section',
		'settings' => 'themeslug_fab_icon',
		) ) );
		
		/* social media*/
		
		$wp_customize->add_section( 'themeslug_social_section' , array(
		'title'       => __( 'Social network', 'themeslug' ),
		'priority'    => 66,
		'description' => 'Edit your social media info',
		) );
		
		$wp_customize->add_setting( 'themeslug_social_tw' );
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'themeslug_social_tw',
				array(
					'label'          => __( 'Twitter url', 'themeslug' ),
					'section'        => 'themeslug_social_section',
					'settings'       => 'themeslug_social_tw',
				)
			)
		);
		
		$wp_customize->add_setting( 'themeslug_social_fb' );
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'themeslug_social_fb',
				array(
					'label'          => __( 'Facebook url', 'themeslug' ),
					'section'        => 'themeslug_social_section',
					'settings'       => 'themeslug_social_fb',
				)
			)
		);
		
		$wp_customize->add_setting( 'themeslug_social_google' );
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'themeslug_social_google',
				array(
					'label'          => __( 'Google+ url', 'themeslug' ),
					'section'        => 'themeslug_social_section',
					'settings'       => 'themeslug_social_google',
				)
			)
		);
		

		
		
	}
	add_action( 'customize_register', 'themeslug_theme_customizer' ); 
	
	
	/*get theme logo*/
	function get_blog_logo() {
		if ( get_theme_mod( 'themeslug_logo' ) ) :  
            $result = esc_url( get_theme_mod( 'themeslug_logo' ) );
		else :
            $result = esc_url( get_template_directory_uri() ).'/images/logo.png';
        endif;
		return $result;
	}
	
	
	/*get theme bg image*/
	function get_blog_bg_url() {
		if ( get_theme_mod( 'themeslug_bg' ) ) :  
            $result = esc_url( get_theme_mod( 'themeslug_bg' ) );
		else :
            $result = esc_url( get_template_directory_uri() ).'/images/bg.jpg';
        endif;
		return $result;
	}
	
	
	/*post view*/
	function getPostViews($postID){
		$count_key = 'post_views_count';
		$count = get_post_meta($postID, $count_key, true);
		if($count==''){
			delete_post_meta($postID, $count_key);
			add_post_meta($postID, $count_key, '0');
			return "0";
		}
		return $count.'';
	}
	function setPostViews($postID) {
		$count_key = 'post_views_count';
		$count = get_post_meta($postID, $count_key, true);
		if($count==''){
			$count = 0;
			delete_post_meta($postID, $count_key);
			add_post_meta($postID, $count_key, '0');
		}else{
			$count++;
			update_post_meta($postID, $count_key, $count);
		}
	}
	// Remove issues with prefetching adding extra views
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0); 


	/* no <p> in category_description*/
	remove_filter('term_description','wpautop');

?>

