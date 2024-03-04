<?php
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"]."\n\n\n".$name;
$to = "rosen1710@abv.bg";
$headers = "From: " . $name . " <" . $email . ">";
mail($to,$subject,$message,$headers);
header("Location: thankyou.html");
?>