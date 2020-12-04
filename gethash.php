<?php 

// Enable RainLoop Api and include index file 
$_ENV['RAINLOOP_INCLUDE_AS_API'] = true;
include './index.php';

//
// Get sso hash
//
// @param string $email
// @param string $password
// @return string 
//

$username = $_GET["username"];
$password = $_GET["password"];

$ssoHash = \RainLoop\Api::GetUserSsoHash($username, $password, array(), 1000000000000000);

echo $ssoHash;

// header('Location: https://apm-mail.isap.team/?sso&hash='.$ssoHash);

 ?>