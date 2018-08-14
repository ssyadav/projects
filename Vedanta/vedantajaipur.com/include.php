<?php
	function is_session_started() {
		if ( php_sapi_name() !== 'cli' ) {
			if ( version_compare(phpversion(), '5.4.0', '>=') ) {
				return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
			} else {
				return session_id() === '' ? FALSE : TRUE;
			}
		}
		return FALSE;
	}
	
	// Starting Session
	if ( is_session_started() === FALSE ){
		session_start();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content=""/>
    <meta name="keywords" content=""/>   
    <meta name="google-site-verification" content="" />
    <title>Vedanta Superspeciality Hospital</title>
	
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
   	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/slider.css">
	<link rel="stylesheet" type="text/css" href="css/fullwidth/skin.css">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/carousel.css">
	<link rel="stylesheet" type="text/css" href="css/fancybox.css">
	<link rel="stylesheet" type="text/css" href="css/vedanta.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/blue.css"> -->
	<link rel="stylesheet" type="text/css" href="css/cyan.css">

</head>
<body>
	<div class="page page-boxed">	