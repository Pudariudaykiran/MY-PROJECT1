<?php
$name =$_POST['name'];
$visitor _email =$_POST['email'];
$subject =$_POST['subject'];
$Message =$_POST['Message'];


$email_from = 'info@udaysupport.com';

$email_subject = 'New From Submission';

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
              "Subject: $subject.\n". 
              "User Message: $message.\n"; 


       $to ='udaykiran3321@gmail.com';    
       
       $headers = "From: $email_from\r\n";
   
       $headers .= "Reply-To: $visitor_email\r\n";  

       mail($to,$email_subject,$email_body,$headers);

       header("Location: contact.html");


?>