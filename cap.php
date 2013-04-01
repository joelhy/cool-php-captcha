<?php
error_reporting(E_ALL);
ini_set('display_errors', 1); 

require 'Captcha.php';

$captcha = new SimpleCaptcha();
$captcha->createImage();


