<?php

    $to = "esaylik@gmail.com";
    $from = $_REQUEST['esaylik@gmail.com'];
    $name = $_REQUEST['Smart Assist'];
    $headers = "From:Smart Assist $from";
    $subject = "You have a message from your Template";

    $fields = array();
    $fields{"name"}    = "Name";
    $fields{"email"}    = "Email";
    $fields{"phone"}    = "Phone";
    $fields{"web"}    = "Website";
    $fields{"message"}   = "Message";
    

    $body = "Here is the message you got:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>