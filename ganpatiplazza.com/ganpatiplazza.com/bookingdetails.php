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
						<div class="col-md-15">
							<h4 class="the-title text-center font-300"><i class="icon-141"></i> Reservation Details</h4>
							<div class=" booking-form">
								<form method= "post" action= " bookroom.php"  class="row">
									<table class="dark-blue" >
										<tr>
											<td style=" border: none;width:100%" colspan="6">
                                                                                               Your Booking Id: <?php    echo  $_GET['BookingId'];    ?>
											</td>
                                                                                      
										</tr>

									</table>
																		
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
