<?php
if(!isset($_POST['submit'])){
    echo "error";
}
$name= $_POST['name'];
$visitor_email = $_POST['email']; 
$message = $_POST['message'];

if (empty($name) || empty ($visitor_email))
{ echo "Name and email are mandatory!"; 
    exit;
}

 $email_from = 'ngoctu152k2@gmail.com';//< Put your email address here 
 $email_subject = "New Form submission";
 $email_body - "You have received a new message from the user $name. \n". 
 "email address: $visitor_email \n". 
 "Here is the message: \n $message".
 $to= "ngoctu152k2@gmail.com"; //<== Put your email address here 
 $headers = "From: $email from \r\n";
//Send the email!
mail($to, $email_subject, $email_body, $headers); //done. redirect to thank-you page.

?>