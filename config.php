<?php

	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("your project client id");
	$gClient->setClientSecret("your project secret id");
	/** to know how to create project id and secret id visit following link below
	https://www.youtube.com/watch?v=FcjS_M5IiFM
	**/
	$gClient->setApplicationName("G+ Login Panel");
	$gClient->setRedirectUri("your callback file name which is also explained in above video link..");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

?>