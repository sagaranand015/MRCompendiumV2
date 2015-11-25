<?php 

session_start();

// for all the ajax functions for logging to the admin portal for comepndium
//these are for the PHP Helper files
include('databaseConn.php');
include('helpers.php');

if(isset($_GET["no"]) && $_GET["no"] == "1") {
	AdminLogin($_GET["email"], $_GET["pwd"]);
}
if(isset($_GET["no"]) && $_GET["no"] == "2") {
	session_unset();
	session_destroy();
}

// for the admin login function
function AdminLogin($email, $pwd) {
	$resp = "-1";
	try {
		$query = "select * from Admin where AdminEmail='$email'";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			if(mysql_num_rows($rs) > 0) {   // if more than 0 admins of given email address exists.
				while ($res = mysql_fetch_array($rs)) {
					$hash = checkhashSSHA($res["AdminSalt"], $pwd);
					if($res["AdminPwd"] == $hash) {
						$_SESSION['user-id'] = $res["AdminId"];
						if(!isset($_SESSION['user-id']) && ($_SESSION['user-id'] != "" || $_SESSION['user-id'] != "-1")) {
							$resp = "-2";
						} else {
							$resp = "1";
						}
					}
					else {
						$resp = "-1";
					}
				}
			}
		}
		echo $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

?>