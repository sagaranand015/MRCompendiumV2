<?php

// for all the helper functions required for the Compendium

//these are for the PHP Helper files
include 'headers/databaseConn.php';

// for mandrill mail sending API.
require_once 'mandrill/Mandrill.php'; 

// to send the subscribe mail
function SendSubscribeMail($email, $name) {
	$resp = "-1";
	try {
		$subject = "Subscription Activated";
		$msg = "Dear " . $name . ",<br /><br />";
		$msg .= "This is the subscribe mail content. We need more content here.<br /><br />";

		$msg .= "Please contact the Mentored-Research's Compendium team for any queries.<br />";
		$msg .= "M-R Compendium";
		$msg .= "info@mentored-research.com<br /><br />";

		//write the mail sending if else condition here.
		$res = SendMessage($email, $name, "info@mentored-research.com", "Mentored-Research", $subject, $msg);
		return $res;		
	}
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}
		
// to send the mail to the concerned user through mandrill API.(main sending mail function)
function SendMessage($to, $toName, $from, $fromName, $subject, $message) {
	try {
		$mandrill = new Mandrill('J99JDcmNNMQLw32QJGDadQ');
		$message = array(
	        'html' => $message,
	        'subject' => $subject,
	        'from_email' => $from,
	        'from_name' => $fromName,
	        'to' => array(
	            array(
	                'email' => $to,
	                'name' => $toName,
	                'type' => 'to'
	            )
	        )
	    );
	    $async = false;
	    $ip_pool = 'Main Pool';
	    $send_at = null;
	    $result = $mandrill->messages->send($message, $async, $ip_pool, $send_at);
		return $result;
	} 
	catch(Mandrill_Error $e) {
		$res = "-1";
		return $res;
	}
}


?>