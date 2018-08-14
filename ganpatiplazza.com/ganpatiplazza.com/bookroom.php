<?php

// THE BELOW LINE STATES THAT IF THE SUBMIT BUTTON
// WAS PUSHED, EXECUTE THE PHP CODE BELOW TO SEND THE 
// MAIL. IF THE BUTTON WAS NOT PRESSED, SKIP TO THE CODE
// BELOW THE "else" STATEMENT (WHICH SHOWS THE FORM INSTEAD).
if ( isset ( $_POST [ 'buttonPressed' ] )){

// REPLACE THE LINE BELOW WITH YOUR E-MAIL ADDRESS.
$to = 'admin@ganpatiplazza.com' ;


// NOT SUGGESTED TO CHANGE THESE VALUES

$headers = "From: " . strip_tags($_POST['from']) . "\r\n";
$headers .= "CC: ganpati.hotel@gmail.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$customerName= $_POST [ "customerName" ] ;
$customerEmail= $_POST [ "customerEmail" ] ;
$customerPhone= $_POST [ "customerPhonel" ] ;
$rommtype= $_POST [ "rommtype" ] ;
$checkindate= $_POST [ "checkindate" ] ;
$checkoutdate= $_POST [ "checkoutdate" ] ;
$adult= $_POST [ "adult" ] ;
$childs= $_POST [ "childs" ] ;
$rooms= $_POST [ "rooms" ] ;

$subject =  $customerName . ' :- Booking Details' ;

$message = '<html><body><h1> <u>Booking Details:</u></h1>';
$message .= '<h4> Please find the booking details for a customer below : </h4>';
$message .= '<table rules="all" style="border-color: blue;" cellpadding="10">';
$message .= "<tr style='background: blue;'><td><strong>Name:</strong> </td><td>" . Value . "</td></tr>";
$message .= "<tr background: #eee;><td><strong>Customer Name:</strong> </td><td>" . $customerName. "</td></tr>";
$message .= "<tr background: #eee;><td><strong>Customer Email:</strong> </td><td>" . $customerEmail. "</td></tr>";
$message .= "<tr background: #eee;><td><strong>Customer Phone:</strong> </td><td>" . $customerPhone. "</td></tr>";
$message .= "<tr background: #eee;><td><strong>Room Type:</strong> </td><td>" . $rommtype . "</td></tr>";
$message .= "<tr background: #eee;><td><strong>Check-in Date:</strong> </td><td>" . $checkindate . "</td></tr>";
$message .= "<tr background: #eee;><td><strong>Check-out Date:</strong> </td><td>" . $checkoutdate . "</td></tr>";
$message .= "<tr background: #eee;><td><strong>Adults:</strong> </td><td>" . $adult . "</td></tr>";
$message .= "<tr background: #eee;><td><strong>Childs:</strong> </td><td>" . $childs. "</td></tr>";
$message .= "<tr background: #eee;><td><strong>Room Required:</strong> </td><td>" . $rooms . "</td></tr>";
$message .= "</table>";
$message .= "<br><br>Thanks & Regards,<br>Booking Team</body></html>";

mail ( $to, $subject, $message, $headers ) ;

// Insert Details in DB
$dbhost = '198.71.225.62:3306';
$dbuser = 'hotelDBUser';
$dbpass = 'hotelDBUser@123';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$BookingId = rand() ;
echo $BookingId;
$date = date_default_timezone_set('Asia/Kolkata');
$today = date("F j, Y, g:i a T");

$sql = "INSERT INTO BookingDetails".
       "(BookingId,CustomerName, CustomerEmail, CustomerPhone, RoomType, CheckinDate, CheckOutDate, Adults, Childs, Rooms, BookingDate) ".
       "VALUES('$BookingId', '$customerName', '$customerEmail', '$customerPhone', '$rommtype', '$checkindate', '$checkoutdate', $adult, $childs, $rooms, '$today')";

mysql_select_db('ganpatiHotelDB');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}

mysql_close($conn);
header("Location: http://ganpatiplazza.com/bookingdetails.php?BookingId=$BookingId");
}
else{
?>
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
 	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
	<script src="resources/js/plugins.js"></script>
	<script src="resources/js/options.js"></script>
       <script src="resources/js/script.js"></script>
	<script	src="http://maps.google.com/maps/api/js?sensor=false"></script>

 	
</head>

<body>
			<section class=" sticky-bar grey">
					<div class="container">
						<div class="row">
							<div id='cssmenu'>
								<ul>
								   <li ><a href='home.html'>Home</a></li>
								   <li><a href='gallery.html'>Gallery</a></li>
								   <li><a href='rooms.html'>Rooms</a></li>
								   <li><a href='contacts.html'>Contacts</a></li>
                                                                    <li class='active'><a href='bookroom.php' >Book Room</a></li>
								</ul>
							</div>
						</div>
					</div>
			</section>
			<section>
				
				<div >
				    <ul class="clean-list">
				    		    		
				    		    		<li><a href="#"><img src="resources/images/slide-one.jpg" alt="slide" /></a></li>
				    		    </ul>
				</div>
			</section>
		<section class="box border-bottom book-box" data-stellar-background-ratio="0.5">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-7 widget"> </div>
						<div class="col-md-6 col-sm-10 widget">
							<h4 class="the-title text-center font-300"><i class="icon-141"></i> Make a Reservation</h4>
							<div class=" booking-form">
								<form method= "post" action= "<?php echo $_SERVER [ 'PHP_SELF' ] ;?>"  class="row">
                                                                     
									<table class="dark-blue" >
										<tr style="border:none">
											<td>
													<input name="customerName"  placeholder="Enter Your Name" required/>
											</td>
										</tr>
										<tr style="border:none">
											<td>
													<input name="customerEmail"  placeholder="Enter Your Email" required/>
											</td>
										</tr>
										<tr style="border:none">
											<td>
												<input name="customerPhonel"  placeholder="Enter Your Phone No" required/>
											</td>
										</tr>
										<tr style="border:none">
											<td>
													<input list="rommtype" name="rommtype"  placeholder="Room" required/>
                                                    <input type="hidden" name="from" value="ganpati.hotel@gmail.com"/>
											<datalist id="rommtype">
												  <option value="Deluxe Room"/>
												  <option value="Luxury Room"/>
												  <option value="Single Room"/>
											</datalist>
											</td>
										</tr>
										<tr style="border:none">
											<td>
												<input class="textbox-n" type="text" onfocus="(this.type='date')" name="checkindate"  placeholder="Check In" required />
											</td>
										</tr>
										<tr style="border:none">
											<td>
												<input  class="textbox-n" type="text" onfocus="(this.type='date')"  name="checkoutdate"  placeholder="Check Out" required />
											</td>
										</tr>
										<tr style="border:none">
											<td>
												<input type="number" name="adult"   placeholder="Adult" required min="1" max="25"/>
											</td>
										</tr>
										<tr style="border:none">
											<td>
												<input type="number"  name="childs" placeholder="Childs" required min="1" max="10"/>
											</td>
										</tr>
										<tr style="border:none">
											<td>
												<input type="number"  name="rooms" placeholder="Rooms" required min="1" max="10"/>
											</td>
										</tr>

									</table>
								
									<div class="col-md-8 col-sm-12 text-right">
										<button type="submit"  name= "buttonPressed" class="button-md green hover-dark-green soft-corners">Book Now</button>
									</div>
										
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>

		
		 <footer>
				<div class="bar">
				    <div class="bar-wrap">
				        <ul class="links">
				            <li><a href="home.html">Home</a></li>
				            <li><a href="gallery.html">Gallery</a></li>
				            <li><a href="rooms.html">Rooms</a></li>
				            <li><a href="contacts.html">Contact us</a></li>
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
							
			
</body>
</html>
<?php } ?>