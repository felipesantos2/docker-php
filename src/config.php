<?php

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

define('VIEWS_PATH', __DIR__ . '/resources/views');

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env');

