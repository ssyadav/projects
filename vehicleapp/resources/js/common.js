
 	 	
 	flagWarn=true;  
	 
	selectOne=false; 
    fileSavedFlag=false;
    datechanged=false;
  
  
   function isFormChanged(formId) {     
	 var ele = document.forms[formId].length;
	 for ( i=0; i < ele; i++ ) {
           if (document.forms[formId].elements[i].type != undefined){	      
			
			
			 switch ( document.forms[formId].elements[i].type ) { 			
			  case "text" : 			    
                if ( document.forms[formId].elements[i].value != document.forms[formId].elements[i].defaultValue ){			    
			    return true;
			   }
			  break;
			
			  case "textarea" : 
			   if ( document.forms[formId].elements[i].value != document.forms[formId].elements[i].defaultValue ){
			
			    return true;
			   }
			  break;
			
			  case "radio" :
			   val = "";
               if ( document.forms[formId].elements[i].checked != document.forms[formId].elements[i].defaultChecked ){
			   	 
			    return true;
			   }
			  break;

			  			
			  case "select-multiple" :
			   for ( var x =0 ; x <document.forms[formId].elements[i].length; x++ ) {

                 if ( document.forms[formId].elements[i].options[ x ].selected 
			      != document.forms[formId].elements[i].options[ x ].defaultSelected ) {
			   		   return true;
			    }
			   }
			  break;
			
			  case "checkbox" :
			    if ( document.forms[formId].elements[i].checked != document.forms[formId].elements[i].defaultChecked ){
			   	
			     return true;
			    }
				break;
				
				case "select-one" :
			    if ( document.forms[formId].elements[i].checked != document.forms[formId].elements[i].defaultChecked ){
			   	
			     return true;
			    }
				break;
				
				case "hidden" : 				
				break;		  
			 }		  
		}		  
	 }
		
	 	return false;
	 }
   
   function checkDepartmentCategorySelection(formId) {
		var value = document.getElementById(formId + ':selectedDepartment').value;
		if (value == '0') {
			alert("Please select a Department/Category");
			document.getElementById(formId + ':selectedDepartment').focus();
			return false;
		} else {
			return true;
		}
	}
   
  function saveAndRedirect(formId, saveId) {
	  var commonSecAlertFlag = document.getElementById(formId + ':'+'commonSecAlertFlag').value;
	  var icpSecoundAlertFlag = false;
	  
	  if(document.getElementById(formId + ':'+'icpSecoundAlertFlag')!=null) {
		  icpSecoundAlertFlag = document.getElementById(formId + ':'+'icpSecoundAlertFlag').value;
	  }
	  	  
		 if (isFormChanged(formId) || commonSecAlertFlag=='true'|| icpSecoundAlertFlag=='true') {
			if (confirm('Do you wish to save your changes before leaving this page? If you press cancel, you will lose all your changes. Press OK to save your changes.')) {
				document.getElementById(formId + ':'+'saveOrRedirectFlag').value='SaveRedirect';
				document.getElementById(formId + ':'+'redirectToPage').value=saveId;
					if(document.getElementById(formId + ':'+'icpSecoundAlertFlag')!=null) {
						document.getElementById(formId + ':'+'icpSecoundAlertFlag').value=false;
					}
			}else{
				document.getElementById(formId + ':'+'saveOrRedirectFlag').value='Redirect';
				document.getElementById(formId + ':'+'redirectToPage').value=saveId;
					if(document.getElementById(formId + ':'+'icpSecoundAlertFlag')!=null) {
					document.getElementById(formId + ':'+'icpSecoundAlertFlag').value=false;
					}
			     }
		 	} else {
				document.getElementById(formId + ':'+'saveOrRedirectFlag').value='Redirect';
					if(document.getElementById(formId + ':'+'icpSecoundAlertFlag')!=null) {
						document.getElementById(formId + ':'+'icpSecoundAlertFlag').value=false;
					}
				document.getElementById(formId + ':'+'redirectToPage').value=saveId;
		}
	   
	}
  
  function saveForPagination(formId, saveId) {
	  var commonSecAlertFlag = document.getElementById(formId + ':'+'commonSecAlertFlag').value;
	  var icpSecoundAlertFlag = false;
	  if(document.getElementById(formId + ':'+'icpSecoundAlertFlag')!=null) {
		  icpSecoundAlertFlag = document.getElementById(formId + ':'+'icpSecoundAlertFlag').value;
	  }
		   if (isFormChanged(formId)  || icpSecoundAlertFlag=='true' || commonSecAlertFlag=='true') {
				if (confirm('Do you wish to save your changes before going to the next page. If you press cancel, you will lose all your changes. Press OK to save your changes.')) {
					document.getElementById(formId + ':'+'icpSaveOrRedirectFlag').value='SaveRedirect';
					document.getElementById(formId + ':'+'commonSecAlertFlag').value=false;
				}else{
					document.getElementById(formId + ':'+'icpSaveOrRedirectFlag').value='Redirect';
				document.getElementById(formId + ':'+'commonSecAlertFlag').value=false;
				}
			} else {
				document.getElementById(formId + ':'+'icpSaveOrRedirectFlag').value='Redirect';
				document.getElementById(formId + ':'+'commonSecAlertFlag').value=false;
			}
		   
		}
 
  function saveForSorting(formId, saveId) {
	  var commonSecAlertFlag = document.getElementById(formId + ':'+'commonSecAlertFlag').value;
	  var icpSecoundAlertFlag = false;
	  if(document.getElementById(formId + ':'+'icpSecoundAlertFlag')!=null) {
		  icpSecoundAlertFlag = document.getElementById(formId + ':'+'icpSecoundAlertFlag').value;
	  }
		   if (isFormChanged(formId)  || icpSecoundAlertFlag=='true' || commonSecAlertFlag=='true') {
				if (confirm('You have made changes to UPCs, do you wish to save those changes before sorting?  If you press cancel, you will lose all your changes. Press OK to save your changes.')) {
					document.getElementById(formId + ':'+'icpSaveOrRedirectFlag').value='SaveRedirect';
					document.getElementById(formId + ':'+'commonSecAlertFlag').value=false;
				}else{
					document.getElementById(formId + ':'+'icpSaveOrRedirectFlag').value='Redirect';
				document.getElementById(formId + ':'+'commonSecAlertFlag').value=false;
				}
			} else {
				document.getElementById(formId + ':'+'icpSaveOrRedirectFlag').value='Redirect';
				document.getElementById(formId + ':'+'commonSecAlertFlag').value=false;
			}
		   
		}
  
  
	function checkForUpdatesofCategoryChange(formId, saveId, refershId) {
		var checkUpdate = isFormChanged(formId);
		  var commonSecAlertFlag = document.getElementById(formId + ':'+'commonSecAlertFlag').value;
		  var icpSecoundAlertFlag = false;
		  if(document.getElementById(formId + ':'+'icpSecoundAlertFlag')!=null) {
			  icpSecoundAlertFlag = document.getElementById(formId + ':'+'icpSecoundAlertFlag').value;
		  }
		if (checkUpdate || icpSecoundAlertFlag=='true' || commonSecAlertFlag=='true') {
			if (confirm('Do you wish to save your changes before changing the category? If you press cancel, you will lose all your changes. Press OK to save your changes.')) {
				document.getElementById(formId + ':' + 'hiddenCheck').value = 'yes';
				document.getElementById(formId + ':' + saveId).click();
				document.getElementById(formId + ':'+'commonSecAlertFlag').value=false;
			} else {
				document.getElementById(formId + ':' + 'hiddenCheck').value = 'no';
				document.getElementById(formId + ':' + refershId).click();
				document.getElementById(formId + ':'+'commonSecAlertFlag').value=false;
			}
		} else {
			document.getElementById(formId + ':' + 'hiddenCheck').value = 'no';
			document.getElementById(formId + ':'+'commonSecAlertFlag').value=false;
		}

	}
  
   function checkForCategoryUpdate(formId, saveId, refershId) {
	   var commonSecAlertFlag = document.getElementById(formId + ':'+'commonSecAlertFlag').value;
		if (isFormChanged(formId)|| commonSecAlertFlag=='true') {
			if (confirm('Do you wish to save your changes before changing the category? If you press cancel, you will lose all your changes. Press OK to save your changes.')) {
				document.getElementById(formId + ':' + saveId).click();
			} else {
				document.getElementById(formId + ':' + refershId).click();
				document.getElementById(formId + ':'+'commonSecAlertFlag').value=false;
			}
		} else {
			document.getElementById(formId + ':'+'commonSecAlertFlag').value=false;
		}
	}
   
   function decimalNumbersOnly()
	{
	if( !(event.keyCode == 48 || event.keyCode == 49 ||
	    event.keyCode == 50 || event.keyCode == 51 ||
	    event.keyCode == 52 || event.keyCode == 53 ||
	    event.keyCode == 54 || event.keyCode == 55 ||
	    event.keyCode == 56 || event.keyCode == 57 ||
	    event.keyCode == 46)) {
		event.keyCode=0;
	 } 
	} 
   
   function errorAlert() {
	   var hasErrorOnSave = false;
	   var currentPage ='';
	   var formId = '';
	  if(document.getElementById('currentPage').value!=null) {
		  currentPage=document.getElementById('currentPage').value;
	  }
	   if(currentPage!=null) {
		   if(currentPage=='historicalfund'){
			   formId='historicalfund';
			   if(document.getElementById(formId + ':'+'hasErrorOnSave').value!=null){
				   hasErrorOnSave = document.getElementById(formId + ':'+'hasErrorOnSave').value;
			   }
		   }
		   if(currentPage=='itemCostProposal'){
			   formId='itemCostProposalform';
			   if(document.getElementById(formId + ':'+'hasErrorOnSave').value!=null){
				   hasErrorOnSave = document.getElementById(formId + ':'+'hasErrorOnSave').value;
			   }
		   }
		   if(currentPage=='missingUPC'){
			   formId='missingNewUPCform';
			   if(document.getElementById(formId + ':'+'hasErrorOnSave').value!=null){
				   hasErrorOnSave = document.getElementById(formId + ':'+'hasErrorOnSave').value;
			   }
		   }
		   if(currentPage=='additionalFunding'){
			   formId='additionalFundingProposal';
			   if(document.getElementById(formId + ':'+'hasErrorOnSave').value!=null){
				   hasErrorOnSave = document.getElementById(formId + ':'+'hasErrorOnSave').value;
			   }
		   }
	   }
		if(hasErrorOnSave=='true')  {
			alert("You have errors in your data entry. Please either scroll to the top of the page to see a description of errors, or look for fields marked with errors in the data entry section of the page for details. When you have corrected these errors, please save your data.");
			document.getElementById(formId + ':'+'hasErrorOnSave').value='false';
		}
   }
   
   function errorAlertOnAddRow(formId) {
	   if( document.getElementById(formId + ':'+'hasErrorOnSave').value=='true') {
		   alert("You have errors in your data entry. Please either scroll to the top of the page to see a description of errors, or look for fields marked with errors in the data entry section of the page for details. When you have corrected these errors, please save your data.");
		   document.getElementById(formId + ':'+'hasErrorOnSave').value='false';
	   }
   }
   
   
// This method is for Callback Status image
   function searchFilterCallback(callStatus) {
   	if (callStatus.status == "begin") {
   		 $.blockUI({ message: '<img src="../resources/images/animWorking.gif" /> <h3>Just a moment...</h3>' });
   	}
   	if (callStatus.status == "complete") {
   		$.unblockUI();
   	}
   	if (callStatus.status == "success") {
   		$.unblockUI();
   	}
   }