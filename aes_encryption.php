<?php
$key = "404904684B7A0952BEC64EDCA82DD21E";
$iv = "70D6793CD4265D4ED4CAB497EB104FF1";

$keyBytes = hex2bin($key);
$ivBytes = hex2bin($iv);

$text = "1733324800 lvcangetinfo";

$blockSize = 16;
$paddingLength = $blockSize - (strlen($text) % $blockSize);
$textPadded = $text . str_repeat("\x00", $paddingLength);

$cipher = openssl_encrypt($textPadded, 'aes-128-cbc', $keyBytes, OPENSSL_RAW_DATA | OPENSSL_NO_PADDING, $ivBytes);

$base64Cmd = base64_encode($cipher);

echo $base64Cmd;
?>
