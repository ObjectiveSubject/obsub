<?php

	// Forms

	function os_form_process() {

		check_ajax_referer( 'contact_form_nonce', 'nonce' );

		$subject 	= $_POST['contact_subject'];
		$name 		= sanitize_text_field( 	$_POST['contact_name'] 		);
		$company 	= sanitize_text_field( 	$_POST['contact_company'] 	);
		$email 		= sanitize_email( 		$_POST['contact_email'] 	);
		$message 	= esc_textarea( 		$_POST['contact_message'] 	);

		$to = get_option( 'admin_email' );
		$body = "Name: " . $name . " <".$email.">\n";
		$body .= "Company: " . $company . "\n";
		$body .= "Subject: " . $subject . "\n\n";
		$body .= $message;
		// $headers = array( "From: ".$name." <".$email.">" );

		$mail_sent = wp_mail( $to, "New OS form submission — " . $name, $body );

		$new_post = wp_insert_post( array(
			'post_title'    => $name .' — '. $subject,
			'post_content'  => $body,
			'post_status'   => 'publish',
			'post_type'		=> 'form_entry'
		) );

		wp_send_json( array(
			'to' => $to,
			'subject' => "New OS form submission — " . $name,
			'body' => $body,
			'mail_sent' => $mail_sent,
			'new_post' => $new_post
		) );
	}
	add_action("wp_ajax_os_form_process", "os_form_process");
	add_action("wp_ajax_nopriv_os_form_process", "os_form_process");

?>