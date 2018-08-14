<?php 
 try {
	include 'include.php'; 
	include 'header.php'; 
	
?>	
	<section class="page-title">
		<div class="grid-row clearfix">
			<h1>Contact us</h1>
			
			<nav class="bread-crumbs">
				<a href="index">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
				<a href="contactus">Contact us</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
				
			</nav>
		</div>
	</section>
	
	
	<!-- page content -->
			<main class="page-content">
				<div class="grid-row">
					<section id="news" class="widget news news-1">						
						<div class="grid">
							<div class="item">
								<div class="date">VEDANTA SUPERSPECIALITY HOSPITAL</div>
								<div class="wrapper">
								<hr style="color:cyan">
									<div class="pic">
										<div style="overflow: hidden; height: 100%; width: 100%;">
											<div id="gmap_canvas" style="height: 300px; width: 725px;"></div>
											<style>
												#gmap_canvas img {
													max-width: none !important;
													background: none !important
												}
											</style>
										</div>
										
									</div>
								</div>
								<p>
									
										<span style="font-size:24px"><b>Address :</b></span><br>
										<address> <br>B 2/21, Gandhi Path, <br>Vaishali Nagar, Jaipur, <br> Rajasthan<br> Pin.-302021</address>
										<div>
											<i class="fa fa-phone"></i> &nbsp;&nbsp; +(91)-141-3388734<br>
											<i class="fa fa-envelope"></i>&nbsp;&nbsp;  info@vedantajaipur.com
											
										</div>
										
									
								</p>
								
								<div class="cats"> <a href="bookappointment">Book Appointment</a><a href="bookappointment" class="more fa fa-long-arrow-right"></a></div>
							</div>
														
						</div>
					</section>
				</div>
			</main>
			<!--/ page content -->


<?php 
	include 'footer.php'; 
  } catch (Exception $e) {
		header("Location: error");
  }
?>
<script	src="http://maps.google.com/maps/api/js?sensor=false"></script>

<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:400px;width:400px;'><div id='gmap_canvas' style='height:400px;width:400px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='http://www.maps-generator.com/'>Click</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=c6d65c32b961f5734d3a69dec94354b4979e6807'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:11,center:new google.maps.LatLng(26.90583,75.74430200000006),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(26.90583,75.74430200000006)});infowindow = new google.maps.InfoWindow({content:'<strong>VEDANTA SUPERSPECIALITY HOSPITAL</strong><br>B 2/21, Gandhi Path, Vaishali Nagar<br>302021 Jaipur<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>	
