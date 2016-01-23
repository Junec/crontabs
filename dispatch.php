<?php
define('APP_DIR',realpath(dirname(__FILE__)));
include_once('/sites/lnmp/code/core/lib/core.php');
$config = include_once APP_DIR.'/config/config.php';
core::init( $config );

$tTime = time();
$crontab = core::instance('core_crontab');
$crontabsModel = core::instance('crontabs_model');
$crontabsLogsModel = core::instance('crontabs_logs_model');
$filter = array(
    'status' => 0,
    'dispatch' => 1,
    'time|>=' => $tTime - 10,
    'time|<=' => $tTime + 10
);
$crontabsList = $crontabsModel->getList($filter,'*',0,-1,"id ASC");
print_r($crontabsList);
if($crontabsList){
	foreach($crontabsList as $job){
        $nextExecTime= $job['time']+$job['space']*60;
		$crontab->addScript($job['id'], $job['script'], $nextExecTime);
        $crontabsModel->update(array('status'=>1),array('id'=>$job['id']));
	}
	$crontab->exec();
}


