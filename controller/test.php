<?php 
class test_controller extends core_controller{

	public function index(){
		
        func::test();
        $this->assign('var','testvar');
		$this->display('index.html');
	}
	
}
?>