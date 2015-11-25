<?php 

// for uploading the complete topic for MacroEconomics.
include('helpers.php');

$meName = $_POST["txt-su-name"];
$meDesc = $_POST["txt-su-desc"];

if(isset($_FILES["file-su-img"]) && $_FILES["file-su-img"]["error"] == UPLOAD_ERR_OK && isset($_FILES["file-su-pdf"]) && $_FILES["file-su-pdf"]["error"] == UPLOAD_ERR_OK) {

	// set the upload directory here
	$UploadDirectoryImg	= '../content-upload/StartupsImg/'; //specify upload directory ends with / (slash)

	$UploadDirectoryPdf	= '../content-upload/StartupsPdf/'; //specify upload directory ends with / (slash)

	//Is file size is less than allowed size.
	if ($_FILES["file-su-img"]["size"] > 5242880) {
		die("Img File size is too big!");
	}

	//Is file size is less than allowed size.
	if ($_FILES["file-su-pdf"]["size"] > 5242880) {
		die("Pdf File size is too big!");
	}

	$FileNameImg          	= strtolower($_FILES['file-su-img']['name']);
	$FileExtImg           	= substr($FileNameImg, strrpos($FileNameImg, '.')); //get file extention

	$FileNamePdf          	= strtolower($_FILES['file-su-pdf']['name']);
	$FileExtPdf           	= substr($FileNamePdf, strrpos($FileNamePdf, '.')); //get file extention

	$date 					= date_create();
	$timestamp 				= date_timestamp_get($date);

	$NewFileNameImg 		= $timestamp . "_" . $FileNameImg;  //.$File_Ext; //new file name
	$NewFileNamePdf 		= $timestamp . "_" . $FileNamePdf;  //.$File_Ext; //new file name

	// now, uploading the file to the server here.
	if(move_uploaded_file($_FILES['file-su-img']['tmp_name'], $UploadDirectoryImg.$NewFileNameImg )) {   // img upload successful.
		if(move_uploaded_file($_FILES['file-su-pdf']['tmp_name'], $UploadDirectoryPdf.$NewFileNamePdf)) {   // pdf upload success.
			$result = RegisterTopic($meName, $meDesc, $UploadDirectoryImg.$NewFileNameImg, $UploadDirectoryPdf.$NewFileNamePdf, "Startups");
			if($result[0] == "-1") {
				// header("Location: index.php?me=-1");
				echo "An error was encountered while securing the data in the database. Please go back and try again.";
			}
			else {
				header("Location: index.php?su=1");	
			}
		}
		else {
			// header("Location: index.php?me=-2");   // pdf upload unsuccessful.
			echo "An error was encountered while uploading the content PDF for this topic. Please go back and try again.";
		}

	}	
	else {
		// header("Location: index.php?me=-3");   // img upload unsuccessful.
		echo "An error was encountered while uploading the content thumbnail image for this topic. Please go back and try again.";
	}

}   // end of main if condition
else {
	// header("Location: index.php?me=-4");   // sizw limits exceeded.
	echo "You have exceeded the size limits of the uploaded files. Please go back and try again.";
}


?>