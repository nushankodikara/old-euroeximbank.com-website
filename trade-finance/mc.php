<?php
$name = $_POST['FNAME'];
$email = $_POST['EMAIL'];
$number = $_POST['MOBILE'];
$country=$_POST['COUNTRY'];
$company=$_POST['COMPANY'];
$type = $_POST['INS_TYPE'];
echo $name;
$apiKey = 'f7b7d2a35debd5eab2da5305aff13d51';
$listID = '1cdeebf7df';
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
