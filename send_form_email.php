<?php
    $toEmail = "ramanlakshan1995@gmail.com";
    $mailHeaders = "From: " . $_POST["userName"] . "<". $_POST["userEmail"] .">\r\n";
    if(mail($toEmail, $_POST["subject"], $_POST["content"], $mailHeaders)) {
        $response = array('status' => 'success', 'message' => 'Your message has been sent successfully. We will get back to you shortly.');
    } else {
        $response = array('status' => 'error', 'message' => 'Sorry, your message could not be sent. Please try again later.');
    }
?>
