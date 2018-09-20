<?php
function checkServerStatus($ip, $port) {
    // create a connection using the fsockopen function
    $coonectionStream = @fsockopen( $ip, $port, $errno, $errstr, 2);

    //check if the connection worked and the server is online
    if($coonectionStream >= 1) {
        return true;
    } else {
        return false;
    }
}
