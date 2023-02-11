<?php
if(isset($_POST['submit'])){
  require('phpmailer/class.phpmailer.php');
$name=$_POST['name'];
$jobtype=$_POST['jobtype'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
  $mail = new PHPMailer();
  $mail->IsSMTP();
  $mail->SMTPDebug = 0;
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = "ssl";
  $mail->Port     = 465;
  $mail->Username = "no-reply@euroeximbank.com";
  $mail->Password = "qcjwsfxnpufprbql";
  $mail->Host     = "smtp.gmail.com";
  $mail->Mailer   = "smtp";
  $mail->setFrom('no-reply@euroeximbank.com', 'Euro Exim Bank Careers');
  $mail->addAddress('saavan.t@euroeximbank.com', 'Saavan');
   $mail->addAddress('ranjith@eebcs.com', 'Ranjithkumar');
   $mail->addAddress('hr@euroeximbank.com', 'HR');
  $mail->Subject = 'Euro Exim Bank Careers -  '.$name.' apply for '.$jobtype.'';
  $mail->isHTML(true);
$mail->Body     = "<h3>Euro Exim Bank Careers: Job type: $jobtype<br />
Name: $name<br />
Job Type: $jobtype<br />
Mobile Number: $mobile<br />
Email: $email<br /></h3>";
  foreach ($_FILES["attachment"]["name"] as $k => $v) {
      $mail->AddAttachment( $_FILES["attachment"]["tmp_name"][$k], $_FILES["attachment"]["name"][$k] );
  }


  if(!$mail->Send()) {
  	$msg= "<p class='error'>Problem in Sending Mail.</p>";
  } else {
  	$msg= "<p class='success'>Successfully sent your job details.</p>";
  }
}
 ?>
