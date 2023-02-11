<?php
$name = $_REQUEST['Your-Name'];
$designation = $_REQUEST['Designation'];
$email = $_REQUEST['Mail-id'];
$mobile = $_REQUEST['Mob-No-with-country-code'];
$company_name = $_REQUEST['Name-of-your-Company'];
// $turn_over = $_REQUEST['Turnover-of-your-Company'];
$city = $_REQUEST['City'];
$country = $_REQUEST['Country'];
$category = $_REQUEST['Under-which-category-you-wants-us-to-recognise'];
$other_category = $_REQUEST['Other-Category'];
$instruments = $_REQUEST['What-type-of-instruments-does-your-business-need-normally'];
$instrument_value = $_REQUEST['What-is-the-average-value-of-the-instruments-that-your-business-requires'];
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
$mail->Password = "ixojvbfzlpsihbom";
$mail->setFrom('no-reply@euroeximbank.com', 'Lead Generation');
$mail->addReplyTo($email, $name);
$mail->addAddress('nithish.g@trdfin.in', 'Nithish George');
// $mail->addAddress('ranjith@trdfin.in', 'Ranjithkumar');
// $mail->addAddress('arunmozhi@trdfin.in', 'N A M V');
$mail->Subject = 'New Lead is added';
$mail->msgHTML('

<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <p>Lead sheet Link: <a href="https://docs.google.com/spreadsheets/d/1Gj0md6OSkgV_AKVrU2M6rTQha-Oe6Yriu7koCZHPxrY/edit?usp=sharing">Lead Sheet</a>
    <p>Name : '.$name.'</p>
    <p>Email : '.$email.'</p>
    <p>Mobile : '.$mobile.'</p>
    <p>City: '.$city.'</p>
    <p>Country: '.$country.'</p>
    <p>Company Name: '.$company_name.'</p>
    <p>Designation: '.$designation.'</p>
    <p>Category Type : '.$category.'</p>
    <p>Other Category Type : '.$other_category.'</p>
    <p>Instrument Type : '.$instruments.'</p>
    <p>Instrument Value : '.$instrument_value.'</p>
</body>
</html>
');
// $mail->AltBody = 'New Lead added from EEB Landing Page';
 if ($mail->send()) {
} 
function save_mail($mail) {
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";
    $imapStream = imap_open($path, $mail->Username, $mail->Password);
    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);
    return $result;
}
?>