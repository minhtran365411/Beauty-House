<?php
header("Location: https://beauty-house-project.000webhostapp.com/welcome.php");

//create Variables to store form data
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$number = $_POST["number"];
$message = $_POST["message"];
$email = $_POST["email"];

/*
echo $fname;
echo '<br>';
echo $lname;
echo '<br>';
echo $email;
echo '<br>';
echo $message;
echo '<br>';
echo $number;
*/


//compose email
$to = "edzaans@hotmail.com";// add working email when website is hosted
$subject = "Enquiry from Beauty House contact form";
$message = "You have received a new email from : $fname
Phone Number: $number
Message: $message";
$headers = "From" . $email;

//send email
mail($to,$subject,$message,$headers);

?>
