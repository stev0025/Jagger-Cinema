<?php
$to      = 'f34ee@localhost';
$subject = 'Order Ticket Successful!';
$message = '
To Whom it may concern,

Thank you for your purchase. Look forward for your visit.
Enjoy your movie and have a nice day!

Best Regards,
Jagger Cinema Management Team';
$headers = 'From: f34ee@localhost' . "\r\n" .
    'Reply-To: f34ee@localhost' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers,'-ff34ee@localhost');


?>