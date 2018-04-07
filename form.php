<?php

if (isset($_POST['submit'])) {
  $subject = $_POST['subject'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $recipient = $_POST['recipient'];

$mailTo = $recipient;
$headers = "From: ".$email;
$txt = $message;

mail($mailTo, $subject, $txt, $headers);
header("Location: success.html");
}

?>
