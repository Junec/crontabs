<?php
$str = "job2: ".date('Y-m-d H:i:s')." ~ ";
sleep(2);
$str .= date('Y-m-d H:i:s')."\n";
error_log($str,3,"/sites/lnmp/code/crontabs/1.txt");
?>