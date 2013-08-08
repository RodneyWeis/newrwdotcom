<form name="generalform" action="webformmailer.php5" method="post" onsubmit="return checkForm()">
			
	<input type="hidden" name="subject" value="General Inquiry" />
	<input type="hidden" name="redirect" value="thankyou.php" />
				
	<h1>Contact Form</h1>
    
	Please ensure that all fields with an asterisk(*) are filled in.<br /><br />

	*Name:<input type="text" size="30" name="name" /><br />
	*E-mail:<input type="text" size="40" name="emailaddress" /><br />
	*Confirm E-mail:<input type="text" size="40" name="confemailaddress" /><br />
	*Preferred Phone # (with area code):<input type="text" size="20" name="phoneprimary" /><br />
	Please enter additional comments or questions below:<br />

	<textarea name="comments" rows="16" cols="60"></textarea><br /><br />

	Please check your information before submitting<br /><br />

	<input type="submit" value="Submit Inquiry" />
	<input type="hidden" name="form_order" value="default" />
	<input type="hidden" name="form_delivery" value="hourly_digest" />
	<input type="hidden" name="form_format" value="html" /><br /><br />
	<input type="reset" value="Reset Form (cannot be undone!)" />
		
</form>