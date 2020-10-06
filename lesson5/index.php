<?php

require_once('RedisCacheProvider.php');

define('BRR', '<br/>');


function readBD()
{
    echo 'Обращение к БД' . BRR;
    return [
        'price' => 1000,
        'description' => 'Описание товара',
        'picture' => 'Здесь должна быть картинка',
    ];
}

$RedisCache = new RedisCacheProvider();

if ($bd = $RedisCache->get('bd')) {
    
} else {
    $bd = readBD();
    $RedisCache->set('bd', $bd, ['nx', 'ex'=>30]);
}


echo 'Цена товара:' . $bd[price] . BRR;
echo 'Описание товара:' . $bd[description] . BRR;
echo 'Картинка товара:' . $bd[picture] . BRR;

var_dump($RedisCache->get('bd'));
