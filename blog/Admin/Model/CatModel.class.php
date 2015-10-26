<?php
namespace Admin\Model;
use Think\Model;
class CatModel extends Model{
	public function GetJsonCat(){
		//json化
		$cat_json = $this->field("cat_id,cat_pid,cat_name as name")->select();
		// dump($cat_json);
		// exit();
		$cat_json = json_encode($cat_json);
		return $cat_json;
	}
	protected function _after_insert($data,$option){

	}
}