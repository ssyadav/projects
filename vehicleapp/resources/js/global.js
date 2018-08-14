//YAHOO.util.Event.onDOMReady(globalInit);
var currentDate = new Date();
var waitingIconDiv = "<div id='waitingIcon'></div>";
var logoutBody ='';
var updateFl = 'N';
var popupUpdateFl = 'N';
var popupIndicatorOn = 'N';
var searchCriteriaVisible = true;
var callerElForConfirm;

function globalInit() {
	// Add year to the footer
	$("#currentDate").html(currentDate.getFullYear() + "");
}

function showWaitingImg() {
	$("#waitingImg").show();
}

function hideWaitingImg() {
	$("#waitingImg").hide();
}

//to show the waiting image on the popup screen 
function showPopupWaitingImg() {
	$("#popupWaitingImg").show();
}
//to hide the waiting image on the popup screen
function hidePopupWaitingImg() {
	$("#popupWaitingImg").hide();
}

/*
 * This method is used to set searchCriteriaChanged flag. If any changes are made inside
 * the page, the searchCriteriaChanged flag is set to true
 
function setSearchCriteriaChanged() {
	 updateFl = "Y";
}

function clearSearchCriteriaChanged() {
	 updateFl = "N";
}*/

/**
 * This function is used to submit to add any content new content to the page through the AJAX call.
 * This will wait for 180 seconds for the response. If response is not received it will error out.
 * 
 * */
 function submitAjaxRequest(submitURL) {
	 var test;
	 var responseData = $.ajax({
	    url: submitURL,
	    type: 'GET',
	    timeout: 180000,
	    error: function(){
	        alert('Error loading HTML document');
	        hideWaitingImg();
	    },
	    success: function(data){
	    	test = data;
	    }
	});
	 if('Internet Explorer' == whichBrs()) {
		 return test;
	 }else {
		 //to be checked.
		 alert(responseData);
		 return responseData.responseText;
	 }
	
 }
/*
 * This function adds a calendar icon besides the field
 * id - input field in which the selected date need to be populated
 * startDate - begin date (if the calendar needs to restrict the date range, this would be the start date of 
 * 			   the range, else blank) 
 * endDate - end date (if the calendar needs to restrict the date range, this would be the end date of 
 * 			   the range, else blank)
 * */
 function populateDate(id, startDate, endDate) {
	$(function() {		  
	  	var date = document.getElementById(id);		
		$(date).datepick({showOnFocus:false,
			showTrigger: '<img src="../resources/images/iconCalendar.gif" alt="Popup" class="trigger">',
			minDate:startDate,
			maxDate:endDate,
			constrainInput:true,
			useMouseWheel:false,
			alignment:'bottomRight',
			pickerClass: 'renderCalendar',
			onSelect: function(dates) { 
				clearDateField(id); 
	    	}
		});
		$(date).bind('focus', function() {
			clearDateField(id);
		});
	});
 }
 /**
  * Load the subTabs to the DOM.
  * input 'tabDiv' is the id of the div inside which the tabs needed to be loaded.
  * */
  function loadSubTabs(tabDiv) {	 
	$(function(){
		$('#'+tabDiv).tabs();
	});	
  }
  /**
   * Add a new sub tab.
   * tabDiv - div element under which the new sub tab has to be created.
   * url - is the URL to invoke for an AJAX request.
   * tabTitle - Title that is displayed on the tab.
   * */
   function addSubTab(tabDiv, url, tabTitle, tabKey, initFunctionName, onBeforeCloseFunctionName){
	   removeMessage();//remove all the existing messages 
	   $.ajax({
	  	    url: url,
	  	    type: 'GET',
	  	    timeout: 180000,
	  	    error: function(){
	  	        alert('Error loading HTML document');
	  	        hideWaitingImg();
	  	    },
	  	    beforeSend: function(){
	  	    	// Show the waiting image.
	  	        showWaitingImg();
	  	    },
	  	    success: function(data){
	  	    	var tabIdent = Math.floor(Math.random()*1000);
	  	    	
	  	    	// Create the tab.
	  	    	$('#'+tabDiv).tabs('add',{
	  				title:tabTitle,
	  				content:null,
	  				closable:true,
	  				tabIdent:tabIdent,
	  				onBeforeClose:function(title){
	  	    			var ret = true;
			  	    	// Call the onBeforeClose function, if specified.
			  	    	if (onBeforeCloseFunctionName != null && onBeforeCloseFunctionName != "") {
			  	    		ret = eval(onBeforeCloseFunctionName+"()");
			  	    	}
			  	    	return ret;
			  	    }
	  			});
	  	    	// Load the ajax content into the tab.
		  	  	if (data != null) {
		  	    	var start = Number(new Date());
		  	  		//$('div.tabIdent-' + tabIdent, $('div#tabs_quotes')).html(data);
		  	    	$('div.tabIdent-' + tabIdent, $('div#' + tabDiv)).html(data);
			  	  	var end = Number(new Date());
			  		//alert(end-start);
		  	  	}

		  	  	// Hide the waiting image.
	  	    	hideWaitingImg();

	  	    	// Call the init function, if specified.
	  	    	if (initFunctionName != null && initFunctionName != "") {
	  	    		var ret = eval(initFunctionName+"()");
	  	    	}	  	    	

	  	    }
	  	});
		
		return false;
   }
   
   
   function loadPageFragment(url, idToUpdate, formId){
	   dataString = $("#" + formId).serialize();

	   $.ajax({
	  	    url: url,
	  	    type: 'POST',
	  	    
	  	    timeout: 60000,
	  	    error: function(){
	  	        alert('Error loading HTML document');
	  	        hideWaitingImg();
	  	    },
	  	    beforeSend: function(){
	  	        showWaitingImg();
	  	    },
	  	    success: function(data){
	  	    	$("#" + idToUpdate).html(data);
	  	    	hideWaitingImg();
	  	    }
	  	});
		
		return false;
   }

 /*
  * Sets the error/warning/info/success message to be displayed on the top of the page.
  * */
 function addMessage(messageText, messageType) {
 	// Get the messaging element.
 	var messagingEl = document.getElementById("messaging");
 	var newListEl = document.createElement('li');
 	newListEl.className = getClassForMessageType(messageType);
 	newListEl.innerHTML= messageText;
 	messagingEl.appendChild(newListEl);
 }
 function removeMessage() {
 	// Clear all messaging elements.
	 $('#messaging, #status').each(function(){
		 if ($(this).html() != "") {
			 $(this).html("");
	 	}
	 });
 	//var messagingEl = document.getElementById("messaging");
 	//if (messagingEl.innerHTML != "") {
 	//	messagingEl.innerHTML= "";
 	//}
 	// Reset any 'invalid' classes on labels and fields.
	$('.invalid').each(function(){
		$(this).removeClass('invalid');
	});
	//var invalidObjects = YAHOO.util.Dom.getElementsByClassName("invalid");
	//if (invalidObjects != null) {
	//	for (i = 0; i < invalidObjects.length; i++) {
	//		new YAHOO.util.Element(invalidObjects[i]).removeClass("invalid");
	//	}
	//}
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
 * */
 function markAsInvalid(element, labelName) {
	 new YAHOO.util.Element(element).addClass("invalid");
	 if (labelName != null && labelName != "") {
		// labelName is the value of the 'for' attribute 
		// for the label tag that should be highlighted.
		var labelEl = YAHOO.util.Dom.getElementBy(function(el){return(el.htmlFor == labelName);},"label");
		new YAHOO.util.Element(labelEl).addClass("invalid");
	 }
 }
 
 // Clear and reset the style for the default date field content.
 function clearDateField(fieldId) {
		var thisElementId = "#" + fieldId;
		if ($(thisElementId).length > 0) {
			if ($(thisElementId).val() == "mm/dd/yyyy" || $(thisElementId).val() == "hh:mm") {
				$(thisElementId).val("");
			}
			if ($(thisElementId).hasClass("helperText")) {
				$(thisElementId).removeClass("helperText");
			}
		}
	}
 
// Validate the given date string.
 function validateDate(input){
	var validformat=/^\d{2}\/\d{2}\/\d{4}$/ ;//Basic check for format validity
	var isValid = false;
	if (input == "mm/dd/yyyy") {
		// Default field value, can be ignored.
		isValid = true;
	} else if (!validformat.test(input.value)) {
		// Date invalid.
	} else { 
		//Detailed check for valid date ranges
		var monthfield=input.value.split("/")[0];
		var dayfield=input.value.split("/")[1];
		var yearfield=input.value.split("/")[2];
		var dayobj = new Date(yearfield, monthfield-1, dayfield);
		if ((dayobj.getMonth()+1!=monthfield)||(dayobj.getDate()!=dayfield)||(dayobj.getFullYear()!=yearfield)){
			// Date invalid.
		} else {
			isValid = true;
		}
	}
	return isValid;
 }
 function compareValidDates(date1, date2) {
	var dateObj1 = new Date(date1);
	dateObj1.setHours(0);
	dateObj1.setMinutes(0);
	dateObj1.setSeconds(0);
	dateObj1.setMilliseconds(0);
	var dateObj2 = new Date(date2);
	dateObj2.setHours(0);
	dateObj2.setMinutes(0);
	dateObj2.setSeconds(0);
	dateObj2.setMilliseconds(0);
	
	if (dateObj1 < dateObj2) {
		return -1;
	} else if (dateObj1 > dateObj2) {
		return 1;
	} else {
		return 0;
	}
}
 
/**
 * TRIM the left side white spaces
 */
function ltrim(str) { 
	for(var k = 0; k < str.length && isWhitespace(str.charAt(k)); k++);
 	return str.substring(k, str.length);
}

/**
 * TRIM the right side white spaces
 */
function rtrim(str) {
 	for(var j=str.length-1; j>=0 && isWhitespace(str.charAt(j)) ; j--);
 	return str.substring(0,j+1);
}

/**
 * TRIM the left as well as right side white spaces
 */
function trim(str) {
 	return ltrim(rtrim(str));
}

function isWhitespace(charToCheck) {
 	var whitespaceChars = " \t\n\r\f";
 	return (whitespaceChars.indexOf(charToCheck) != -1);
}

/**
 * Numeric validation
 */
function isNumericValue(sText) {
	var validChars = "0123456789";
	for (j = 0; j < sText.length; j++) { 
		if (validChars.indexOf(sText.charAt(j)) == -1) {
			return false;
		}
	}
	return true;
}

/**
 * AlphaNumeric validation
 */
function isAlphaNumericValue(sText) {
	var isAlphaNumeric = true;	
	var alphanum=/^[0-9a-zA-Z]+$/; //This pattern contains A to Z , 0 to 9 and A to B
	if(!sText.match(alphanum)){
		isAlphaNumeric = false;
	}
	return isAlphaNumeric;
}

function isCurrencyValue(sText, numDecimalPlaces) {
	var isCurrency = true;
	// Look for a decimal.
	if (sText.indexOf(".") >= 0) {
		// Split the string to get the dollars and cents.
		var currencyPieces = sText.split(".");
		// Make sure there are only 2 pieces and each is numeric.
		if (currencyPieces.length != 2 || !isNumericValue(currencyPieces[0]) || !isNumericValue(currencyPieces[1])) {
			isCurrency = false;
		} else {
			// Verify the decimal places.
			if (currencyPieces[1].length > numDecimalPlaces) {
				isCurrency = false;
			}
		}
	} else {
		// No decimal, so just make sure it is a number.
		if (!isNumericValue(sText)) {
			isCurrency = false;
		}
	}
	return isCurrency;
}

function formatCurrency(sText, numDecimalPlaces) {
	// ** Assumes sText has already been validated ***
	var dollarsValue = "";
	var centsValue = "";
	// Look for a decimal.
	if (sText.indexOf(".") >= 0) {
		// Split the string to get the dollars and cents.
		var currencyPieces = sText.split(".");
		dollarsValue = currencyPieces[0];
		centsValue = currencyPieces[1];
	} else {
		// No decimal - dollars only.
		dollarsValue = sText;
	}
	// Pad the cents to get the required number of decimal places.
	for (i = centsValue.length; i < numDecimalPlaces; i++) {
		centsValue = centsValue + "0";
	}
	// Pad the dollars value if it is blank.
	if (dollarsValue == "") {
		dollarsValue = "0";
	}
	
	return dollarsValue + "." + centsValue;
}

 function hideResultWaitingIcon() {
	if (resultsWaitingIcon != null) {
		resultsWaitingIcon.hide();
	}
 }
 function whichBrs() {
	 var agt=navigator.userAgent.toLowerCase();
	 if (agt.indexOf("opera") != -1) return 'Opera';
	 if (agt.indexOf("staroffice") != -1) return 'Star Office';
	 if (agt.indexOf("webtv") != -1) return 'WebTV';
	 if (agt.indexOf("beonex") != -1) return 'Beonex';
	 if (agt.indexOf("chimera") != -1) return 'Chimera';
	 if (agt.indexOf("netpositive") != -1) return 'NetPositive';
	 if (agt.indexOf("phoenix") != -1) return 'Phoenix';
	 if (agt.indexOf("firefox") != -1) return 'Firefox';
	 if (agt.indexOf("safari") != -1) return 'Safari';
	 if (agt.indexOf("skipstone") != -1) return 'SkipStone';
	 if (agt.indexOf("msie") != -1) return 'Internet Explorer';
	 if (agt.indexOf("netscape") != -1) return 'Netscape';
	 if (agt.indexOf("mozilla/5.0") != -1) return 'Mozilla';
	 if (agt.indexOf('\/') != -1) {
	 if (agt.substr(0,agt.indexOf('\/')) != 'mozilla') {
	 return navigator.userAgent.substr(0,agt.indexOf('\/'));}
	 else return 'Netscape';} else if (agt.indexOf(' ') != -1)
	 return navigator.userAgent.substr(0,agt.indexOf(' '));
	 else return navigator.userAgent;
}

/**
 * creates a new tab for Item Details screen.
 */
function addItemDetailsTab(tabTitle, tabKey, tabDiv){
	var url = '../pages/itemDetails.jsf?corpCode='+tabKey;
 	addSubTab(tabDiv, url, tabTitle);
 	return false;
}

function confirmLogout() {
	createConfirmationPopUp ("Are you sure you want to logout from SVHarbor.com?", "Logout", "logout()", 140);
}
 
 function logout() {
	 location.href="/logout.html";
 }
 
function getFormIdForElement(element) {
	var elementFormObj = $(element).parents("form")[0];
	return elementFormObj.id;
}

function createAlertPopUp(alertText, fnName, height) {
	popUpBody = $("<div>").html("<p>"+alertText+"</p>");
	$(popUpBody).dialog({
		resizable: false,
		height:height,
		width:300,
		title:"<a href=\"javascript:;\" onclick=\"$(popUpBody).dialog('close');\">Close Window</a>",
		modal: true,
		buttons: [{
			text:'OK',
			iconCls:'button right',
			handler: function() {
				$(popUpBody).dialog('close');
				eval(fnName);
			}
		}]
	});
}

function createConfirmationPopUp(confirmationText, buttonName, fnName, height) {
	 popUpBody = $("<div>").html("<p>"+confirmationText+"</p>");
	 $(popUpBody).dialog({
			resizable: false,
			height:height,
			width:300,
			title:"<a href=\"javascript:;\" onclick=\"$(popUpBody).dialog('close');\">Close Window</a>",
			modal: true,
			buttons: [{
				text:buttonName,
				iconCls:'button right',
				handler: function() {
					$(popUpBody).dialog('close');
					eval(fnName);
				}
			}, {
				text:'Cancel',
				iconCls:'button right',
				handler: function() {
					$(popUpBody).dialog('close');
				}
			}]
		});
}

 //use this method to specify the width and title.
/* function createConfirmPopUp (confirmationText, buttonName, fnName, height, width, title) {
	 popUpBody = $("<div>").html("<p>"+confirmationText+"</p>");
	 $(popUpBody).dialog({
			resizable: false,
			height:height,
			width:width,
			title:title,
			modal: true,
			buttons: [{
				text:buttonName,
				iconCls:'button right',
				handler: function() {
					$(popUpBody).dialog('close');
					eval(fnName);
				}
			}, {
				text:'Cancel',
				iconCls:'button right',
				handler: function() {
					$(popUpBody).dialog('close');
				}
			}]
		});
 }*/
 
/**
 * Create any jQuery EasyUI button menus
 */
 function initializeActionMenu() {
	 $(document).ready(function() {
		 $('#menubutton').menubutton({menu:'#mm'});
	 });
 }
 
 function showHideSearchCriteria(objectId, objectHeightPx) {
	if (searchCriteriaVisible) {
		// Hide the search criteria.
		var anim = new YAHOO.util.Anim(objectId,{height:{to:0}},1,YAHOO.util.Easing.easeOutStrong);
		anim.animate();
		// Change the label.
		YAHOO.util.Dom.get("showHideText").innerHTML = "Show";
		// Update the flag.
		searchCriteriaVisible = false;
	} else {
		// Show the search criteria.
		var anim = new YAHOO.util.Anim(objectId,{height:{to:objectHeightPx}},1,YAHOO.util.Easing.easeOutStrong);
		anim.animate();
		// Change the label.
		YAHOO.util.Dom.get("showHideText").innerHTML = "Hide";
		// Update the flag.
		searchCriteriaVisible = true;
	}
}
 
 function toggleShowHideLink() {
	 $("#showHideCriteria").css("display", "block");
	 $("#showHideText").html("Hide");
	 $("#searchCriteriaVisible").val("true");
 }
 
 /**
  * opens a new popup window for the given URL, height and width.
  */
 var popupWindowContainer;
 function openPopupWindow(url, height, width) {
	$.ajax({
  	    url: url,
  	    type: 'GET',
  	    timeout: 180000,
  	    error: function(){
  	        alert('Error loading HTML document');
  	    },
  	    success: function(data){
  	    	popupWindowContainer = $("<div id='popupWindow'>").html(data);
  	    	$(popupWindowContainer).dialog({
				resizable:false,
				height:height,
				width:width,			
				title:false,
				modal:true				
			});
  	    }
  	});
}
 
/**
 * this method closes the popup when the user clicks on the 'Close Window' link.
 */
function closePopup() {
	// Close then destroy the popup container.
	$(popupWindowContainer).dialog('close');
	$(popupWindowContainer).dialog('destroy');
}
 
 /**
  * this method closes any open dynamic tooltip
  */
 function closeTooltip() {
	 tooltipObj.hide();
	 $("body").unbind("click");
 }
 
 /**
  * this method initializes the event that will close an open
  * tooltip if the user clicks outside the tooltip.
  */
 function initTooltipClickOutside() {
	$("body").click(function(event) {
		var $target = $(event.target);		
		if ($target.parents("div.tooltip").length == 0) {
			closeTooltip();
			if(typeof clearMouseover == 'function') { 
				clearMouseover();
			}			
		}
	});
 }
 
 function callbackActions(callStatus) {
	if (callStatus.status == "begin") {
		showWaitingImg();
	}
	if (callStatus.status == "success") {
		hideWaitingImg();	
	}
}
 
 /**
  * To open 'Vendor Search' popup page.
  */
 function openVendorSearchPopup(vendorSearchCaller) {
 	url = "../pages/vendorSearch.jsf?searchtype=multiple&vendorSearchCaller=" + vendorSearchCaller,
 	openPopupWindow(url, 500, 740);
 	return false;
 }
 
 
 function openSingleVendorSearchPopup(vendorSearchCaller, allPcNumbers, allProductGroups) {
	alert("allPcNumbers :"+allPcNumbers);
	alert("allProductGroups :"+allProductGroups);
 	url = "../pages/vendorSearch.jsf?searchtype=single&vendorSearchCaller=" + vendorSearchCaller + '&pcNbrs='
 			+allPcNumbers+'&productGroupNbrs='+allProductGroups,
 	openPopupWindow(url, 500, 740);
 	return false;
 }
 
 /**
  * New data structure
  */
 function SVArray(collection) {
		var data;
		if (collection != null && collection.length > 0){
			data = collection;
		} else {
			data = new Array();
		}
		// if the value is not there in the SVArray, the contains function will return -1 
		// else it will return the index value.
		this.contains = function contains(object) { return indexOf(object) != -1; };
		this.indexOf = function indexOf(object) {
			var result = -1;
			if (object != null) {
				for(var i = 0; i < data.length && (result == -1); i++){
					var item = data[i];
					if (item != null && object == item) { result = i; } 
				}
			}	
			return result;	
		};		
		//To remove the particular value from the SVArray
		this.remove = function remove(object) {
			var index = indexOf(object);
			if (index != -1){
				data.splice(index, 1);	
			}	
		};
		this.pop = function pop() { return data.shift(); };		
		//To get the values based on the index
		this.get = function get(index) {
			var result = null;
			
			if (index >= 0 && index < size()) {
				result = data[index];	
			}
			
			return result;
		};		
		//To add a new value into the SVArray
		this.add = function add(object) { data.push(object); };
		//To add a collection of values into the SVArray
		this.addSVArray = function addSVArray(collection){ 
			if (collection != null){ 
				for(var i = 0; i < collection.size(); i++) {
					add(collection.get(i));
				}
			}
		};		
		//To add a array of values into the SVArray
		this.addArray = function addArray(array){ if (array != null) { data = data.concat(array); } };		
		//To find the size of the SVArray
		this.size = function size() { return data.length; };		
		//To check isEmpty
		this.isEmpty = function isEmpty() { return data.length == 0; };		
		//To Sort the SVArray values
		this.sort = function sort(aFunction) { data = data.sort(aFunction); };
		//To get the comma separated values.
		this.toString = function toString() { return data.join(","); };
	}