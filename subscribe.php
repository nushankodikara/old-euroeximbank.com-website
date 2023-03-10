<?php
session_start();
if(isset($_POST['submit'])){
    $email = $_POST['EMAIL'];
    if(!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        // MailChimp API credentials
        $apiKey = '0b301b1ddd6f5690fd3a0ffb3abee85e-us4';
        $listID = '1cc25d7312';
        
        // MailChimp API URL
        $memberID = md5(strtolower($email));
        $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
        $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listID . '/members/' . $memberID;
        
        // member information
        $json = json_encode([
            'email_address' => $email,
            'status'        => 'subscribed'
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
        
        // store the status message based on response code
        if ($httpCode == 200) {
            $_SESSION['msg'] = '<p style="color: white;background-color:transparent;font-size:14px;margin-top:30px">You have successfully subscribed to Euro Exim Bank.</p>';
        } else {
            switch ($httpCode) {
                case 214:
                    $msg = 'You are already subscribed.';
                    break;
                default:
                    $msg = 'Some problem occurred, please try again.';
                    break;
            }
            $_SESSION['msg'] = '<p  style="color: white;background-color:transparent;font-size:14px;margin-top:30px;">'.$msg.'</p>';
        }
    }else{
        $_SESSION['msg'] = '<p style="color: #EA4335;background-color:transparent;font-size:14px;margin-top:30px;">Please enter valid email address.</p>';
    }
}

