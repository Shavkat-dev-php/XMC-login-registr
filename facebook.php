<?php
require 'vendor/autoload.php';

use Facebook\Facebook;

$appId = '430234409542907'; // Sizning Facebook App ID
$appSecret = 'fb33d8f10b1d71716d40ddd975b41821'; // Sizning Facebook App Secret
$redirectUrl = 'http://localhost/fb-callback.php'; // Localhost uchun qaytarish URL

$fb = new Facebook([
    'app_id' => $appId,
    'app_secret' => $appSecret,
    'default_graph_version' => 'v15.0',
]);

$helper = $fb->getRedirectLoginHelper();
$permissions = ['email']; // Foydalanuvchidan email olish uchun ruxsat
$loginUrl = $helper->getLoginUrl($redirectUrl, $permissions);
