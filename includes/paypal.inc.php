<?php

$host = 'sandbox.paypal.com';
if ($socket =@ fsockopen($host, 80, $errno, $errstr, 30)) {
    $_SESSION['paypal'] = 1;
    fclose($socket);
}

else {
    $_SESSION['paypal'] = 0;
}