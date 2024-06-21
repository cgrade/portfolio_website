<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message']);

    // Process the data, e.g., save to database or send an email
    // For example, sending an email
    $to = 'mrgrade55@gmail.com'; // Specify your email address
    $subject = 'Message from Contact Form';
    $body = "You have received a new message from $name.\n\n"."Here is the message:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message successfully sent!";
    } else {
        echo "Message could not be sent.";
    }
}
?>