<?php 

	//to make the database connection here!
	$connection=mysql_connect("50.62.209.154","theCompendiumV2","Mresearch123");
	if(!$connection) {
	    die("Error Establishing connection");
	}
	$db = mysql_select_db("theCompendiumV2_",$connection);
	if(!$db) {
	    die("Cannot select the database");
	}

	// for the localhost connection on dev machine
	// $connection=mysql_connect("localhost","root","root");
	// if(!$connection) {
	//     die("Error Establishing connection");
	// }
	// $db = mysql_select_db("compendium_",$connection);
	// if(!$db) {
	//     die("Cannot select the database");
	// }

?>