<?php
namespace Admin\Model;
use Think\Model;
class ManagerModel extends Model{
	public function CheckManager(){
		$password =sha1(I("post.password")) ;
		$mg_nick = I("post.mg_nick");

		$mg_infor = $this->where(array(
			"mg_nick"=>$mg_nick,
			"password"=>$password
			))->find();
		return $mg_infor;

	}
}