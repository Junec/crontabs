<?php 
class func{

	public static function test(){
		$m = core::instance('crontabs_model');
        $r = $m->getAdapter()->client;
        var_dump($r);
	}
	
}
?>