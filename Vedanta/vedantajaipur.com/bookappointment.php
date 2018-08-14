<?php 
 try {
	include 'include.php'; 
	include 'header.php'; 
	
?>	
	<section class="page-title">
		<div class="grid-row clearfix">
			<h1>Book Appoinment</h1>
			
			<nav class="bread-crumbs">
				<a href="index">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
				<a href="#">Appointment</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
				
			</nav>
		</div>
	</section>
	
	<main class="page-content">
		
				
		<!-- Registration form - START -->
	<div class="grid-row" >
		
			<div class="col-lg-8" style="background:#f2f2f2;padding:1%;border-radius:7px">
				<div class="widget-title" style=" padding-top: 6px;border:2px solid #00aba5;border-radius:7px;color:#FFF;background:#00aba5;height:50px">Appointment Form <hr style="color:#00aba5"></div>
						<form action="appointmentdetails" method="post" style="padding-left:2%;padding-right:2%;padding-bottom:2%">
							<div class="col-lg-8">
								
								<div class="form-group">
									 <label for="name">Patient Full Name * :</label>
									<div class="input-group">
										
										<input type="text" class="form-control"  name="name" id="name" required>
										<span class="input-group-addon"><span class="fa fa-user"></span></span>
									</div>
									<div class="input-group">
										<span id="nameerrmsg" style="color:red"></span>
									</div>
								</div>	
								<div class="form-group">
									 <label for="phoneNumber">Phone Number * :</label>
									<div class="input-group">
										
										<input type="tel" class="form-control"  name="phoneNumber" id="phoneNumber" maxlength="10" autocomplete="off" required>
										<span class="input-group-addon"><span class="fa fa-phone"></span></span>
									</div>
									<div class="input-group">
										<span id="phoneerrmsg" style="color:red"></span>
									</div>
								</div>
															
								<div class="form-group">
									<label for="email">Email Address :</label>
									<div class="input-group">
										<input type="email" class="form-control"   name="email">
										<span class="input-group-addon"><span class="fa fa-envelope"></span></span>
										
									</div>
								</div>								
								
								<div class="form-group">
									<label for="date">Preferred Appointment Date * :</label>
									<div class="input-group">
										<input type="date" class="form-control"   name="date" id="date" required>
										<span class="input-group-addon"><span class="fa fa-calendar"></span></span>	
									</div>
									<div class="input-group">
										<span id="dateerrmsg" style="color:red"></span>
									</div>
								</div>	
								
								<div class="form-group">
									<label for="time">Preferred Time * :(9am-6pm)</label>
									<div class="input-group">
										<input type="time" class="form-control"  name="time" id="time" step="900" required>
										<span class="input-group-addon"><span class="fa fa-calendar"></span></span> 
									</div>
									<div class="input-group">
										<span id="timeerrmsg" style="color:red"></span>
									</div>
								</div>
								
								<div class="form-group">
									<label for="message">Disease Description :</label>
									<div class="input-group">
										<textarea name="message" id="message" class="form-control" rows="3"  ></textarea>
										<span class="input-group-addon"><span class="fa fa-align-left"></span></span>
										
									</div>
								</div>								
								
								<div class="form-group">
									<label >Captcha * :</label>
									<div class="input-group">
											
											<input name="captcha" id="captcha" type="text" maxlength="4" autocomplete="off" placeholder="Enter captcha image text *" autocomplete="off" required>
											<span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
									</div>
									<div class="input-group">
											<img src="authencaptca.php" />
											<span id="captchaerrmsg" style="color:red"></span>
											  <?php
																				
												if(!empty($_SESSION["inValidCaptcha"])) {
													$inValidCaptcha = $_SESSION["inValidCaptcha"];
													if(is_bool($inValidCaptcha) === true) {
											   ?>
													<span style="color:red">Invalid Image Text</span>
											<?php
												$_SESSION["inValidCaptcha"] = false;
												  }
												}
											   ?>
										
									</div>
								</div>
								<div class="form-group pull-right">
									<div class="input-group">
										<button type="submit" class="button" value="Submit" id="confirmBTn" >Submit</button>
									</div>
								</div>
								
							</div>
						</form>
      
			</div>
		</div>
<!-- Registration form - END -->
	</main>


<?php 
	include 'footer.php'; 
  } catch (Exception $e) {
		header("Location: error");
  }
?>

