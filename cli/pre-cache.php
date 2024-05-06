<?php

use App\Cache\Redis;

require_once __DIR__ . '/../vendor/autoload.php';

$dataCache = [
    'pre-cache:30' => 500,
    'pre-cache:15' => 25,
    'pre-cache:25' => "asdf",
];

$redis = new Redis();

foreach ($dataCache as $key => $data) {
    $redis->set($key, $data, 3600);
}
