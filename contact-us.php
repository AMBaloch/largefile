<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
</head>
<body>
   
 
 <?php
  include('header.php');
 ?>
 
<!-- ================= HERO SECTION ================= -->

<section class="contact-hero">

    <div class="content">

        <h1>CONTACT US</h1>

        <p>
            Let’s build something amazing together with Brightlancer
        </p>

    </div>
</section>


<!-- ================= CONTACT SECTION ================= -->

<section class="contact-section">

<div class="container">

<div class="row g-4">

<!-- LEFT INFO -->

<div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">

<div class="contact-info">

<h2>Get In Touch</h2>

<p>
Brightlancer is here to help businesses grow with innovative digital solutions, creative design, 
and modern technology services. Whether you have a project idea, need professional guidance, or want to 
collaborate with our team, we’d love to hear from you.
</p>

<div class="info-box">

<div class="info-icon">
<i class="fa-solid fa-envelope"></i>
</div>

<div class="info-text">
<h5>Email</h5>
<span>brightlancer@gmail.com</span>
</div>

</div>

<div class="info-box">

<div class="info-icon">
<i class="fa-solid fa-phone"></i>
</div>

<div class="info-text">
<h5>Phone</h5>
<span>+92 336 1965865</span>
</div>

</div>

<div class="info-box">

<div class="info-icon">
<i class="fa-solid fa-location-dot"></i>
</div>

<div class="info-text">
<h5>Location</h5>
<span>Pakistan, KPK , Dera ismail Khan</span>
</div>

</div>

</div>

</div>

<!-- RIGHT FORM -->

<div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">

<div class="contact-form">

<h2>Start Your Journey with Brightlancer– Contact Us</h2>

<form id="contactForm" method="POST" action="">

<div class="row">

<div class="col-md-6">
<input type="text" class="form-control" name="name" placeholder="Your Name" required>
</div>

<div class="col-md-6">
<input type="email" name="email" class="form-control" placeholder="Your Email" required>
</div>

</div>

<input type="text" name="phone" class="form-control" placeholder="phone number">

<textarea class="form-control" name="message" placeholder="Write Your Message"></textarea>

<button type="submit" name="submit" class="send-btn">
Send Message
</button>

</form>
<?php
    //Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];



//Load Composer's autoloader (created by composer, not included with PHPMailer)
require 'phpMailer\Exception.php';
require 'phpMailer\PHPMailer.php';
require 'phpMailer\SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
  
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'eyeshah66@gmail.com';                     //SMTP username
  $mail->Password = 'mlboqnqjzsmlslrq';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
   $mail->setFrom('eyeshah66@gmail.com', 'Contact Form');
    $mail->addAddress('eyeshah66@gmail.com', 'hmri website');     //Add a recipient
   



    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'test contact form';
   $mail->Subject = "New Contact Form Message";

$mail->Body = "
<h2>New Contact Request</h2>

<b>Name:</b> $name <br><br>

<b>Email:</b> $email <br><br>

<b>Phone:</b> $phone <br><br>

<b>Message:</b><br>
$message
";

    $mail->send();
    // echo "<div class ='success'>Message has been sent</div> ";
} catch (Exception $e) {
    // echo   "<div class ='alert'>Message could't sent</div> ";
  
}

}


?>

</div>

</div>

</div>

</div>

</section>

<!-- MAP SECTION -->

<section class="map-section">

<div class="container">

<div class="map-box">

<iframe
src="https://www.google.com/maps?q=Dar%20E%20Arqam%20Girls%20College%20Mission%20Morr%20Dera%20Ismail%20Khan&output=embed"
width="100%"
height="450"
style="border:0; border-radius:20px;"
allowfullscreen=""
loading="lazy">
</iframe>

</div>

</div>

</section>
   <?php
   include('footer.php');
   ?> 
</body>
</html>