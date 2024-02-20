<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email recipient (owner's email)
    $to = '2krsconstruction@gmail.com';

    // Email subject
    $subject = 'New Message from 2KRS Construction Contact Form';

    // Email message
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";

    // Email headers
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        // If email is sent successfully
        echo '<script>alert("Your message has been sent. We will get back to you shortly."); window.location.replace("index.html");</script>';
    } else {
        // If there was an error sending email
        echo '<script>alert("There was a problem sending your message. Please try again later."); window.location.replace("index.html");</script>';
    }
}
?>  