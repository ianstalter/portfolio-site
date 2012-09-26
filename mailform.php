<?php
$to = "ianstalter@debrucellc.com";
$subject = "$_POST[subject]";
$message = "$_POST[message]";
$from = "$_POST[email]";
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo "Mail Sent.";
?> 