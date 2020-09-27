<?php
// if($_POST["message"]) {
//     // $to      = 'rklodhiya@gmail.com';
//     // $subject = 'the subject';
//     // $message = 'hello';
//     // $headers = 'From: webmaster@example.com' . "\r\n" .
//     //     'Reply-To: webmaster@example.com' . "\r\n" .
//     //     'X-Mailer: PHP/' . phpversion();

//     // mail($to, $subject, $message, $headers);
//     $toEmail = 'rklodhiya@gmail.com';
//     $email = 'a@a.com';
//     $name = 'krupang';
//     $message = "testing mail";

//         $emailSubject = 'New email from your contant form';
//         $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

//         $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message];
//         $body = join(PHP_EOL, $bodyParagraphs);

//         if (mail($toEmail, $emailSubject, $body, $headers)) {
// echo('in work');

//             header('Location: enquiry.html');
//         } else {
//             $errorMessage = 'Oops, something went wrong. Please try again later';
//         }
// }

$sender = 'rklodhiya@gmail.com';
$recipient = 'rampatel4948@gmail.com';

$subject = "php mail test";
$message = "php test message";
$headers = 'From:' . $sender;

if (mail($recipient, $subject, $message, $headers))
{
    echo "Message accepted";
}
else
{
    echo "Error: Message not accepted";
}
?>