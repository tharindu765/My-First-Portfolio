<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['description']);

    $to = 'tharindurandika25@gmail.com';
    $subject = 'New Message from ' . $name;
    $body = "Hello Tharindu,\n\nYou have received a new message from your portfolio contact form.\n\n" .
            "Name: $name\n" .
            "Email: $email\n\n" .
            "Message:\n$message\n";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo 'Email sent successfully';
    } else {
        echo 'Email sending failed';
    }
}
?>
