<?php 
class header_widget extends core_widget{

    public function tpl(){
        return 'header.html';
    }

	public function params($params = array()){
        $assign = $params;
        $assign['title'] = 'header_widget_title';
        return $assign;
	}
}
?>