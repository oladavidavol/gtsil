<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$mailFrom = $_POST['email'];
	$tel = $_POST['telephone'];
	$message = $_POST['message'];
	
	$mailTo = "oladavidavol@yahoo.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have a mail from ",$name.".\n\n".$message;

	mail($mailTo, $txt, $headers);
	header("Location: mail1.php?mailsend");
}