<?php 
	
// for all the AJAX functions to be used.
//these are for the PHP Helper files
include('headers/databaseConn.php');
include('helpers.php');

if(isset($_GET["payload"]) && $_GET["payload"] == "macroeconomic") {
	GetMacroeconomicThumbnailData();
}
else if(isset($_GET["payload"]) && $_GET["payload"] == "financial") {
	GetFinancialThumbnailData();
}
else if(isset($_GET["payload"]) && $_GET["payload"] == "sector") {
	GetSectorBitesThumbnailData();
}
else if(isset($_GET["payload"]) && $_GET["payload"] == "startup") {
	GetStartupsThumbnailData();
}
else if(isset($_GET["no"]) && $_GET["no"] == "1") {
	SubscribeUser($_GET["email"], $_GET["name"]);
}
else if(isset($_GET["no"]) && $_GET["no"] == "2") {
	RegisterUser($_GET["userData"], $_GET["noClicks"]);
}

// to register the user based on the response given by fb/google.
function RegisterUser($userData, $noClicks) {
	$resp = "-1";
	try {
		
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// to subscribe the user to the database list and send email to the user.
function SubscribeUser($email, $name) {
	$resp = "-1";
	$mail = "-1";
	try {
		$query = "insert into Subscribe(UserName, UserEmail) values('$name', '$email');";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp = "-1";
		}
		else {
			$resp = "1";
			$mail = SendSubscribeMail($email, $name);
		}
		echo $resp . " ~~ " . $mail;
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp . " ~~ " . $mail;
	}
}

// to get the Startups data from the backend database.
function GetStartupsThumbnailData() {
	$resp = array();
	try {
		$query = "select * from Startups";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp[0] = "-1";
		}
		else {
			$resp = "";
			if(mysql_num_rows($rs) > 0) {
				$i = 0;
				while ($res = mysql_fetch_array($rs)) {
					$resp[$i] = "<div class='thumbnail'><a href='#' class='thumbnail-link' data-name='" . $res["SuName"] . "' data-url='" . $res["SuUrl"] . "' ><img class='thumbnail-img' src='" . str_replace('../', '', $res["SuImg"]) . "' /><h3 class='text-center'>" . $res["SuName"] . "</h3></a><p class='text-center'>" . $res["SuDesc"] . "</p></div>";
					$i++;
				}
			}	
			else {	  // no data here.
				$resp[0] = "-2";   
			}
		}
		header('Content-Type: application/json');
		echo json_encode($resp);
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// to get the Sector Bites data from the backend database.
function GetSectorBitesThumbnailData() {
	$resp = array();
	try {
		$query = "select * from SectorBites";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp[0] = "-1";
		}
		else {
			$resp = "";
			if(mysql_num_rows($rs) > 0) {
				$i = 0;
				while ($res = mysql_fetch_array($rs)) {
					$resp[$i] = "<div class='thumbnail'><a href='#' class='thumbnail-link' data-name='" . $res["SbName"] . "' data-url='" . $res["SbUrl"] . "' ><img class='thumbnail-img' src='" . str_replace('../', '', $res["SbImg"]) . "' /><h3 class='text-center'>" . $res["SbName"] . "</h3></a><p class='text-center'>" . $res["SbDesc"] . "</p></div>";
					$i++;
				}
			}	
			else {	  // no data here.
				$resp[0] = "-2";   
			}
		}
		header('Content-Type: application/json');
		echo json_encode($resp);
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// to get the MacroEconomics data from the backend database.
function GetMacroeconomicThumbnailData() {
	$resp = array();
	try {
		$query = "select * from MacroEconomics";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp[0] = "-1";
		}
		else {
			$resp = "";
			if(mysql_num_rows($rs) > 0) {
				$i = 0;
				while ($res = mysql_fetch_array($rs)) {
					$resp[$i] = "<div class='thumbnail'><a href='#' class='thumbnail-link' data-name='" . $res["MeName"] . "' data-url='" . $res["MeUrl"] . "' ><img class='thumbnail-img' src='" . str_replace('../', '', $res["MeImg"]) . "' /><h3 class='text-center'>" . $res["MeName"] . "</h3></a><p class='text-center'>" . $res["MeDesc"] . "</p></div>";
					$i++;
				}
			}	
			else {	  // no data here.
				$resp[0] = "-2";   
			}
		}
		header('Content-Type: application/json');
		echo json_encode($resp);
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

// to get the financial deals data from the backend database.
function GetFinancialThumbnailData() {
	$resp = array();
	try {
		$query = "select * from FinancialDeals";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp[0] = "-1";
		}
		else {
			$resp = "";
			if(mysql_num_rows($rs) > 0) {
				$i = 0;
				while ($res = mysql_fetch_array($rs)) {
					$resp[$i] = "<div class='thumbnail'><a href='#' class='thumbnail-link' data-name='" . $res["FinName"] . "' data-url='" . $res["FinUrl"] . "' ><img class='thumbnail-img' src='" . str_replace('../', '', $res["FinImg"]) . "' /><h3 class='text-center'>" . $res["FinName"] . "</h3></a><p class='text-center'>" . $res["FinDesc"] . "</p></div>";
					$i++;
				}
			}	
			else {	  // no data here.
				$resp[0] = "-2";   
			}
		}
		header('Content-Type: application/json');
		echo json_encode($resp);
	}
	catch(Exception $e) {
		$resp = "-1";
		echo $resp;
	}
}

?>