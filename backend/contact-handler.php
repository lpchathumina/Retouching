<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $to = "miracleretoucher@gmail.com";
    $subject = "New Message from " . htmlspecialchars($_POST['firstName']) . " " . htmlspecialchars($_POST['lastName']);
    
    $message = "
    Name: " . htmlspecialchars($_POST['firstName']) . " " . htmlspecialchars($_POST['lastName']) . "\n" .
    "Email: " . htmlspecialchars($_POST['email']) . "\n\n" .
    "Message:\n" . htmlspecialchars($_POST['message']);

    $headers = "From: " . htmlspecialchars($_POST['email']) . "\r\n" .
               "Reply-To: " . htmlspecialchars($_POST['email']) . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Message sent successfully!'); window.location.href='../pages/contact.php';</script>";
    } else {
        echo "<script>alert('Failed to send message.'); window.history.back();</script>";
    }
}
?>
