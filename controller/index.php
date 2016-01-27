<?php 
class index_controller extends core_controller{

	public function index(){
        $crontabs_model = core::instance('crontabs_model');
        $data = $crontabs_model->getList(array(),'*','id DESC');

        $this->assign('data',$data);
		$this->display('index.html');
	}
	
}
?>