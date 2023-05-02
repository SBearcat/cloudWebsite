<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

$ownerid = $user_data['user_id'];

$statusMsg = '';

$fileName = basename($_FILES["fileToUpload"]["name"]);
$fileType = pathinfo($fileName, PATHINFO_EXTENSION);
$file = $_FILES['fileToUpload']['tmp_name'];

if(!empty($_FILES["fileToUpload"]["name"]))
{
	$allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf', 'txt', 'css', 'py', 'java', 'html');
	if(in_array($fileType, $allowTypes))
	{

		$query = ("INSERT into filestorage (users, filestore, namefile, upload_date) VALUES ('$ownerid','$file','$fileName', NOW())");
		$insert = mysqli_query($con, $query);
			if($insert)
			{
				$statusMsg = "The file ".$fileName. " has been uploaded successfully.";
				sleep(2);
				header("Location: index.php");
				die;
			}
			else
			{
				$statusMsg = "File upload failed, please try again";
				header("Location: index.php");
			}

	}
	else
	{
		$statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, PDF, TXT, CSS, PY, JAVA, & HTML files are allowed';
		header("Location: index.php");
	}
}
else
{
	$statusMsg = "Please select a file to upload";
	header("Location: index.php");
}

echo $statusMsg;
?>