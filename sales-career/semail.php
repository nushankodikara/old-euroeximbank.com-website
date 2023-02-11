<?php
if(isset($_POST['submitJobRequest'])){
require 'PHPMailer/PHPMailerAutoload.php';
$name = $_POST['Name'];
//$designation = $_REQUEST['Designation'];
$email = $_POST['email'];

$mobile = $_POST['Mobile'];
//$company_name = $_REQUEST['Name-of-your-Company'];
// $turn_over = $_REQUEST['Turnover-of-your-Company'];
$Source = $_POST['Source'];
$country = $_POST['Country'];
// $name=$_POST['name'];
// $jobtype=$_POST['jobtype'];
// $email=$_POST['email'];
// $mobile=$_POST['mobile'];
  $mail = new PHPMailer();
  $mail->IsSMTP();
  $mail->SMTPDebug = 0;
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = "ssl";
  $mail->Port     = 465;
  $mail->Username = "no-reply@euroeximbank.com";
  $mail->Password = "N0Password";
  $mail->Host     = "smtp.gmail.com";
  $mail->Mailer   = "smtp";
  $mail->setFrom('no-reply@euroeximbank.com', 'Euro Exim Bank Sales Career');
  //$mail->addAddress('saavan.t@euroeximbank.com', 'Saavan');
  //$mail->addAddress('ranjith@eebcs.com', 'Ranjithkumar');
  $mail->addAddress('arunmozhi@trdfin.in', 'Arun');
 // $mail->addAddress('hr@euroeximbank.com', 'Human Resource Euro Exim Bank');
  $mail->Subject = "Euro Exim Bank Sales Careers -  $name apply from $country";
  $mail->isHTML(true);
$mail->Body     = "<h3><u>Euro Exim Bank Sales Careers: </u> <br />
Name: $name<br />

Mobile Number: $mobile<br />
Email: $email<br />
Source: '.$Source.'<br/>
Country: '.$country.'<br/>
</h3>";

  foreach ($_FILES["attachment"]["name"] as $k => $v) {
      $mail->AddAttachment( $_FILES["attachment"]["tmp_name"][$k], $_FILES["attachment"]["name"][$k] );
  }


  if(!$mail->Send()) {
  	$msg= "<p class='error'>Problem in Sending Mail.</p>";
  } else {
  	$msg= "<p class='success-message'>Your job details are successfully sent.</p>";
  }
}
 ?>

