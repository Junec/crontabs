<?php
//...
return array(
	'app_dir' => '/sites/lnmp/code/crontabs',
    'core_debug' => true,
	'db_config' => array(
		'server' => 'localhost',
		'username' => 'root',
		'password' => '...',
		'port' => 3306,
		'database' => 'web',
		'charset' => 'utf8',
	),
	'url_router' => true,
    'router_rules' => include_once APP_DIR.'/config/router.php',
	
);