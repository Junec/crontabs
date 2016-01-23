<?php
$str = "job1: ".date('Y-m-d H:i:s')." ~ ";
sleep(1);
$str .= date('Y-m-d H:i:s')."\n";
error_log($str,3,"/sites/lnmp/code/crontabs/1.txt");
?>