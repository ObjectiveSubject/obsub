<?php

	// Forms

	function os_form_process() {
	    $subject 	= $_POST['contact_subject'] . " — Form submission from ObjectiveSubject.com";
	    $name 		= sanitize_text_field( 	$_POST['contact_name'] 		);
		$company 	= sanitize_text_field( 	$_POST['contact_company'] 	);
		$email 		= sanitize_email( 		$_POST['contact_email'] 	);
		$message 	= esc_textarea( 		$_POST['contact_message'] 	);

		$to = get_option( 'admin_email' );
		$body = "Name: " . $name . " <".$email.">\n";
		$body .= "Company: " . $company . "\n";
		$body .= "Subject: " . $subjet . "\n\n";
		$body .= $message;
		// $headers = array( "From: ".$name." <".$email.">" );

		$success = wp_mail( $to, $subject, $body );
		
		if ( $success ) {
			// Create post object
			$my_post = array(
			  'post_title'    => wp_strip_all_tags( $name ),
			  'post_content'  => $body,
			  'post_status'   => 'publish',
			  'post_author'   => 2,
			  'post_type'	  => 'form_entry'
			);
			// Insert the post into the database
			wp_insert_post( $my_post );	
		} else {
			// Create post object
			$my_post = array(
			  'post_title'    => "Submit Failed",
			  'post_content'  => "Failed: " . $success,
			  'post_status'   => 'publish',
			  'post_author'   => 2,
			  'post_type'	  => 'form_entry'
			);
			// Insert the post into the database
			wp_insert_post( $my_post );	
		}
	}
	add_action("wp_ajax_os_form", "os_form_process");

	//use this version for if you want the callback to work for users who are not logged in
	add_action("wp_ajax_nopriv_os_form", "os_form_process");

?>