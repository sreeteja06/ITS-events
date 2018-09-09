<?php
// Checking For Blank Fields..
// Check if the "Sender's Email" input field is filled out
$email=$_POST['Email'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
echo 'Email';
if (!$email){
echo "Invalid Sender's Email";
}
else{
$Phone = $_POST['Phone'];
$message = $_POST['Message'];
$headers = 'From:'. $email2 . "rn"; // Sender's Email
$headers .= 'Cc:'. $email2 . "rn"; // Carbon copy to Sender
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = $message." \n\nMessage sent by ".$_POST['name']."\nemail id ".$email."\nphone number ".$Phone;
// Send Mail By PHP Mail Function
mail("itstechclub@gmail.com", $email, $message, $headers);
echo "Your mail has been sent successfuly ! Thank you for your feedback go to <a href = "."../index.html".">home</a>";
}
?>