<?php
  if($_POST["submit"]){
    $message = "";
    $name = $_POST["name"];
    $comp_name = $_POST["company-name"];
    $email = $_POST["email-id"];
    $cont_no = $_POST["contact-no"];
    $msg = $_POST["message"];

    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->Host='smtp.gmail.com';
    $mail->Port =587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure="tls";
    $mail->Username="kaizeninfotek@gmail.com";
    $mail->Password="kaizen@dreambig";

    $headers = 'From: YourLogoName info@domain.com' . "\r\n" ;
    $headers .='Reply-To: '. $email . "\r\n" ;
    $headers .='X-Mailer: PHP/' . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

    $mail->Headers = $headers;

    $mail->setFrom($email,$name);
    $mail->addAddress("abhijitsarvade39@gmail.com");

    $mail->isHTML(true);
    $mail->Subject="Enquiry From Site : " .$name;
    $mail->Body="<b>Name : </b>" .$name. "<br><b>Company Name : </b>" .$comp_name. "<br><b>Email ID : </b>" .$email. "<br><b>Contact No. : </b>" .$cont_no. "<br><b>Message : </b><br><p>" .$msg. "</p>";

    if(!$mail->send()){
      $message = "Failed to send Details!";
    } else {
      $message = "Thank you contacting Us! We will get back to you soon!";
    }
  } else {
    $message = "Failed to send Details!";
  }
  header("Location: index.php?message=$message");
?>
