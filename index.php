<?php

ini_set('display_errors', 'on');
ini_set('error_reporting', E_ALL | E_NOTICE);

require_once 'vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'));
$transport->setUsername('sokolwork444@gmail.com');
$transport->setPassword('тутПишешьПароль');
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Wonderful Subject'))
    ->setFrom(['sokolwork444@gmail.com' => 'Anton'])
    ->setTo(['тутПочтаНаКоторуюОтправлять'])
    ->setBody('Сообщение через swiftmailer')
;

// Send the message
$result = $mailer->send($message);
var_dump($result);


