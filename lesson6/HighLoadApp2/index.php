<?php

session_start();

$server = $_SESSION['server'];

echo 'Это сервер 2' . PHP_EOL;

if (isset($server)) {
    echo 'До это вы были на ' . $server;
}

$_SESSION['server'] = 'server 2';
