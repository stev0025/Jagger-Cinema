<?php
$email = $_SESSION['email'] ;
$name = $_SESSION['name'];
$payment = $_SESSION['payment'];
$timing = $_SESSION['timing'];
$date = $_SESSION['date'];
$movie = $_SESSION['movie'];

$to      = 'f34ee@localhost';
$subject = 'Order Ticket Successful!';
$message = "
Dear $name,

Thank you for your purchase of $movie tickets for $date at $timing.
Payment with $payment.
We look forward to your visit.
Enjoy your movie and have a nice day!

Best Regards,
Jagger Cinema Management Team";
$headers = 'From: f34ee@localhost' . "\r\n" .
    'Reply-To: f34ee@localhost' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers,'-ff34ee@localhost');


?>