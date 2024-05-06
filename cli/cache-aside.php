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

$key = "cache-aside:1";
$data = getFromCache($key);
echo $data;
