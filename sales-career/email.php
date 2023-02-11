<?php
$name = $_REQUEST['Name'];
$time = $_REQUEST['time'];
//$designation = $_REQUEST['Designation'];
$email = $_REQUEST['email'];

$mobile = $_REQUEST['Mobile'];
//$company_name = $_REQUEST['Name-of-your-Company'];
// $turn_over = $_REQUEST['Turnover-of-your-Company'];
$Source = $_REQUEST['Source'];
$country = $_REQUEST['Country'];
//$category = $_REQUEST['Under-which-category-you-wants-us-to-recognise'];
//$other_category = $_REQUEST['Other-Category'];
//$instruments = $_REQUEST['What-type-of-instruments-does-your-business-need-normally'];
//$instrument_value = $_REQUEST['What-is-the-average-value-of-the-instruments-that-your-business-requires'];
// $instrument_time = $_REQUEST['How-soon-you-want-this-instruments-to-be-issued'];
// $referred_by = $_REQUEST['Referred-by'];
// $message = $_REQUEST['Any-further-information-you-would-like-to-share'];
date_default_timezone_set('Etc/UTC');
require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 1;
$mail->Debugoutput = 'html';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "no-reply@euroeximbank.com";
$mail->Password = "N0Password";
$mail->setFrom('no-reply@euroeximbank.com', 'Sales Executive Enquiry');
$mail->addReplyTo($email, $name);
// $mail->addAddress('nithish.g@trdfin.in', 'Nithish George');
// $mail->addAddress('ranjith@trdfin.in', 'Ranjithkumar');
//<p>Lead sheet Link: <a href="https://docs.google.com/spreadsheets/d/1ixjNXKWAGaW-EuFFcWcLODJrfSvJLxpBh_fsRq6FydY/edit?usp=sharing">Mobile Lead Sheet</a>
// <p>Company Name: '.$company_name.'</p>
// <p>Designation: '.$designation.'</p>
// <p>Category Type : '.$category.'</p>
// <p>Other Category Type : '.$other_category.'</p>
// <p>Instrument Type : '.$instruments.'</p>
// <p>Instrument Value : '.$instrument_value.'</p>hr@euroeximbank-sales.com
// $mail->addAddress('arunmozhi@trdfin.in', 'N A M V');
$mail->addAddress('hr@euroeximbank-sales.com', 'HR');
// $mail->addAddress('arunnamv@gmail.com', 'test');
$mail->Subject = 'New Sales Executive Enquiry is added';
date_default_timezone_set("Asia/Kolkata");
$today = date("j F Y, g:i A");
$mail->msgHTML('

    
<!DOCTYPE html>
<html>
<head>
</head>
<body style="font-size:20px;">
    
    <p>Name : '.$name.'</p>
    <p>Email : '.$email.'</p>
    <p>Mobile : '.$mobile.'</p>
    <p>Source: '.$Source.'</p>
    <p>Country: '.$country.'</p>
    <p>Applied On: '.$today.'</p>
   
</body>
</html>
');
// $mail->AltBody = 'New Lead added from EEB Landing Page';
//  if ($mail->send()) {
     

// function save_mail($mail) {
//     $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";
//     $imapStream = imap_open($path, $mail->Username, $mail->Password);
//     $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
//     imap_close($imapStream);
//     return $result;
// }
foreach ($_FILES["upload"]["name"] as $k => $v) {
    $mail->AddAttachment( $_FILES["upload"]["tmp_name"][$k], $_FILES["upload"]["name"][$k] );
}
//  }

if(!$mail->Send()) {
    $msg= "<p class='error'>Problem in Sending Mail.</p>";
} else {
    $msg= "<p class='success-message'>Your job details are successfully sent.</p>";
}
// if (){
//     //You need to redirect
//     header("Location: http://www.w3schools.com"); /* Redirect browser */
//     exit();
//    }
//   else{
//     // do some
//   }
?>
<!-- <script>
    alert("redirect");
    location.replace("https://www.w3schools.com")
</script> -->