<?php
/* Set e-mail recipient */
$myemail  = "help@careerassistconsultants.com";

/* Check all form inputs using check_input function */
$EmailName = check_input($_POST['EmailName'], "Enter your name");
$EmailID = check_input($_POST['EmailID']);
$Contact = check_input($_POST['EamilContact']);
$EamilSubject  = check_input($_POST['EamilSubject'], "Write a subject");
$EamilMessage = check_input($_POST['EamilMessage'], "Write your comments");

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $EmailID))
{
    show_error("E-mail address not valid");
}

/* Let's prepare the message for the e-mail */
$message = "Hello!

Your contact form has been submitted by:

Name:       $EmailName
E-mail:     $EmailID
Contact:    $Contact
Comments:   $EamilMessage

End of message
";

/* Send the message using mail() function */
mail($myemail, $EamilSubject, $message);

/* Redirect visitor to the thank you page */
header('Location: ../contact.html?status=success');
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

    <b>Please correct the following error:</b><br />
    <?php echo $myError; ?>

    </body>
    </html>
<?php
exit();
}
?>