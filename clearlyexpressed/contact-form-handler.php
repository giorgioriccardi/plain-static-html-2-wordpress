<?php 
$errors = '';
$myemail = 'info@clearlyexpressed.ca';//<-----Put Your email address here.
if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 
$telefon = $_POST['telefon'];
$unternehmen = $_POST['unternehmen'];
$strasse = $_POST['strasse'];
$plz = $_POST['plz'];
$betreff = $_POST['betreff'];


if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
	$to = $myemail; 
	$email_subject = "Contact form submission: $name";
	$email_body = "You have received a new message. ".
	" Here are the details:\n Name: $name \n Email: $email_address \n Telefon: $telefon \n Unternehmen: $unternehmen \n Straße/Hausnummer: $strasse \n PLZ/Ort: $plz \n betreff: ";
	$lungh_array= count($betreff);
	for ($contatore=0; $contatore < $lungh_array; $contatore++) {
		$email_body = $email_body . "$betreff[$contatore] ";
	}
	$email_body = $email_body . "\n Message \n $message"; 
	$headers = "From: $myemail\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: thank-you.htm');
} 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Contact form handler</title>
	<META HTTP-EQUIV=REFRESH CONTENT="60; URL=https://www.clearlyexpressed.ca/index.html">
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>

<div>
	<h1>Please contact customer service with a copy of the error message at:</h1>
		<p><a href="mailto:giorgio@griccardi.com">giorgio@griccardi.com</a></p>
</div>


</body>
</html>
