<?php

$m = new Memcached ();
$m->addServer('localhost', 11211);
$server = $m->get('server');
$m->set('server', 'server 1');

echo 'Это сервер 1' . PHP_EOL;
echo 'До это вы были на ' . $server;