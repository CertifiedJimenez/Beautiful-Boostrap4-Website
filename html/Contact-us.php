<?php

$name = $_post['name'];
visitor_email = $_post['email'];
message = $_post['message'];


$email_from = 'PhoneUniverseIpswich@gmail.com';

$email_subject = 'Contact us enquiry';

$email_body = "Username: $name.\n".
            "User Email: $visitor_email.\n".
            "User Message: $message.\n";

$to ="Cristofer.Pro@icloud.com";

$hearders = "Form: $email_form \r\n";
$hearders .= "Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);




?>