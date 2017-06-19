
<?php
// using SendGrid's PHP Library
// https://github.com/sendgrid/sendgrid-php
// If you are using Composer (recommended)
//require 'vendor/autoload.php';
// If you are not using Composer
 require("sendgrid-php/sendgrid-php.php");
$from = new SendGrid\Email("SHoutBox", "engineeraccidental@gmail.com");
$subject = "ShoutBox : Notification";
$to = new SendGrid\Email("Anjana", "anjana19sinha@gmail.com");
$content = new SendGrid\Content("text/plain", "Thank you Tarun, for your response to our ShoutBox service(http://myshoutbox.tk). We have added even new features in ShoutBox. Now you can send feedback to us through the website. Soon, we are going to add password reset option in ShoutBox. We, at Accidental Engineer, are working on some more elegant projects and invite you to coordinate(Follow us on GitHub: https://github.com/Accidental-Engineer).
       This mail is to inform you about our facebook page(http://facebook.com/accidentalengineer), which has come up last month. Like the page to get notifications about our projects and to learn new techniques in designing and programming. Share the page too to inform your friends about us.
     \nFor any query or help write us. Our email-ID is engineeraccidental@gmail.com.
   \n\nThank You\nManagement Team\nAccidental Engineer\n\nYou are receiving this mail because you have registered at http://myshoutbox.tk.");
$mail = new SendGrid\Mail($from, $subject, $to, $content);
$apiKey = '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';
$sg = new \SendGrid($apiKey);
$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
print_r($response->headers());
echo $response->body();
?>
