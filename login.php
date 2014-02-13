<?php

require_once dirname(__FILE__) . '/config.php';

/**
 * Log in to vCloud Director.
 */
// Get parameters from command line
$httpConfig = array('ssl_verify_peer'=>false, 'ssl_verify_host'=>false);

$service = VMware_VCloud_SDK_Service::getService();
$service->login($server, array('username'=>$user, 'password'=>$pswd), $httpConfig, $sdkversion);
?>

