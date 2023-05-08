<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

if(isset($_POST['send'])){

   $name = htmlentities($_POST['name']);
   $email = htmlentities($_POST['email']);
   $subject = htmlentities($_POST['subject']);
   $message = htmlentities($_POST['message']);
 
   // Form validation
   if (empty($name) || empty($email) || empty($subject) || empty($message)) {
     alert ("Please fill out all fields");
     exit;
     header("Location: ./contact-us.php");
   }

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'hiferjugarap@gmail.com';
    $mail->Password = 'sgwtilzkbsnnpuxi';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress('hiferjugarap@gmail.com');
    $mail->Subject = ("$email ($subject)");
    $mail->Body = $message;
    $mail->send();

    header("Location: ./contact-us.php");
   }

require ('inc/head.php');
include ('inc/header.php');

?>

<section class="contact" id="contact">


      <div class="row">
      
      <form action="contact-us.php" method="post" onsubmit="return validateForm()">

         <div class="container">
         <h3 class="heading">contact us now!</h3>

         <div class="error-message" id="error-message"></div>
            <div class="box">
               <p>name <span>*</span></p>
               <input type="text" class="input" name="name" placeholder="Your Name">
            </div>
            <div class="box">
               <p>email <span>*</span></p>
               <input type="text" class="input" name="email" placeholder="Your Email">
            </div>
            <div class="box">
               <p>subject <span>*</span></p>
               <input type="text" class="input" name="subject" placeholder="Subject">
            </div>
            <div class="box">
            <p>Message <span>*</span></p>
            <textarea class="input" name="message" placeholder="Your message here"></textarea>
            </div>
            
         <input type="submit" value="Send" name="send" class="btn">

      </form>
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61788.451306332965!2d120.9919897503722!3d14.554672175901873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c90264a0ed01%3A0x2b066ed57830cace!2sMakati%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1682823124744!5m2!1sen!2sph" width="500" height="350" style="margin-left:25%; margin-bottom:5%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>


<?php 
include ('inc/footer.php');
require ('inc/script.php');
?>