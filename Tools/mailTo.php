<?php
    $to = 'megaofori99@yahoo.com';
    $subject = 'Sample Subject';
    $message = 'Hi. This is a sample message.';
    $headers = 'From: webmaster@royyuuki.elementfx.com' . "\r\n" .
        'Reply-To: no-reply@royyuuki.elementfx.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    echo (mail($to, $subject, $message, $headers)) ? 'Message sent!' : 'Message not sent!';
?>