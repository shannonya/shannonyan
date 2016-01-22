<?php
 echo "$phone";
require "./twilio-php-master/Services/Twilio.php";
 
// set your AccountSid and AuthToken from www.twilio.com/user/account
$AccountSid = "ACbacae9ec9071a3351ad569a14b80e212";
$AuthToken = "8194f379d4191dd0699927dd5cdbece8";
 
$client = new Services_Twilio($AccountSid, $AuthToken);
 
$message = $client->account->messages->create(array(
    "From" => "646-798-2999",
    "To" => $_POST["phone"],
    "Body" => $_POST["message"],
    
    
));
 
// Display a confirmation message on the screen
echo "Sent message {$message->sid}";
?>