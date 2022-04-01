<?php

	/**
	 *
	 * 	@author Paloma Menezes
	 * 	@version 1.0
	 */

	/*-----------------------------------------------------------------------------------*/
	/* THEME SETUP
	/*-----------------------------------------------------------------------------------*/

	if(!function_exists('isentei_theme_setup')){
		function isentei_theme_setup(){
			add_theme_support('post-formats', array('status', 'aside', 'image', 'video', 'audio', 'gallery', 'quote', 'link'));
			register_nav_menus(
				array(
					'primary' => esc_attr__('Menu Topo', 'isentei'),
					'menu-footer-colum1' => esc_attr__('Footer', 'isentei'),
				)
			);
		}
	}
	add_action('after_setup_theme', 'isentei_theme_setup');
	add_theme_support('post-thumbnails', array('post'));

	/*-----------------------------------------------------------------------------------*/
	/* REGISTER SIDEBARS
	/*-----------------------------------------------------------------------------------*/

	if(!function_exists('isentei_widgets_init')){
		function isentei_widgets_init(){
			register_sidebar(array(
				'name' => esc_attr__('Sidebar', 'isentei'),
				'id' => 'sidebar',
				'description' => esc_attr__('isentei'),
				'before_widget' => '<section class="widget">',
				'after_widget' => '</section>',
				'before_title' => '<h4 class="widget-title">',
				'after_title' => '</h4><hr>'
			));
		}
	}
	add_action('widgets_init', 'isentei_widgets_init');

	/*-----------------------------------------------------------------------------------*/
	/* PAGINATION
	/*-----------------------------------------------------------------------------------*/

	if(!function_exists('isentei_posts_link_left_attributes')){
		function isentei_posts_link_left_attributes(){
			return 'class="pagination-button pagination-older"';
		}
	}
	add_filter('next_posts_link_attributes', 'isentei_posts_link_left_attributes');

	if(!function_exists('isentei_posts_link_right_attributes')){
		function isentei_posts_link_right_attributes(){
			return 'class="pagination-button pagination-newer"';
		}
	}
	add_filter('previous_posts_link_attributes', 'isentei_posts_link_right_attributes');

	/*-----------------------------------------------------------------------------------*/
	/* DEFAULT WIDGETS
	/*-----------------------------------------------------------------------------------*/

	if(!function_exists('isentei_get_default_widget_options')){
		function isentei_get_default_widget_options(){
			return array(
				'before_widget' => '<section class="widget">',
				'after_widget' => '</section>',
				'before_title' => '<h4 class="widget-title">',
				'after_title' => '</h4><hr>'
			);
		}
	}

	if(!function_exists('isentei_get_default_post_widgets')){
		function isentei_get_default_post_widgets(){
			if(class_exists('ecko_widget_blog_info')){ the_widget('ecko_widget_blog_info', array()); }
			if(class_exists('ecko_widget_author_profile')){ the_widget('ecko_widget_author_profile', array()); }
			if(class_exists('ecko_widget_latest_posts')){ the_widget('ecko_widget_latest_posts', array('title' => esc_html__('Latest Articles', 'isentei'), 'postcount' => 5)); }
			if(class_exists('ecko_widget_random_posts')){ the_widget('ecko_widget_random_posts', array('title' => '', 'postcount' => 3)); }
			the_widget('WP_Widget_Categories', 'count=true', isentei_get_default_widget_options());
			the_widget('WP_Widget_Archives', '', isentei_get_default_widget_options());
		}
	}

	if(!function_exists('isentei_get_default_page_widgets')){
		function isentei_get_default_page_widgets(){
			if(class_exists('ecko_widget_blog_info')){ the_widget('ecko_widget_blog_info', array()); }
			if(class_exists('ecko_widget_latest_posts')){ the_widget('ecko_widget_latest_posts', array('title' => esc_html__('Latest Articles', 'isentei'), 'postcount' => 5)); }
			if(class_exists('ecko_widget_random_posts')){ the_widget('ecko_widget_random_posts', array('title' => '', 'postcount' => 3)); }
			the_widget('WP_Widget_Categories', 'count=true', isentei_get_default_widget_options());
			the_widget('WP_Widget_Archives', '', isentei_get_default_widget_options());
		}
	}

	if(!function_exists('isentei_get_default_footer_widgets')){
		function isentei_get_default_footer_widgets(){
			the_widget('WP_Widget_Meta', '', isentei_get_default_widget_options());
			the_widget('WP_Widget_Archives', '', isentei_get_default_widget_options());
			the_widget('WP_Widget_Categories', 'count=true', isentei_get_default_widget_options());
		}
	}


	/*-----------------------------------------------------------------------------------*/
	/* GET GET FIRST FEATURED POST BACKGROUND
	/*-----------------------------------------------------------------------------------*/

	if(!function_exists('isentei_get_first_featured_post_background')){
		function isentei_get_first_featured_post_background($featuredposts){
			if($featuredposts){
				$post_image = wp_get_attachment_image_src(get_post_thumbnail_id($featuredposts[0]->ID), 'ecko_background_large');
				$post_image = $post_image[0];
				return $post_image;
			}
			return false;
		}
	}


	/*-----------------------------------------------------------------------------------*/
	/* MODIFY DEFAULT WIDGET MARKUP
	/*-----------------------------------------------------------------------------------*/

	if(!function_exists('isentei_list_categories')){
		function isentei_list_categories($links){
			$links = str_replace('</a> (', '</a> <span class="count">', $links);
			$links = str_replace(')', '</span>', $links);
			return $links;
		}
	}
	add_filter('wp_list_categories', 'isentei_list_categories');

	if(!function_exists('isentei_list_archives')){
		function isentei_list_archives($links){
			$links = str_replace('</a> (', '</a> <span class="count">', $links);
			$links = str_replace(')', '</span>', $links);
			return $links;
		}
	}
	add_filter('wp_list_archives', 'isentei_list_archives');



	function custom_setup() {
		add_theme_support('title-tag');
	}

	add_action('after_setup_theme', 'custom_setup');

function isentei_signup( $request ) {

	// Validations
	
	// Terms field
	if (! isset( $request['terms'] ) && $request['terms'] != 'yes' ) {
		return [
			'status' => false,
			'message' => 'You need to accept the terms to sign up.',
			'field' => 'terms'
		];
	}

	// E-mail field
	if ( ! isset( $request['email'] ) || empty( $request['email'] ) ) {
		return [
			'status' => false,
			'message' => 'E-mail must not be empty.',
			'field' => 'email'
		];
	}

	// E-mail confirmation field
	if ( ! isset( $request['email-confirmation'] ) || empty( $request['email-confirmation'] ) ) {
		return [
			'status' => false,
			'message' => 'E-mail confirmation must not be empty.',
			'field' => 'email-confirmation'
		];
	}

	// E-mail e E-mail confirmation
	if ( $request['email'] != $request['email-confirmation'] ) {
		return [
			'status' => false,
			'message' => 'E-mail and E-mail confirmation are not equals.',
			'field' => 'email-comparation'
		];
	}

	// Password field
	if ( ! isset( $request['password'] ) || empty( $request['password'] ) ) {
		return [
			'status' => false,
			'message' => 'Password must not be empty.',
			'field' => 'password'
		];
	}

	// Password confirmation field
	if ( ! isset( $request['password-confirmation'] ) || empty( $request['password-confirmation'] ) ) {
		return [
			'status' => false,
			'message' => 'Password confirmation must not be empty.',
			'field' => 'password-confirmation'
		];
	}

	// Password e Password confirmation
	if ( $request['password'] != $request['password-confirmation'] ) {
		return [
			'status' => false,
			'message' => 'Password and Password confirmation are not equals.',
			'field' => 'password-comparation'
		];
	}

	$userdata = [
    'user_login' => $request['email'],
    'user_pass' => $request['password'],
    'user_email' => $request['email'],
    'role' => 'subscriber',
    'show_admin_bar_front' => 'false'
  ];

  $user_id = wp_insert_user ( $userdata );

  if ( is_wp_error( $user_id ) ) {
    return [
      'status' => false,
      'message' => $user_id->get_error_messages()
    ];
  }


  update_user_meta( $user_id, 'date_of_birth', $request['date_of_birth'] );
  update_user_meta( $user_id, 'address', $request['address'] );
  update_user_meta( $user_id, 'interests', $request['interests'] );
  update_user_meta( $user_id, 'gender', $request['gender'] );
  update_user_meta( $user_id, 'terms', $request['terms'] );
  
  return ['status' => true];
}

function isentei_login() {
	if ( isset( $_POST['action'] ) && $_POST['action'] == 'login' ) {
		$creds = array(
	    'user_login'    => $_POST['login_email'],
	    'user_password' => $_POST['login_password'],
	    'remember'      => true
	  );

	  $user = wp_signon( $creds, false );

	  if ( is_wp_error( $user ) ) {

	    $GLOBALS['login_error'] = [
	      'status' => false,
	      'message' => $user->get_error_messages()
	    ];

	    return;
	  }

	  wp_set_auth_cookie( $user->ID );
		$redirect_to = home_url();;
		wp_safe_redirect($redirect_to);
		exit;
	}
}
add_action( 'template_redirect', 'isentei_login', 20 );

// Recover password
function isentei_recover_password($request) {
	if ( ! array_key_exists( 'recover_email', $request ) ) {
		return [
			'status' => false,
			'message' => 'The email field is required.'
		];
	}

	$user_login = $request['recover_email'];

	$email = email_exists( $user_login );

	if ( $email == false ) {
	 	return [
			'status' => false,
			'message' => "This e-mail doesn't exists in our database."
		];
	}

  global $wpdb, $wp_hasher;
  $user_login = sanitize_text_field($user_login);

  if ( empty( $user_login) ) {
    return false;
  } else if ( strpos( $user_login, '@' ) ) {
    $user_data = get_user_by( 'email', trim( $user_login ) );
    if ( empty( $user_data ) )
      return false;
  } else {
    $login = trim($user_login);
    $user_data = get_user_by('login', $login);
  }

  do_action('lostpassword_post');
  if ( !$user_data ) return false;
  // redefining user_login ensures we return the right case in the email
  $user_login = $user_data->user_login;
  $user_email = $user_data->user_email;
  do_action('retrieve_password', $user_login);
  $allow = apply_filters('allow_password_reset', true, $user_data->ID);
  if ( ! $allow )
    return false;
  else if ( is_wp_error($allow) )
    return false;
  $key = get_password_reset_key( $user_data );
  do_action( 'retrieve_password_key', $user_login, $key );

  if ( empty( $wp_hasher ) ) {
    require_once ABSPATH . 'wp-includes/class-phpass.php';
    $wp_hasher = new PasswordHash( 8, true );
  }

  $hashed = $wp_hasher->HashPassword( $key );    
  $wpdb->update( $wpdb->users, array( 'user_activation_key' => $key ), array( 'user_login' => $user_login ) );
  $message = __('Someone requested that the password be reset for the following account:') . "\r\n\r\n";
  $message .= network_home_url( '/' ) . "\r\n\r\n";
  $message .= sprintf(__('Username: %s'), $user_login) . "\r\n\r\n";
  $message .= __('If this was a mistake, just ignore this email and nothing will happen.') . "\r\n\r\n";
  $message .= __('To reset your password, visit the following address:') . "\r\n\r\n";
  $message .= '<' . network_site_url("wp-login.php?action=rp&key=$key&login=" . rawurlencode($user_login), 'login') . ">\r\n";

  if ( is_multisite() )
    $blogname = $GLOBALS['current_site']->site_name;
  else
    $blogname = wp_specialchars_decode(get_option('blogname'), ENT_QUOTES);

  $title = sprintf( __('[%s] Password Reset'), $blogname );

  $title = apply_filters('retrieve_password_title', $title);
  // $message = apply_filters('retrieve_password_message', $message, $key);

  if ( $message && !wp_mail($user_email, $title, $message) ) {
  	return [
	  	'status' => false,
	  	'message' => 'The e-mail could not be sent. Try to contact the support.'
	  ];
  }

  return [
  	'status' => true,
  	'message' => 'Link for password reset has been emailed to you. Please check your email.'
  ];
}

function old( $field ) {
	$return = '';

	if ( isset( $_REQUEST ) && count( $_REQUEST ) > 0 ) {
		if ( array_key_exists( $field, $_REQUEST ) ) {
			$return = $_REQUEST[$field];
		}
	}

	return $return;
}

/*=============================================
=            BREADCRUMBS			            =
=============================================*/

//  to include in functions.php
function the_breadcrumb() {

    $sep = ' / ';

    if (!is_front_page()) {
	
	// Start the breadcrumb with a link to your homepage
        echo '<div class="breadcrumbs">';
        echo '<a href="';
        echo get_option('home');
        echo '">';
        bloginfo('name');
        echo '</a>' . $sep;
	
	// Check if the current page is a category, an archive or a single page. If so show the category or archive name.
        if (is_category() || is_single() ){
            the_category('title_li=');
        } elseif (is_archive() || is_single()){
            if ( is_day() ) {
                printf( __( '%s', 'text_domain' ), get_the_date() );
            } elseif ( is_month() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'text_domain' ) ) );
            } elseif ( is_year() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'Y', 'yearly archives date format', 'text_domain' ) ) );
            } else {
                _e( 'Blog Archives', 'text_domain' );
            }
        }
	
	// If the current page is a single post, show its title with the separator
        if (is_single()) {
            echo $sep;
            the_title();
        }
	
	// If the current page is a static page, show its title.
        if (is_page()) {
            echo the_title();
        }
	
	// if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
        if (is_home()){
            global $post;
            $page_for_posts_id = get_option('page_for_posts');
            if ( $page_for_posts_id ) { 
                $post = get_page($page_for_posts_id);
                setup_postdata($post);
                the_title();
                rewind_posts();
            }
        }

        echo '</div>';
    }
	}