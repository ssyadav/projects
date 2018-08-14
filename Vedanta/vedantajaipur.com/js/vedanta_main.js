
function changeClass(name) {
	//alert(name);
	//document.getElementById(name).className = "active";
	
	//document.getElementById(name).classList.add('active');
	
}

Date.prototype.defaultView=function(){
		var dd=this.getDate();
		if(dd<10)dd='0'+dd;
		var mm=this.getMonth()+1;
		if(mm<10)mm='0'+mm;
		var yyyy=this.getFullYear();
		//return String(mm+"\/"+dd+"\/"+yyyy)
		return String(yyyy+"-"+ mm +"-"+dd)
}

$(document).ready(
		function() {
		
				
			$("#confirmBTn").click(
					function(e) {
						// this.value = this.value.replace(/[^1-9\.]/g,'');

						var name = $("#name").val();
						var ph = $("#phoneNumber").val();
						var date = $("#date").val();
						var time = $("#time").val();
						var captcha = $("#captcha").val();
						
						var selecteddate = new Date(date);		
						var today = new Date();
						var systemDate = today.defaultView();
						var sysdate = new Date(systemDate);
															
						
						if (name == '') {
							$("#nameerrmsg").html("Patient Name is Required").show().delay(5000)
									.fadeOut("slow");
							return false;
						}
																		
						if (ph == '') {
							$("#phoneerrmsg").html("Mobile Number Required").show().delay(5000)
									.fadeOut("slow");
							return false;
						}

						if (ph.length < 10) {
							$("#phoneerrmsg").html("Invalid Mobile Number").show().delay(5000)
									.fadeOut("slow");
							return false;
						}

						if (!isNumeric(ph)) {
							$("#phoneerrmsg").html("Invalid Mobile Number").show().delay(5000)
									.fadeOut("slow");
							return false;
						}
						
						if (date == '') {
							$("#dateerrmsg").html("Appointment Date is Required").show().delay(5000)
									.fadeOut("slow");
							return false;
						}
						
						if(selecteddate.getTime() < sysdate.getTime()) {
							$("#dateerrmsg").html("Appointment Date should be either today or future date").show().delay(5000)
									.fadeOut("slow");
							return false;						
						}
						
						
						if (time == '') {
							$("#timeerrmsg").html("Appointment Time is Required").show().delay(5000)
									.fadeOut("slow");
							return false;
						}

						if (captcha == '') {
							$("#captchaerrmsg").html("Captcha Image Text Required")
									.show().delay(5000).fadeOut("slow");
							return false;
						}

						if (captcha.length < 4) {
							$("#captchaerrmsg").html("Invalid Captcha Image Text")
									.show().delay(5000).fadeOut("slow");
							return false;
						}

						if (!isNumeric(captcha)) {
							$("#captchaerrmsg").html("Invalid Captcha Image Text")
									.show().delay(5000).fadeOut("slow");
							return false;
						}
										

	});
	jQuery('#phoneNumber').keyup(
		function(e) {
			this.value = this.value.replace(/[^0-9\.]/g, '');
			if (e.which != 8 && e.which != 0
					&& (e.which < 48 || e.which > 57)) {
				// display error message
				$("#phoneerrmsg").html("Digits Only Please").show().delay(5000)
						.fadeOut("slow");
				return false;
			}
	});

	jQuery('#captcha').keyup(
		function(e) {
		
			this.value = this.value.replace(/[^0-9\.]/g, '');
			if (e.which != 8 && e.which != 0
					&& (e.which < 48 || e.which > 57)) {
				// display error message
				$("#captchaerrmsg").html("Invalid Captcha Image Text")
						.show().delay(5000).fadeOut("slow");
				return false;
			}
	});

});

function isNumeric(n) {
	return !isNaN(parseFloat(n)) && isFinite(n);
}