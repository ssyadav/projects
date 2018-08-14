<?php 
 try {
	include 'include.php'; 
	include 'header.php'; 
	include 'slider.php'; 
	include 'tophome.php'; 
	include 'bottomhome.php'; 
	include 'footer.php'; 
  } catch (Exception $e) {
		header("Location: error");
  }
?>

