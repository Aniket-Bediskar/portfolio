<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Email recipient
  $to = "abediskar17@gmail.com";

  // Email headers
  $headers = "From: $name <$email>" . "\r\n";
  $headers .= "Reply-To: $email" . "\r\n";
  $headers .= "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // Compose the email body
  $email_body = "<h2>New Contact Form Submission</h2>";
  $email_body .= "<p><strong>Name:</strong> $name</p>";
  $email_body .= "<p><strong>Email:</strong> $email</p>";
  $email_body .= "<p><strong>Subject:</strong> $subject</p>";
  $email_body .= "<p><strong>Message:</strong></p><p>$message</p>";

  // Send the email
  if (mail($to, $subject, $email_body, $headers)) {
    echo "Message sent successfully.";
  } else {
    echo "Message could not be sent.";
  }
}
?>
