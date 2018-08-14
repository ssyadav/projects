<?php 
 try {
	include 'include.php'; 
	if(isset($_POST["captcha"]) && $_POST["captcha"] != "" && $_SESSION["code"] == $_POST["captcha"]) {
		$_SESSION["inValidCaptcha"] = false;
		include 'header.php'; 
	
?>	
	<section class="page-title">
		<div class="grid-row clearfix">
			<h1>Appoinment Details</h1>
			
			<nav class="bread-crumbs">
				<a href="index">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
				<a href="#">Appointment Details</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
				
			</nav>
		</div>
	</section>
	
	
	<!-- page content -->
			<main class="page-content">
				<div class="grid-row">
					<section id="news" class="widget news news-1">						
						<div class="grid">
							<div class="item">
								<div class="date">Appointment Details</div>
								
								<p style="padding-left:10px">
									<?php 		
										if(!empty($_POST['phoneNumber'])) {
											$appt_id = 0;
											$name = $_POST['name'];
											$phNo = $_POST['phoneNumber'];
											$email = $_POST['email'];
											$date = $_POST['date'];
											$time = $_POST['time'];
											$message = htmlspecialchars($_POST['message']);
											
											require_once("databaseom.php");	
											mysqli_query($connection,'SET character_set_results=utf8');
											$insertSql = "INSERT INTO appointment (patient_name,phone_number,email,appt_date,appt_time,message) VALUES ('$name','$phNo','$email','$date','$time','$message')";
											
											if (!empty($insertSql)) {
												mysqli_query($connection, $insertSql);
												$appt_id = mysqli_insert_id($connection);
											}	
									?>		
									Appointment ID: <b><?php echo $appt_id; ?></b> <br>
									Patient Name:  <b><?php echo $name; ?></b><br>
									Phone Number:  <b><?php echo $phNo; ?></b><br>
									Email Address: <b><?php echo $email; ?></b><br>
									Appointment Date: <b><?php echo $date; ?></b><br>
									Appointment Time: <b><?php echo $time; ?></b><br>
								
								</p>
								
								<?php
										$message = "<html><body> <div style='background:#00aba5;width:800px;'><h3 style='font-size:1.8em;font-weight:normal;color:#FF7800;background:#00aba5;height: 25px;padding-top:5px;font-family:Verdana;padding-left:5px'><img src='http://vedantajaipur.com/images/logo1.jpg' style='width:139px; height:50px'></img><small style='color:white;font-size:0.4em;'>Appointment Details</small></h3>";					
										$message .= "<div style='background:white;width:794px;border: 3px solid #00aba5;'><table style='width:780px'><tr><td style='border:none;width:150px;padding-bottom:20px;font-family:Verdana;padding-top:15px;padding-left:20px'>Dear Customer,</td>";
										$message .= "</tr><tr><td style='border:none;width:150px;padding-bottom:20px;font-family:Verdana;padding-top:15px;padding-left:20px'>Thank you for placing appointment with Vedanta SuperSpeciality Hospital. Please find below your appointment details.</td></tr></table >";				
										$message .= "<div style='background:white;padding-left:20px'><table rules='all' style='padding:20px;width:780px' cellpadding='10'>";
										$message .= "<tr style='background: #ff7800;color:#00aba5'><td>Appointment ID:</td> <td>" .$appt_id. "</td> </tr>";
										$message .= "<tr style='background: #ff7800;color:#00aba5'><td>Patient Name:</td> <td>" .$name. "</td> </tr>";
										$message .= "<tr style='background: #ff7800;color:#00aba5'><td>Email Address:</td> <td>" .$email. "</td> </tr>";
										$message .= "<tr style='background: #ff7800;color:#00aba5'><td>Phone Number:</td> <td>" .$phNo. "</td> </tr>";
										$message .= "<tr style='background: #ff7800;color:#00aba5'><td>Appointment Date:</td> <td>" .$date. "</td> </tr>";
										$message .= "<tr style='background: #ff7800;color:#00aba5'><td>Appointment Time:</td> <td>" .$time. "</td> </tr></table> <br><br>";
										
									
										$to = 'ssyadav.in@gmail.com,'.$email ;
										$headers = "From: ssyadav.in@gmail.com\r\n";
										$headers .= "CC: ssyadav.in@gmail.com\r\n";
										$headers .= "MIME-Version: 1.0\r\n";
										$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
																				
										$message .= "<br><br>Thanks You. <br><br><br>Thanks & Regards,<br>vedantajaipur.com <br>For help <br> call us at <br> +(91)-141-3388734 <br><br><br><br></div></div></div><br><br></body></html>";				
					
										$subject =  $appt_id. ' : Vedanta Superspecialty Hospital Appointment Details';
										$mailed = mail ( $to, $subject, $message, $headers ) ;
									  }
									}
								?>
								<div class="cats"> <a href="#">Please be available before 15 min. from appointment time</a></div>
								
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