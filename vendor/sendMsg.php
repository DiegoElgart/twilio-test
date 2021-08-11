<?php


require_once "../vendor/autoload.php";


use Twilio\Rest\Client;




$sid =  getenv("TWILIO_ACCOUNT_SID");
$token = getenv("TWILIO_AUTH_TOKEN");



$link = "http://marsc.ipanel.co.il/iPanel.SMS.ShortLink/STUwNDQ3M1kM4MDQ0Mw==";



$number = +972523926909;

$twilio = new Client($sid, $token);
$message = $twilio->messages
                  ->create("whatsapp:$number", // to
                           [
                               "from" => "whatsapp:+14155238886",
                               "body" => "אתם מוזמנים לענות על סקר של iPanel ולהרוויח נקודות,
                               תודה על שיתוף הפעולה!
                               לינק לסקר:
                                $link",
                               
                              
                           ]
                  );
              

print($message->sid);
?>
