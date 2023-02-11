<?php
$user_name = $_REQUEST['NAME'];
$user_email = $_REQUEST['EMAIL'];
    $instrument_type = $_REQUEST['INS_TYPE'];
    $companyname = $_REQUEST['COMNAME'];
    $mobile = $_REQUEST['MOBILE'];
    $city = $_REQUEST['CITY'];
    $message = $_REQUEST['MESSAGE'];
    $terms_and_conditions = $_REQUEST['terms'];
    $subscribtion = $_REQUEST['subscribtion'];
 
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 1;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "no-reply@euroeximbank.com";



//Password to use for SMTP authentication
$mail->Password = "ixojvbfzlpsihbom";

//Set who the message is to be sent from
$mail->setFrom('no-reply@euroeximbank.com', 'Euro Exim Bank');

//Set an alternative reply-to address
$mail->addReplyTo('no-reply@euroeximbank.com', 'noreply');

// //Set who the message is to be sent to
// $mail->addAddress('complianceteam@euroeximbank.com', 'Compliance Team');
// $mail->addAddress('saavan.t@euroeximbank.com', 'Saavan');
// $mail->addAddress('saavan.t@euroeximbank.com', 'Saavan');
// $mail->addAddress('ranjith@eebcs.com', 'Ranjithkumar');
// $mail->addAddress('adhithyan@euroeximbank.com ', 'Adhithyan Sundar');
$mail->addAddress('nithish.g@trdfin.in', 'Nithish George');
// $mail->addAddress('vigneshwaran@trdfin.in', 'vignesh');



//Set the subject line
$mail->Subject = ''.$user_name.' wants to discuss about '.$instrument_type.' | Euro Exim Bank';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML('

<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
margin-bottom:30px;
}

#customers td, #customers th {
  border: 1px solid white;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #06283A;
  color: white;
}
h2{
    text-align:center;
    }
</style>
</head>
<body>


<h2>User Details</h2>
<table id="customers">
  <tr>
    <th>Name</th>
    <th>Email</th>
<th>Instrument Type</th>
<th>Company Name</th>
<th>Mobile</th>
<th>City</th>
<th>Message</th>
<th> Terms and Conditions </th>
<th>Subscribe to newsletter</th>


  </tr>
  <tr>
    <td>'.$user_name.'</td>
    <td>'.$user_email.'</td>
<td>'.$instrument_type.'</td>
<td>'.$companyname.'</td>
<td>'.$mobile.'</td>
<td>'.$city.'</td>
<td>'.$message.'</td>
<td>'.$terms_and_conditions.'</td>
    <td>'.$subscribtion.'</td>

  </tr>
</table>
</table>

</body>
</html>





');

//Replace the plain text body with one created manually
$mail->AltBody = '$subject';

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
 if ($mail->send()) {
    //   echo "<script>window.location.assign('index.php')</script>";
    // echo "Success";
} 

//Section 2: IMAP
//IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
//Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
//You can use imap_getmailboxes($imapStream, '/imap/ssl') to get a list of available folders or labels, this can
//be useful if you are trying to get this working on a non-Gmail IMAP server.



function save_mail($mail) {
    //You can change 'Sent Mail' to any other folder or tag
    $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";

    //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
    $imapStream = imap_open($path, $mail->Username, $mail->Password);

    $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
    imap_close($imapStream);

    return $result;
}


?>