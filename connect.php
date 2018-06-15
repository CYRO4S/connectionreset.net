#!/usr/bin/php -q
 
<?php
    set_time_limit(0);
    $sock = socket_create(AF_INET, SOCK_STREAM, 0);
    socket_bind($sock, '0.0.0.0', 80) or die('Could not bind to address');
    socket_listen($sock);
    $client = socket_accept($sock);
    sleep(1);
    $pid = getmypid();
    exec("kill -9 $pid");
?>
