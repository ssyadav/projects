<div class="grid-row">
		
			<div class="grid-col grid-col-6">
				<!-- appointment -->
				<section class="widget widget-appointment">
					<div class="widget-title">Book an Appointment <hr style="color:#00aba5"></div>
					
					<form action="appointmentdetails" method="post">
						<fieldset>
							<div class="row">
								<input type="text" placeholder="Patient Full Name *" name="name" id="name">
								<i class="fa fa-user"></i>
								<span id="nameerrmsg" style="color:red"></span>
							</div>
							<div class="row">
								<input type="tel" placeholder="Phone Number  *" name="phoneNumber" id="phoneNumber" maxlength="10" autocomplete="off">
								<i class="fa fa-phone"></i>
								<span id="phoneerrmsg" style="color:red"></span>
							</div>
							<div class="row">
								<input type="email" placeholder="Email Address" name="email">
								<i class="fa fa-envelope"></i>
							</div>
							<div class="row">
								<input type="text" placeholder="Preferred Appointment Date  *" name="date" id="date">
								<i class="fa fa-calendar"></i>
								<span id="dateerrmsg" style="color:red"></span>
							</div>
							<div class="row">
								<input type="text" placeholder="Preferred Time  *" name="time" id="time">
								<i class="fa fa-calendar"></i>
								<span id="timeerrmsg" style="color:red"></span>
							</div>
							<div class="row">
								<textarea cols="30" rows="2" placeholder="Disease Description" name="message"></textarea>
								<i class="fa fa-align-left"></i>
							</div>
							<div class="row">
								<input name="captcha" id ="captcha" type="text" maxlength="4" autocomplete="off" placeholder="Enter image text *" autocomplete="off">
								<i class="fa fa-align-left"></i>
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
							<div class="clearfix captcha" style="text-align: right;">
								<button type="submit" class="button" value="Submit" id="confirmBTn" >Submit</button>
								
							</div>
						</fieldset>
					</form>
				</section>
				<!--/ appointment -->	
			</div>
			
		</div>