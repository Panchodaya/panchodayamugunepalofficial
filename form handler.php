<?php
$name = $_POST['name'];
$visitoe_email=$_POST['Email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$email_form = 'rsm46594@gmail.com'
$email_subject = 'New Form Submission'
$email_body = "user Name: $name.\n".
              "user Email: $visitoe_email.\n".
              "Subject: $subject.\n".
              "User Message: $message.\n";
 $to = 'sumanshahi488@gmail.com';
 $headers = "From:$email_form\r\n"; 
 $headers .= "Reply-To:$visitoe_email\r\n";  
 
 mail($to,$email_subject,$email_body,$headers);
 header("Location: contact.html");
              
?>
