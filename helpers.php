<?php

session_start();

// for all the helper functions required for the Compendium

//these are for the PHP Helper files
include 'headers/databaseConn.php';

// for mandrill mail sending API.
require_once 'mandrill/Mandrill.php'; 

// to check if the user email exists in the database already.
// Returns 1 if email exists. otherwise, 0 if email does NOT exists.
function CheckEmail($email) {
	$resp = "-1";
	try {
		$query = "select * from Users where UserEmail='$email'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			if(mysql_num_rows($rs) > 0) {
				$resp = "1";
			}
			else {
				$resp = "0";
			}
		}
		return $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}


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