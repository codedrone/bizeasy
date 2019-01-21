<?php 

if (!function_exists('twentysixteen_scripts')) :
	function twentysixteen_scripts() {
		// Add custom fonts, used in the main stylesheet.
		//wp_enqueue_style( 'twentysixteen-fonts', twentysixteen_fonts_url(), array(), null );

		// Add Genericons, used in the main stylesheet.
		wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.4.1' );

		// Theme stylesheet.
		wp_enqueue_style( 'twentysixteen-style', get_stylesheet_uri() );

		// Load the Internet Explorer specific stylesheet.
		wp_enqueue_style( 'twentysixteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentysixteen-style' ), '20160816' );
		wp_style_add_data( 'twentysixteen-ie', 'conditional', 'lt IE 10' );

		// Load the Internet Explorer 8 specific stylesheet.
		wp_enqueue_style( 'twentysixteen-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'twentysixteen-style' ), '20160816' );
		wp_style_add_data( 'twentysixteen-ie8', 'conditional', 'lt IE 9' );

		// Load the Internet Explorer 7 specific stylesheet.
		wp_enqueue_style( 'twentysixteen-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'twentysixteen-style' ), '20160816' );
		wp_style_add_data( 'twentysixteen-ie7', 'conditional', 'lt IE 8' );

		// Load the html5 shiv.
		wp_enqueue_script( 'twentysixteen-html5', get_template_directory_uri() . '/js/html5.js', array(), '3.7.3' );
		wp_script_add_data( 'twentysixteen-html5', 'conditional', 'lt IE 9' );

		wp_enqueue_script( 'twentysixteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20160816', true );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		if ( is_singular() && wp_attachment_is_image() ) {
			wp_enqueue_script( 'twentysixteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20160816' );
		}

		wp_enqueue_script( 'twentysixteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20160816', true );

		wp_localize_script( 'twentysixteen-script', 'screenReaderText', array(
			'expand'   => __( 'expand child menu', 'twentysixteen' ),
			'collapse' => __( 'collapse child menu', 'twentysixteen' ),
		) );

		wp_enqueue_style( 'fonts', get_stylesheet_directory_uri() . '/css/font-family.css' );
		wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/css/fontawesome.min.css' );
	}
add_action('wp_enqueue_scripts', 'twentysixteen_scripts');
endif;


function contactform7_before_send_mail( $form_to_DB ) {
    global $wpdb;
    $form_to_DB = WPCF7_Submission::get_instance();
    if ( $form_to_DB ) 
        $formData = $form_to_DB->get_posted_data();
    $name = $formData['contact-name'];
    $email = $formData['email'];
    $message = $formData['message'];
    $date = date('Y-m-d H:i:s');
    $update = date('Y-m-d H:i:s');
    
    $wpdb->insert( 'support_messages', array( 'vName' => $name, 'vEmail'=> $email, 'tMessage' => $message, 'dtCreatedDateTime' => $date, 'dtUpdatedDateTime' => $update ), array( '%s' ) );
}
remove_all_filters ('wpcf7_before_send_mail');
add_action( 'wpcf7_before_send_mail', 'contactform7_before_send_mail' );


?>
