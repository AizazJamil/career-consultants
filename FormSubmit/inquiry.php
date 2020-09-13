<?php
/* Set e-mail recipient */
$myemail  = "help@careerassistconsultants.com";

/* Check all form inputs using check_input function */
$FieldInterest = check_input($_POST['fieldInterest']);
$EmailID = check_input($_POST['emailID']);
$FullName = check_input($_POST['fullName']);
$Contact = check_input($_POST['contactNumber']);
$FullAddress = check_input($_POST['fullAddress']);
$DetailDescription = check_input($_POST['detailDescription']);
$RadioInfo = check_input($_POST['otherinfoRadio']);
$otherDetails='';
if($RadioInfo==='Other')
{
	$otherDetails = check_input($_POST['otherDetails']);
}
$EamilSubject  = "Inquiry Form Requested By : {$FullName}"; 


/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $EmailID))
{
    show_error("E-mail address not valid");
}

/* Let's prepare the message for the e-mail */
$message = "Hello!

Inquiry form has been submitted by:

Full Name:       $FullName
E-mail:     	 $EmailID
Contact:    	 $Contact
FieldInterest: 	 $FieldInterest
FullAddress: 	 $FullAddress
Detailed Description : $DetailDescription
Need Help: $RadioInfo;
Other Details: $otherDetails


End of message
";
/* Send the message using mail() function */
mail($myemail, $EamilSubject, $message);

/* Redirect visitor to the thank you page */
header('Location: ../index.html?status=success');
exit();
return;

/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}

function show_error($myError)
{
?>
    <html>
    <body>

    <b>Please correct the following error:</b><br />
    <?php echo $myError; ?>

    </body>
    </html>
<?php
exit();
}
?>