<?php

namespace App\Cache;

class Redis
{
    private $redis;

    public function __construct() {
        $this->redis = new \Redis();
        $this->redis->connect('cache_redis', 6379);
    }

    public function set($key, $value, $ttl = null) {
        $this->redis->set($key, $value, $ttl);
    }

    public function delete($key) {
        $this->redis->del($key);
    }

    public function get($key) {
        return $this->redis->get($key);
    }
}