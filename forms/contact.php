<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // You can perform further validation here

    // Process the form data (e.g., send an email)
    // For example, sending an email using PHP's built-in mail function:
    $to = 'elimamiayoub7@gmail.com'; // Replace with your email
    $subject = 'New Contact Form Submission';
    $headers = 'From: ' . $email;

    if (mail($to, $subject, $message, $headers)) {
        echo 'Message sent successfully. Thank you, ' . $name . '.';
    } else {
        echo 'Message could not be sent. Please try again later.';
    }
} else {
    echo 'Invalid request. Please submit the form.';
}
?>
