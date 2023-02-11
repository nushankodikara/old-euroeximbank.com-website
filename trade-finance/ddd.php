<?php
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$country=$_POST['country'];
$company=$_POST['company'];
$type = $_POST['INS_TYPE'];
$apiKey = '1fd8ec9f6a60cecc1acd30710cb03b1c';
$listID = 'c169361fe3';
$memberID = md5(strtolower($email));
$dataCenter = 'us20';
$url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listID . '/members/' . $memberID;
$json = json_encode([
	'email_address' => $email,
	'status'        => 'subscribed',
	'merge_fields'  => [
		'FNAME'     => $name,
        'MOBILE'     => $number,
        'COUNTRY'    => $country,
	'COMPANY'    => $company,
	'INS_TYPE' => $type
	
	]
]);
// send a HTTP POST request with curl
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
$result = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
if ($httpCode == 200) {
	header('Location:https://www.euroeximbank.com/eeb-landing-page/thankyou.html');
	// $success = "Thank you for submitting your information.";
}
else{
	$success = "Message Sending Failed, try again";
}
}
?>