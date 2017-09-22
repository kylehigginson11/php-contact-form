<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $from = 'Our Website Contact Form';
    $to = 'info@example.com';
    $subject = 'Enquiry from Website Contact Form';

    $message = "From: $name\n E-Mail: $email\n Message:\n $phone";

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= "To: $to\r\n";

    if (mail ($to, $subject, $message, $headers)) {
        echo "success";
    } else {
        echo "invalid";
    }
?>