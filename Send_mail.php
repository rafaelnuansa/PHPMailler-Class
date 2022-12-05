<?php
    require_once "Mail.php";
 
    $senderName = "WEB DEVELOPER UNIDA";
    $senderEmail = "_EMAILSENDER";
    $senderEmailPassword = "_PASSWORD";
    $recieverEmail = $_POST['email'];
    $subject = $_POST['subject'];
    $body = $_POST['body'];
    
    $mailer = new Mail($senderName,$senderEmail,$senderEmailPassword);
    $mailer->sendMail($recieverEmail,$subject,$body);

?>