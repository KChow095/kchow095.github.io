<?php
    $name = $_Post['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $myemail = 'karlenchow@gmail.com';

    $email_subject = 'From Personal Website';

    $email_body = "Name: $name.\n".
                    "Email: $visitor_email.\n".
                    "Message: $message.\n";
    
    $to = $myemail;
    $headers .="Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");
?>