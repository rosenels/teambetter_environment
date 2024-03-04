<?php
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"]."\n\n\n".$name."\n\nТова съобщение е изпратено през формата на сайта на WeMatch";
$to = "rosen.i.marinov.2020@elsys-bg.org";
$headers = "From: " . $name . " <" . $email . ">" . "\r\n" . "Bcc: rosen1710@abv.bg";
mail($to,$subject,$message,$headers);
header("Location: thankyou.html");
?>