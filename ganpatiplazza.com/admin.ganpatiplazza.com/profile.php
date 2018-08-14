<?php
include('session.php');
include('bookingresult.php'); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ganpati Plaza Hotel</title>
	<meta name="description" content="Great theme for creative people">
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Responsive helper -->
	

	<!-- Apple devices -->
	<link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-apple.png" /> <!-- 152x152 -->
	<link rel="icon" href="img/favicon/favicon.png"> <!-- 32x32 or 64x64 -->

	<!-- For IE -->
	<!--[if IE]><link rel="shortcut icon" href="img/favicon/favicon.ico"><![endif]--> <!-- 16x16 -->

	<!-- For Mobile Windows -->
	<meta name="msapplication-TileColor" content="#D83434">
	<meta name="msapplication-TileImage" content="img/favicon/favicon.png"> <!-- 32x32 or 64x64 -->
	
	<!-- Fonts-->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

	<!-- <link rel="stylesheet" href="cache/compress.php"> -->

	<link rel="stylesheet" href="resources/css/bootstrap.css">
	<link rel="stylesheet" href="resources/css/bootstrap-responsive.css">
    <link rel="stylesheet" href="resources/css/screen.css">
    <link rel="stylesheet" href="resources/css/styles.css">

 	<script src="resources/js/modernizr.js"></script>
 	

	<script src="resources/js/plugins.js"></script>
	<script src="resources/js/options.js"></script>
       <script src="resources/js/script.js"></script>
 	<script	src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <link href="resources/css/slides.css" rel="stylesheet">


</head>
<body>
			<section class=" sticky-bar grey">
					<div class="container">
						<div class="row">
							<div id='cssmenu'>
								<ul>
								   <li class='active'><a href='#'>Welcome : <?php echo $login_session; ?></a></li>
                                                                   <li ><a href='http://ganpatiplazza.com'>View Site</a></li>
                                                                  <li ><a href="logout.php">Log Out</a></li>
								</ul>
							</div>
						</div>
					</div>
<hr>
			</section>


<section class="box" data-stellar-background-ratio="0.5" style="padding-top:3px">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<b><i><u>Search Form</u> :-</b></i>

							<div class=" booking-form">
								<form method= "post" action= ""  class="row">
									<table class="dark-blue" >
										<tr>
											<td style=" border: none;width:50%">
                                                                                               Select Parameter:
											
											<input list="selectparameter" name="parameter"  placeholder="Select" required/>
                                                                                         
											<datalist id="selectparameter">
												  <option value="BookingId"/>
												  <option value="CustomerName"/>
												  <option value="CustomerEmail"/>
												  <option value="CustomerPhone"/>
											
											</datalist>
											</td>
                                                                                      <td style=" border: none;width:50%">
                                                                                               Enter Value:
										
											<input name="paramvalue"  placeholder="Enter Value" required/>
											</td>
											
										</tr>
									
									</table>
									
									<div class="col-md-7 col-sm-12 text-right">
										<button type="submit"  name= "submit" class="button-md green hover-dark-green soft-corners">Search</button>
									</div>
										
								</form>
							</div>
<hr>
						</div>
					</div>
				</div>
			</section>
<?php 
if (count($row) >0) {
?>
                      <section class="box  book-box" data-stellar-background-ratio="0.5">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<b><i><u>Search Result :-</u></b></i>
                                                         <div class=" booking-form">
								<table class="dark-blue" >
										<tr>
											<td style=" border: none;width:50%">
                                                                                               Customer Name: <br>
											      <?php echo $row['CustomerName']; ?>
											
											</td>
                                                                                      <td style=" border: none;width:50%">
                                                                                               Customer Email: <br>
									                       <?php echo $row['CustomerEmail']; ?>
											</td>
											
										</tr>
										<tr>
											<td style=" border: none;width:50%">
                                                                                               Customer Phone No: <br>
											      <?php echo $row['CustomerPhone']; ?>
											
											</td>
                                                                                      <td style=" border: none;width:50%">
                                                                                               Room Type: <br>
									                       <?php echo $row['RoomType']; ?>
											</td>
											
										</tr>
										<tr>
											<td style=" border: none;width:50%">
                                                                                               Check In: <br>
											      <?php echo  $row['CheckinDate']; ?>
											
											</td>
                                                                                      <td style=" border: none;width:50%">
                                                                                               Check Out: <br>
									                       <?php echo  $row['CheckOutDate']; ?>
											</td>
											
										</tr>
										<tr>
											<td style=" border: none;width:50%">
                                                                                               Adults: <br>
											      <?php echo $row['Adults']; ?>
											
											</td>
                                                                                      <td style=" border: none;width:50%">
                                                                                               Childs: <br>
									                       <?php echo  $row['Childs']; ?>
											</td>
											
										</tr>
										<tr>
											<td style=" border: none;width:50%">
                                                                                               Rooms Booked: <br>
											      <?php echo $row['Rooms']; ?>
											
											</td>
                                                                                      <td style=" border: none;width:50%">
                                                                                               Booking Date: <br>
									                       <?php echo  $row['BookingDate']; ?>
											</td>
											
										</tr>
									
									</table>
							</div>
	                                       </div>
					</div>
				</div>
			</section>
<?php 
}
?>

<footer>
				<div class="bar">
				    <div class="bar-wrap">
				        <ul class="links">
				            <li><a href="http://ganpatiplazza.com/home.html">Home</a></li>
				            <li><a href="http://ganpatiplazza.com/gallery.html">Gallery</a></li>
				            <li><a href="http://ganpatiplazza.com/rooms.html">Rooms</a></li>
				            <li><a href="http://ganpatiplazza.com/contacts.html">Contact us</a></li>                                          
				        </ul>
				
				        <div class="social">
				            <a href="#" class="fb">
				                <span data-icon="f" class="icon"></span>
				                <span class="info">
				                    <span class="follow"><a
														href="https://www.facebook.com/pages/Ganpati-Hotel/408948562612465"
														target="_blank"><img
															src="resources/images/facebook.png"
															width=20 height=20> <span></span>Follow us Facebook</a></span>
				                </span>
				            </a>
				
				            <a href="#" class="tw">
				                <span data-icon="T" class="icon"></span>
				                <span class="info">
				                    <span class="follow"><a
														href="https://twitter.com/GanpatiHotel" target="_blank"><img
															src="resources/images/twitter.png"
															width=20 height=20> <span></span>Follow us Twitter</a></span>
				                </span>
				            </a>
				
				            <a href="#" class="rss">
				                <span data-icon="R" class="icon"></span>
				                <span class="info">
				                    <span class="follow">
				                    	<a
														href="map.html" target="_blank"><i class="text-white"></i> &nbsp;<img
															src="resources/images/Map-Marker-Marker-Inside-Pink-icon.png"
															width=22 height=22>Find us @ Google Map</a>
				                    </span>
				                </span>
				            </a>
				        </div>
				        <div class="clear"></div>
				        <div class="copyright">&copy;  2015-16 All Rights Reserved</div>
				    </div>
				</div>
			</footer>
			<script type="text/javascript">
					function init_map() {
						var myOptions = {
							zoom : 13,
							center : new google.maps.LatLng(27.8928096, 76.28077180000002),
							mapTypeId : google.maps.MapTypeId.ROADMAP
						};
						map = new google.maps.Map(document.getElementById("gmap_canvas"),
								myOptions);
						marker = new google.maps.Marker({
							map : map,
							position : new google.maps.LatLng(27.8928096, 76.28077180000002)
						});
						infowindow = new google.maps.InfoWindow(
								{
									content : "<b>Ganpati Plaza</b><br/>Opp Behror Court and Tehsil<br/>301701 Behror"
								});
						google.maps.event.addListener(marker, "click", function() {
							infowindow.open(map, marker);
						});
						infowindow.open(map, marker);
					}
					google.maps.event.addDomListener(window, 'load', init_map);
				</script>	

	<!--Start of Tawk.to Script-->
<script type="text/javascript">
var $_Tawk_API={},$_Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5549dfe9c276366758eb70e0/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>