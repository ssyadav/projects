<?php 
 try {
	include 'include.php'; 
	include 'header.php'; 
	
?>	
	<section class="page-title">
		<div class="grid-row clearfix">
			<h1>About</h1>
			
			<nav class="bread-crumbs">
				<a href="index">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
				<a href="about">about</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
				
			</nav>
		</div>
	</section>
	
	
	<!-- page content -->
			<main class="page-content">
				<div class="grid-row">
					<section id="news" class="widget news news-1">						
						<div class="grid">
							<div class="item">
								<div class="date">About Us</div>
								<div class="wrapper">
								<hr style="color:cyan">
									<div class="pic">
										<img src="images/1.jpg" style="height:680px">
										<div class="links">
											<ul>
												<li><a href="#" class="fa fa-plus"></a></li>										
											</ul>
										</div>
									</div>
								</div>
								<p>Vedanta Superspeciality is a leading integrated healthcare delivery service provider in Jaipur. The healthcare verticals of the company primarily comprise hospitals, diagnostics and day care specialty facilities.</p>
								<p>
									<section class="widget widget-sevices our-service-custom">
										<div class="widget-title">Our Medical Services</div>
										<ul>
											<li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Orthopaedics</a></li>
											<li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Gastrology</a></li>
											<li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>General & Laparoscopic Surgery</a></li>
											<li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Ophthalmology</a></li>
											<li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>General Medicine</a></li>
											<li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Urology</a></li>
											<li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Plastic Surgery</a></li>
											<li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Neuro Surgery</a></li>
											<li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Eyes Check ups</a></li>
											<li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Health Check ups</a></li>
										</ul>
									</section>
								<p>
								<div class="cats"> <a href="#">Book Appointment</a><a href="#" class="more fa fa-long-arrow-right"></a></div>
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



