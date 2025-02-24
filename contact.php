<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $mobile = htmlspecialchars($_POST["mobile"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "bibekyogi6462@gmail.com"; // Your email
    $headers = "From: $email" . "\r\n" . "Reply-To: $email" . "\r\n";
    $fullMessage = "Name: $name\n";
    $fullMessage .= "Email: $email\n";
    $fullMessage .= "Mobile: $mobile\n";
    $fullMessage .= "Subject: $subject\n\n";
    $fullMessage .= "Message:\n$message";

    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "<script>alert('Message sent successfully!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Failed to send message. Please try again.'); window.location.href='index.html';</script>";
    }
}
?>
