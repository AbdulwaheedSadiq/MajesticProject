<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Your email address (CHANGE THIS!)
    $to = "mesudluqman@gmail.com";        // ←←← CHANGE TO YOUR EMAIL
    $subject = "New Contact Us Message - Majestic Experience";

    // Email body
    $body = "📩 NEW CONTACT MESSAGE\n";
    $body .= "==============================\n\n";

    $body .= "👤 Sender Details:\n";
    $body .= "--------------------------------\n";
    $body .= "Full Name : " . $name . "\n";
    $body .= "Email     : " . $email . "\n\n";

    $body .= "💬 Message:\n";
    $body .= "--------------------------------\n";
    $body .= ($message ?: "No message provided") . "\n\n";

    $body .= "⏰ Submitted On:\n";
    $body .= "--------------------------------\n";
    $body .= date("l, d M Y - h:i A") . "\n";

    $body .= "\n==============================\n";
    $body .= "This message was sent from your website contact form.";

    // Headers
    $headers = "From: mesudluqman@gmail.com\r\n";
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
        $mail->setFrom('mesudluqman@gmail.com', 'Majestic Tours');
        $mail->addAddress('mesudluqman@gmail.com');
        $mail->addCC('abdulwahidsadiq15@gmail.com');
        $mail->addReplyTo($email, $name);

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
        echo "<p>Your message has been received. We will contact you soon.</p>";
        echo "<a href='../index.php'>← Back to Home</a>";
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