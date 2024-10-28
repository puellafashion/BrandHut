<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Adjust the path as necessary

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['customer_name'];
    $email = $_POST['customer_email'];
    $message = $_POST['message_text'];
    $product_name = $_POST['product_name'];

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'puellafashions@gmail.com';
            $mail->Password = 'xqqpshllsokvtvjy';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Recipient
            $mail->setFrom($email, $name);
            $mail->addAddress('abhishekkumar96400@gmail.com', 'Puella');

        // Content
        $mail->isHTML(true);                                      // Set email format to HTML
        $mail->Subject = 'Product Enquiry: ' . $product_name;
        $mail->Body    = "<p>You have received a new enquiry.</p>
                          <p><strong>Name:</strong> $name</p>
                          <p><strong>Email:</strong> $email</p>
                          <p><strong>Message:</strong><br>$message</p>";
        $mail->AltBody = "You have received a new enquiry.\nName: $name\nEmail: $email\nMessage: $message";

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
