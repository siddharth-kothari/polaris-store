<?php

if (isset($_SERVER['HTTP_USER_AGENT'])) {
    $agent = $_SERVER['HTTP_USER_AGENT'];
}

if (strlen(strstr($agent, 'Firefox')) > 0) {
    $browser = 'firefox';
    $crossx = 0;
} else {
    $crossx = 1;
}