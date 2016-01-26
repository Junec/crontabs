<?php 
class func{

	public static function test(){
		$m = core::instance('crontabs_model');
        $r = $m->getAdapter()->client;
        var_dump($r);


        $cache = core_cache_factory::getInstance('filesystem');
        $cache->set('testkey','123123123');
	}
	
}
?>