<?php 

//these are for the PHP Helper files
include('databaseConn.php');

/**
 * Decrypting password
 * @param salt, password
 * returns hash string
 */
function checkhashSSHA($salt, $password) {
    $hash = base64_encode(sha1($password . $salt, true) . $salt);
    return $hash;
}

// to get the data from the table, based on id.
function GetTopicData($id, $table, $prefix) {
	$resp = array();
	try {
		$query = "select * from " . $table . " where " . $prefix . "Id='$id';";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp[0] = "-1";
		}
		else {
			$resp = mysql_fetch_array($rs);
		}
		return $resp;
	}
	catch(Exception $e) {
		$resp = "-1";
		return $resp;
	}
}

// to register the topic to the given table.
function RegisterTopic($name, $desc, $img, $pdf, $table) {
	$resp = array();
	$prefix = "";
	if($table == "MacroEconomics") {
		$prefix = "Me";
	}
	else if($table == "FinancialDeals") {
		$prefix = "Fin";
	}
	else if($table == "SectorBites") {
		$prefix = "Sb";
	}
	else if($table == "Startups") {
		$prefix = "Su";
	}
	try {
		$query = "insert into " . $table . " (" . $prefix . "Name, " . $prefix . "Desc, " . $prefix . "Img, " . $prefix . "Url) values('$name', '$desc', '$img', '$pdf');";
		$rs = mysql_query($query);
		if(!$rs) {
			$resp[0] = "-1";
		}
		else {
			$id = mysql_insert_id();
			$resp = GetTopicData($id, $table, $prefix);
		}
		return $resp;
	}
	catch(Exception $e) {
		$resp[0] = "-1";
		return $resp;
	}
}

?>