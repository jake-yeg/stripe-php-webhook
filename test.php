<?php
$config = require_once('webhook_config.php');

if($config['log_type'] === 1){
    $config['db'] = new PDO("mysql:host={$config['db_host']};dbname={$config['db_name']}", $config['db_user'], $config['db_pass']);
}

var_dump($config);