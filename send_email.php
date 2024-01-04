<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $full_name = $_POST["full_name"];
  $email = $_POST["email"];
  $phone_number = $_POST["phone_number"];
  $message = $_POST["message"];

  $to_email = "za235h@gmail.com";
  $subject = "New Contact Form Submission";
  $headers = "From: $email";

  $email_body = "Name: $full_name\nEmail: $email\nPhone Number: $phone_number\nMessage: $message";

  mail($to_email, $subject, $email_body, $headers);
}
?>
