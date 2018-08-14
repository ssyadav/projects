<?php 
 try {
	include 'include.php'; 
	include 'header.php'; 
	
?>	
	<section class="page-title">
		<div class="grid-row clearfix">
			<h1>Gallery</h1>
			
			<nav class="bread-crumbs">
				<a href="index.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
				<a href="photo-gallery.html">Gallery</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
				
			</nav>
		</div>
	</section>
	
	
	<!-- page content -->
			<main class="page-content">
				<div class="grid-row">
					<section id="news" class="widget news news-1">						
						<div class="grid">
							<div class="item">
								<h3 class="widget-title"><a href="#">Admission Process</a></h3>
								<div class="date">Admission Process</div>
								<div class="date">20 JAN 2014<i class="fa fa-comment"><span>3</span></i></div>
								<div class="wrapper">
									<div class="pic">
										<img src="images/4.jpg" style="height:245px">
										<div class="links">
											<ul>
												<li><a href="#" class="fa fa-plus"></a></li>										
											</ul>
										</div>
									</div>
								</div>
								<p>The front office staff at the reception will assist you during the admission process. They will generate a Patient Identification Number (PID) for the patient and all the medical records will be maintained and stored by the hospital for all future reference. They will also draw out an estimate and guide you for selecting the relevant category of room.</p>
								<p>In addition, you will be required to make an advance payment. The advance shall be adjusted against the final bill at the time of discharge. Those seeking the cashless route would have to visit the insurance desk / TPA desk for the hospitalisation of the patient. The staff will escort the patient to the allotted room/bed and make you feel comfortable.</p>
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

