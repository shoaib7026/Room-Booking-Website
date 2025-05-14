<?php

// Email jahan form ka data bhejna hai
$to = "mahalerang@gmail.com";

// Form fields ko le rahe hain
$from = $_REQUEST['email'];
$name = $_REQUEST['name'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];

// Email ka subject fix rakhte hain
$subjectLine = "You have a message from mahalerang contact form";

// Email headers
$headers = "From: $from\r\n";
$headers .= "Reply-To: $from\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

// Email body HTML format me
$logo = 'https://i.ibb.co/8Lb7CRWM/mahl-logo.png';
$link = '#';

$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Contact Message</title></head><body>";
$body .= "<table style='width: 100%; font-family: Arial, sans-serif;'>";
$body .= "<tr><td colspan='2' style='text-align: center;'><a href='{$link}'><img src='{$logo}' alt='Logo' style='width: 200px; height: auto;'></a></td></tr>";

$body .= "<tr><td><strong>Name:</strong></td><td>{$name}</td></tr>";
$body .= "<tr><td><strong>Email:</strong></td><td>{$from}</td></tr>";
$body .= "<tr><td><strong>Subject:</strong></td><td>{$subject}</td></tr>";
$body .= "<tr><td><strong>Message:</strong></td><td>{$message}</td></tr>";
$body .= "</table>";
$body .= "</body></html>";

// Mail function
$send = mail($to, $subjectLine, $body, $headers);

// Response for AJAX (important!)
if ($send) {
    echo "success";
} else {
    echo "error";
}

?>
