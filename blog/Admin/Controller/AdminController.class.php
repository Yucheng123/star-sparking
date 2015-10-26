<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller{
	public function __construct(){
		parent::__construct();
		//如果session不存在，但是cookie存在
		if(!session("mid")){
			// dump(cookie("mid"));
			// die();
			if(cookie("mid")){
				$mid= cookie("mid");
				$name = cookie("mg_nick");
				$sql = "select * from xw_manager where md5(concat(mid,'123'))='$mid' and md5(concat(mg_nick,'sweet'))='$name'";
				// dump($sql);
				// exit();
				$check_result=$this->checklogin($sql);
				//如果验证信息正确
				session("mg_name","{$check_result[0]['mg_name']}");
				session("mid","{$check_result[0]['mid']}");
				session("mg_nick","{$check_result[0]['mg_nick']}");
				session("last_login_time","{$check_result[0]['last_login_time']}");
				session("last_login_ip","{$check_result[0]['last_login_ip']}");
				session("login_times","{$check_result[0]['login_times']}");

				
			}
			else{
				$this->redirect("login/index",array(),1,"请重新登陆");
			}
		}
		else{
			//如果有session，检查session
			$mid = session("mid");
			$mg_nick = session("mg_nick");
			$sql = "select count(*) from xw_manager where mid='$mid' and mg_nick='$mg_nick'";
			$this->checklogin($sql);
		}
	}
	
	private function checklogin($sql){
			$mg = D("manager");
			$check_result = $mg->query($sql);
			if(!$check_result){
				$this->redirect("login/index",array(),1,"请重新登陆");
				return;

		}
		return $check_result;

	}
}
