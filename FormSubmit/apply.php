<?php
/* Set e-mail recipient */
$myemail  = "help@careerassistconsultants.com";

/* Check all form inputs using check_input function */
$FullName = check_input($_POST['Name']);
$EmailID = check_input($_POST['emailID']);
$Contact = check_input($_POST['contactNumber']);
$CurrentCity = check_input($_POST['currentCity']);
$Qualification = check_input($_POST['qualification']);
$SelectCountry =  check_input($_POST['selectCountry']);
$ApplyingFor = check_input($_POST['applyingFor']);
$FieldInterest = check_input($_POST['fieldInterest']);
$EamilSubject  = "Registration Form : {$FullName}"; 
$OtherInfo = check_input($_POST['otherInfo']);

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $EmailID))
{
    show_error("E-mail address not valid");
}

/* Let's prepare the message for the e-mail */
$message = "Hello!

Registration form has been submitted by:

Full Name:       $FullName
E-mail:     	 $EmailID
Contact:    	 $Contact
CurrentCity: 	 $CurrentCity
Qualification:   $Qualification
Country:   		 $SelectCountry
ApplyingFor: 	 $ApplyingFor
FieldInterest: 	 $FieldInterest
OtherInfo: 		 $OtherInfo


End of message
";

/* Send the message using mail() function */
mail($myemail, $EamilSubject, $message);

/* Redirect visitor to the thank you page */
header('Location: ../apply.html?status=success');
//header('Location: ../apply.html');
exit();

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

  <!-- header('Location: ../apply.html?status=error');-->
    </body>
    </html>
<?php
exit();
}
?>