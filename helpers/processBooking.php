<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form data
    $full_name = strip_tags(trim($_POST['full_name']));
    $email     = strip_tags(trim($_POST['email']));
    $phone     = strip_tags(trim($_POST['phone']));
    $persons   = strip_tags(trim($_POST['persons']));
    $month     = strip_tags(trim($_POST['month']));
    $message   = strip_tags(trim($_POST['message']));

    // Your email address (CHANGE THIS!)
    $to = "abdulwahidsadiq15@gmail.com";        // ←←← CHANGE TO YOUR EMAIL
    $subject = "New Booking Request - Majestic Experience";

    // Email body
    $body = "New Booking Request Received!\n\n";
    $body .= "Full Name: " . $full_name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Phone: " . $phone . "\n";
    $body .= "Number of Persons: " . $persons . "\n";
    $body .= "Departure Month: " . $month . "\n\n";
    $body .= "Additional Message:\n" . ($message ?: "No message provided") . "\n\n";
    $body .= "Submitted on: " . date("d M Y, h:i A");

    // Headers
    $headers = "From: abdulwahidsadiq15@gmail.com\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8";


    $mail = new PHPMailer(true);

    try {
        // SMTP config
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'abdulwahidsadiq15@gmail.com';
        $mail->Password   = 'jlzi vwya dsvc yclf'; // NOT your real password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Sender & receiver
        $mail->setFrom('abdulwahidsadiq15@gmail.com', 'Majestic Tours');
        $mail->addAddress('abdulwahidsadiq15@gmail.com');
        $mail->addReplyTo($email, $full_name);

        // Content
        $mail->isHTML(false);
        $mail->Subject = $subject;
        $mail->Body    = $body;

        $mail->send();
        echo "Email sent successfully";

    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }



    // Send email
    if ($mail) {
        echo "<h2>Thank you!</h2>";
        echo "<p>Your booking request has been received. We will contact you soon.</p>";
        echo "<a href='index.php'>← Back to Home</a>";
    } else {
        echo "<h2>Sorry!</h2>";
        echo "<p>There was a problem sending your request. Please try again or contact us directly.</p>";
    }

} else {
    // If someone tries to access directly
    header("Location: contactUs.php"); 
    exit;
}
?>