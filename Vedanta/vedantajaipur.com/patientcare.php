<?php 
 try {
	include 'include.php'; 
	include 'header.php'; 
	
?>	
	<section class="page-title">
		<div class="grid-row clearfix">
			<h1>Patient Care</h1>
			
			<nav class="bread-crumbs">
				<a href="index">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
				<a href="patientcare">Patient Care</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
				
			</nav>
		</div>
	</section>
	
	
	<!-- page content -->
			<main class="page-content">
				<div class="grid-row">
					<section id="news" class="widget news news-1">						
						<div class="grid">
							<div class="item">
								<div class="date">Admission Process</div>
								<div class="wrapper">
								<hr style="color:cyan">
									<div class="pic">
										<img src="images/4.jpg" style="height:245px">
										<div class="links">
											<ul>
												<li><a href="bookappointment" class="fa fa-plus"></a></li>										
											</ul>
										</div>
									</div>
								</div>
								<p>The front office staff at the reception will assist you during the admission process. They will generate a Patient Identification Number (PID) for the patient and all the medical records will be maintained and stored by the hospital for all future reference. They will also draw out an estimate and guide you for selecting the relevant category of room.</p>
								<p>In addition, you will be required to make an advance payment. The advance shall be adjusted against the final bill at the time of discharge. Those seeking the cashless route would have to visit the insurance desk / TPA desk for the hospitalisation of the patient. The staff will escort the patient to the allotted room/bed and make you feel comfortable.</p>
								<div class="cats"> <a href="bookappointment">Book Appointment</a><a href="bookappointment" class="more fa fa-long-arrow-right"></a></div>
							</div>
							
							<div class="item">
								<div class="date">Discharge process</div>
								<div class="wrapper">
								<hr style="color:cyan">
									<div class="pic">
										<img src="images/discharge.jpg" style="height:245px">
										<div class="links">
											<ul>
												<li><a href="bookappointment" class="fa fa-plus"></a></li>										
											</ul>
										</div>
									</div>
								</div>
								<p>Your nurse will assist you in the discharge process which may take few hours to complete the process. Once your final bill is generated, you are expected to clear your dues by paying cash or by a credit/debit card. The nurse will hand over your discharge summary and belongings (like thermometer, urinal bedpan, etc. - used during the course of your stay).</p>
								<p>She will also explain the medications you need to continue after your discharge and any other follow-up instructions. In case you need a medical ambulance to drop you at your home, then please inform your nurse and she will make the necessary arrangement.</p>
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

