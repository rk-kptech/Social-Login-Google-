<?php

require_once "config.php";


if(isset($_SESSION['accesstoken']))
{
	$gClient->setAccessToken($_SESSION['accesstoken']);
}
else if (isset($_GET['code'])){

	$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
	$_SESSION['accesstoken'] = $token;
}else
{
	header("location: login.php");
	exit();
}

	$oAuth = new Google_Service_Oauth2($gClient);
	$userData = $oAuth->userinfo_v2_me->get();

	$_SESSION['email'] = $userData['email'];
	$_SESSION['gender'] = $userData['gender'];
	$_SESSION['picture'] = $userData['picture'];
	$_SESSION['familyName'] = $userData['familyName'];
	$_SESSION['givenName'] = $userData['givenName'];

	header("location: index.php");
	exit();

?>