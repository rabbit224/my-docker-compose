<?php

$redis = new Redis();
$redis->connect('cache', 6379);
global $redis;