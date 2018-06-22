<?php
session_start();
//session_unset();session_destroy();

ini_set('include_path', 'C:\wamp\www\epotasks\vendor/autoload.php');
include_once '../vendor/autoload.php';

$redirectURL = 'http://localhost/epotasks/task1/task1form.php';

//Call Google API
$client = new Google_Client();
$client->setAuthConfig('../credit.json');
$client->setDeveloperKey("AIzaSyDfZ44Vu9rkAuTf7h5rxffdO_Qwwyw9uSI");
$client->setRedirectUri($redirectURL);
$client->setScopes('email');
$guzzleClient = new \GuzzleHttp\Client(array( 'curl' => array( CURLOPT_SSL_VERIFYPEER => false, ), ));
$client->setHttpClient($guzzleClient);

if(isset($_GET['code'])){
	$token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
	$client->setAccessToken($token);
	$_SESSION['id_token_token'] = $token;
    header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
}
if(!empty($_SESSION['id_token_token']) && isset($_SESSION['id_token_token']['id_token'])){
	$client->setAccessToken($_SESSION['id_token_token']);
}else{
	$authUrl = $client->createAuthUrl();
}

if($client->getAccessToken()){
	$token_data = $client->verifyIdToken();
	$_SESSION['email']=$token_data['email'];
	$_SESSION['auth']=true;
}
?>
