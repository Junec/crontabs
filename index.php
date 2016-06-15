<?php
define('APP_DIR',realpath(dirname(__FILE__)));
include_once('/usr/www/core/lib/core.php');
$config = include_once APP_DIR.'/config/config.php';
core::init( $config );
core::dispatch();
