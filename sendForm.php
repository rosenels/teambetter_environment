<?php
$name = $_POST["name"];
$email = $_POST["email"];
$subject = mb_encode_mimeheader($_POST["subject"], "utf-8");
// $message = $_POST["message"]."\n\n\n".$name."\n\nThis message was sent with the form in the WeMatch website";
$message = '
<html>
<body>
  <p>' . $_POST["message"] . '</p>
  <br>
  <br>
  <p>' . $name . '</p>
  <br>
  <p>Това съобщение е изпратено през формата на сайта на WeMatch</p>
</body>
</html>
';
$to = "contact@wematch.bg";
$headers = "From: " . $name . " <" . $email . ">" . "\r\n" . "Bcc: rosen1710@abv.bg" . "\r\n" . "Content-Type: text/html; charset=utf-8";
mail($to,$subject,$message,$headers);
header("Location: thankyou.html");
?>