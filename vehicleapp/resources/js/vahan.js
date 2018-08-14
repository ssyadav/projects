/**
 * ********** BEGIN: JQUERY FUNCTION FOR DISPLAY THE ERROR MESSAGE
 * ******************************
 */

/*
 * Sets the error/warning/info/success message to be displayed on the top of the
 * page.
 */
function addMessage(messageText, messageType) {
	 
	// Get the messaging element.
	var messagingEl = document.getElementById("messaging");
	var newListEl = document.createElement('li');
	newListEl.className = getClassForMessageType(messageType);
	newListEl.innerHTML= messageText;
	messagingEl.appendChild(newListEl);
}

// clear the messaging elements
function removeMessage() {
	// Clear all messaging elements.
	 $('#messaging, #status').each(function(){
		 if ($(this).html() != "") {
			 $(this).html("");
	 	}
	 });
	
	// Reset any 'invalid' classes on labels and fields.
	$('.invalid').each(function(){
		$(this).removeClass('invalid');
	});
	
}

function getClassForMessageType(messageType) {
	if (messageType == "error" ||
		messageType == "warning" ||
		messageType == "success" ||
		messageType == "information") {
		return messageType;
		
	} else {
		return "error";
	}
}

/*
 * Sets the style class of the field to indicate the error.
 */
function markAsInvalid(element, labelName) {
	 
	 new YAHOO.util.Element(element).addClass("invalid");
	 if (labelName != null && labelName != "") {
		// labelName is the value of the 'for' attribute
		// for the label tag that should be highlighted.
		var labelEl = YAHOO.util.Dom.getElementBy(function(el){return(el.htmlFor == labelName);},"label");
		
		new YAHOO.util.Element(labelEl).addClass("invalid");
	 }
}

/**
 * ***************************** END JQUERY Functions
 * **************************************
 */



function  insertValidate() {
	
}
function  validateLogin(userId, password ) {
	
	alert(userId + " "+password);
	var isValid = true;
	removeMessage();
	
	if(userId==null || userId=="") {
		isValid = false;
		addMessage("Atleast one Category needs to be selected from the Category List.", "error");            
		markAsInvalid("selectedCategory", "selectedCategory");
	} 
	if(password==null || password == "") {
		isValid = false;
		addMessage("Atleast one Category needs to be selected from the Category List.", "error");            
		markAsInvalid("selectedCategory", "selectedCategory");
	}
	return isValid;
}
