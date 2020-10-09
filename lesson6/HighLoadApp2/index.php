<?php

$m = new Memcached();
$m->addServer('192.168.0.14', 11211);

echo 'Это сервер 2' . PHP_EOL;

if ($server = $m->get('server')) {
    echo 'До это вы были на ' . $server;
}

$m->set('server', 'server 2');