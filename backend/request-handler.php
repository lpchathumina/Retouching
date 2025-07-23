<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $to = "miracleretoucher@gmail.com";
  $subject = "Quote Request from " . $_POST["customerName"];
  
  $message = "Photographer: " . $_POST["photographerName"] . "\n"
           . "Customer: " . $_POST["customerName"] . "\n"
           . "Gave Date: " . $_POST["gaveDate"] . "\n"
           . "Last Date: " . $_POST["lastDate"] . "\n"
           . "Email: " . $_POST["email"] . "\n"
           . "Mobile: " . $_POST["mobile"] . "\n"
           . "Images Count: " . $_POST["imagesCount"] . "\n"
           . "Category: " . $_POST["category"] . "\n"
           . "Drive Link: " . ($_POST["driveLink"] ?? "N/A") . "\n\n"
           . "Message:\n" . $_POST["message"];

  $headers = "From: " . $_POST["email"] . "\r\n" .
             "Reply-To: " . $_POST["email"] . "\r\n";

  if (mail($to, $subject, $message, $headers)) {
    echo "<script>alert('Message sent successfully!'); window.location.href='../pages/request.php';</script>";
  } else {
    echo "<script>alert('Failed to send message.'); window.history.back();</script>";
  }
}
?>
