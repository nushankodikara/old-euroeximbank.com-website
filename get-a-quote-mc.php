<?php
$user_name = $_POST['NAME'];
$user_email = $_POST['EMAIL'];
    $instrument_type = $_POST['INS_TYPE'];
    $companyname = $_POST['COMNAME'];
    $mobile = $_POST['MOBILE'];
    $city = $_POST['CITY'];
    $message = $_POST['MESSAGE'];
    $terms = $_POST['terms'];
    $subscribtion = $_POST['subscribtion'];
$apiKey = 'b7c8ab6c5055c0e7b9722f3a931f452b';
$listID = 'f12dfa26de';
$memberID = md5(strtolower($user_email));
$dataCenter = 'us20';
$url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listID . '/members/' . $memberID;
$json = json_encode([
	'email_address' => $user_email,
	'status'        => 'subscribed',
	'merge_fields'  => [
                        'NAME'=>$user_name ,
                        'EMAIL'  =>  $user_email,
                        'INS_TYPE' => $instrument_type,
                        'COMNAME' =>$companyname,
                        'MOBILE' =>$mobile,
                        'CITY' =>$city,
                        'MESSAGE' => $message,
                        'TERMS' => $terms,
                        'SUBSCRIBE' => $subscribtion,
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
