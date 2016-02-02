<?php

	// Forms

	function os_form_process() {

		// Check nonce
		check_ajax_referer( 'contact_form_nonce', 'nonce' );

		// Check Recaptcha
		if ( !$_POST['g-recaptcha-response'] ) {
			die();
		}
		$url = 'https://www.google.com/recaptcha/api/siteverify';
		$data = array('secret' => '6LdyAhcTAAAAABSH9lEARxFK2OTW9eLpfc9p4NP-', 'response' => $_POST['g-recaptcha-response']);
		$options = array(
		    'http' => array(
		        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
		        'method'  => 'POST',
		        'content' => http_build_query($data),
		    ),
		);
		$context  = stream_context_create($options);
		$result = file_get_contents($url, false, $context);
		
		// if Recaptcha FAILS
		if ( $result === FALSE ) {
			die();
		}

		// Build the data
		$subject 	= $_POST['contact_subject'];
		$name 		= sanitize_text_field( $_POST['contact_name'] );
		$company 	= sanitize_text_field( $_POST['contact_company'] );
		$email 		= sanitize_email( $_POST['contact_email'] );
		$message 	= esc_textarea( $_POST['contact_message'] );
		$to 		= get_option( 'admin_email' );
		$body 		= "Name: " . $name . " <".$email.">\n";
		$body 		.= "Company: " . $company . "\n";
		$body 		.= "Subject: " . $subject . "\n\n";
		$body 		.= $message;

		// Send Mail notification
		$mail_sent = wp_mail( $to, "New OS form submission — " . $name, $body );

		// Insert new post
		$new_post = wp_insert_post( array(
			'post_title'    => $name .' — '. $subject,
			'post_content'  => $body,
			'post_status'   => 'publish',
			'post_type'		=> 'form_entry'
		) );

		// Return JSON
		wp_send_json( array(
			'to' => $to,
			'subject' => "New OS form submission — " . $name,
			'body' => $body,
			'recaptcha' => true,
			'result' => $result,
			'mail_sent' => $mail_sent,
			'new_post' => $new_post
		) );

	}
	add_action("wp_ajax_os_form_process", "os_form_process");
	add_action("wp_ajax_nopriv_os_form_process", "os_form_process");

?>