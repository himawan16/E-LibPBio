<?php

// be sure that this file not accessed directly
if (!defined('INDEX_AUTH')) {
    die("can not access this file directly");
} elseif (INDEX_AUTH != 1) {
    die("can not access this file directly");
}

$ucs['serveraddr'] = 'http://localhost/ucs2'; // UCS server address. NO TRAILING SLASH! for local testing on Windows machine don't use localhost, use 127.0.0.1 instead
$ucs['serverversion'] = 2; // UCS server version
$node['id'] = 'slims-node'; // node ID
$node['password'] = '2325f677e21c1613909c953eb03c57352259cc5d'; // default is s0beautifulday
$node['name'] = 'SLiMS Library'; // node name
