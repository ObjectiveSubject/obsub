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

		wp_mail( $to, $subject, $body );
		// if ( wp_mail( $to, $subject, $body ) ) {
		// 	echo '<div>';
		// 	echo '<p>Thanks for contacting me, expect a response soon.</p>';
		// 	echo '</div>';
		// } else {
		// 	echo 'An unexpected error occurred';
		// }
	}
	add_action("wp_ajax_os_form", "os_form_process");

	//use this version for if you want the callback to work for users who are not logged in
	add_action("wp_ajax_nopriv_os_form", "os_form_process");

?>