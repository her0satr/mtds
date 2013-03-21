        var frmvalidator = new Validator("moreinfo");
        frmvalidator.EnableMsgsTogether();
        frmvalidator.addValidation("name","req","Please enter your name.<br />");	
        frmvalidator.addValidation("email","email","Please make sure you enter a valid email address. <br />");
    
        function DoCustomValidation()
        {
            var frm = document.forms["moreinfo"];
            if((frm.email.value.length == '0')&&(frm.telephone.value.length == '0'))
            {
                sfm_show_error_msg("You must supply either your telephone number or email address.");
                return false;
            }
            else
            {
                return true;
            }
        }	
        frmvalidator.setAddnlValidationFunction(DoCustomValidation);	

	// hpot
	function DoCustomValidation2()
	{
		var frm = document.forms["quickcontact"];
		if(frm.nopexyz.value == '')
		{
			return true;
		}
		else
		{
			sfm_show_error_msg("be off with you, spammer!");
			return false;
		}
	}	
	frmvalidator.setAddnlValidationFunction(DoCustomValidation2);					