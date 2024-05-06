<?php

use App\Cache\Redis;

require_once __DIR__ . '/../vendor/autoload.php';

function getFromCache($key)
{
    $redis = new Redis();

    $data = $redis->get($key);

    if (!$data) {
        echo "Searching database";
        $data = getFromDatabase();

        $redis->set($key, $data, 3600);
    }

    return $data;
}

function getFromDatabase()
{
    return "Number: " . rand(1, 5000);
}

function save($data)
{
    // save data
}

$data = "123asd";
$key = "write-around:1";

save($data);

$data = getFromCache($key);
echo $data;
