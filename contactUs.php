<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$feedback = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    if ($name && $email && $phone && $message) {
        $mail = new PHPMailer(true);
        try {
            // Server settings
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
            $mail->isHTML(true);
            $mail->Subject = 'New Contact Form Message';
            $mail->Body = "<p><strong>Name:</strong> $name</p>
                           <p><strong>Email:</strong> $email</p>
                           <p><strong>Phone:</strong> $phone</p>
                           <p><strong>Message:</strong><br>$message</p>";

            $mail->send();
            $feedback = "<div class='alert alert-success'>Message sent successfully!</div>";
        } catch (Exception $e) {
            $feedback = "<div class='alert alert-danger'>Message could not be sent. Error: {$mail->ErrorInfo}</div>";
        }
    } else {
        $feedback = "<div class='alert alert-warning'>Please fill in all fields.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/vendor.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" type="text/css" href="style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Marcellus&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<?php include 'header.php'; ?>
<body>

<section class="contact-us-section py-5">
  <div class="container">
    <h2 class="text-center mb-4">Contact Us</h2>
    <p class="text-center text-muted mb-5">We’d love to hear from you! Fill out the form below to get in touch.</p>
    
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <?php echo $feedback; ?>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="contactForm" novalidate>
          <div class="mb-3">
            <label for="name" class="form-label" style="color: black">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
            <div class="invalid-feedback">Please enter your name.</div>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label" style="color: black">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" required>
            <div class="invalid-feedback">Please enter a valid email address.</div>
          </div>

          <div class="mb-3">
            <label for="phone" class="form-label" style="color: black">Phone Number</label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
            <div class="invalid-feedback">Please enter your phone number.</div>
          </div>

          <div class="mb-3">
            <label for="message" class="form-label" style="color: black">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            <div class="invalid-feedback">Please enter your message.</div>
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-primary px-4" style="border-radius: 10px; background-color: #FFAC1C">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Bootstrap and custom JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
  const contactForm = document.getElementById("contactForm");
  
  contactForm.addEventListener("submit", function (event) {
    if (!contactForm.checkValidity()) {
      event.preventDefault();
      event.stopPropagation();
    }
    contactForm.classList.add("was-validated");
  }, false);
});
</script>
</body>
</html>
