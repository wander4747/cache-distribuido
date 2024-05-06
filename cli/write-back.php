<?php

use App\Cache\Redis ;

require_once __DIR__ . '/../vendor/autoload.php';

$redis = new Redis();

for($i = 1; $i <=50; $i++) {
    $key = sprintf('write-back:%s', $i);
    $data = sha1(time().rand(0, 1000));

    $redis->set($key, $data, 3600);
}

// vamos supor que tenha uma processo async que salva no banco de dados depois =)