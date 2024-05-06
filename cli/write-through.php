<?php

use App\Cache\Redis;

require_once __DIR__ . '/../vendor/autoload.php';

function saveCache($key, $data)
{
    $redis = new Redis();

    $redis->set($key, $data, 3600);
}

function save($data)
{
    // save data
}

$data = "abcdef";
$key = "write-through:1";

saveCache($key, $data);
save($data);
