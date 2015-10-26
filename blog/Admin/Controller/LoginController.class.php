<?php
namespace Admin\Controller;
use Think\Controller;
class loginController extends Controller{
	public function index(){
		if(!empty($_POST)){
			//收集表单数据，检验验证码
			// dump($_SERVER);
			// die();
			$Verify= new \Think\Verify();
			$cap = $Verify->check($_POST["captcha"]);
			if(!$cap){
				$this->redirect("login/index",array(),1,"captcha is not right");
			}

			// dump($cap);
			// dump($_POST);
			// dump($_POST["captcha"]);
			// exit();
			//验证码正确,检查用户名和密码
			$mg = D("manager");
			//检查工作放到模型里面执行
			// $_POST["password"]=addslashes($_POST["password"]);//防止sql注入
			// $_POST["mg_nick"]=addslashes($_POST["mg_nick"]);
			// $_POST["password"]=sha1($_POST["password"]);
			$mg_infor = $mg->CheckManager();
			// dump($mg->getLastSql());
			// dump($mg_infor);
			// die();
			if($mg_infor){
				//session 持久化

				session("mg_name","{$mg_infor['mg_name']}");
				session("mid","{$mg_infor['mid']}");
				session("mg_nick","{$mg_infor['mg_nick']}");
				session("last_login_time","{$mg_infor['last_login_time']}");
				session("last_login_ip","{$mg_infor['last_login_ip']}");
				session("login_times","{$mg_infor['login_times']}");
				// dumpin_times("mg_id"));
				// dump(session("mg_name"));
				// dump(session("mg_nick"));
				// exit();

				//更新用户的信息
				$sql="update xw_manager set `last_login_ip`= inet_aton('{$_SERVER['REMOTE_ADDR']}'),last_login_time=login_time,login_time=unix_timestamp(),login_times=login_times+1 where mid={$mg_infor['mid']}";
				$update_infor = $mg->execute($sql);
				// $data["last_login_ip"]=inet_pton($_SERVER['REMOTE_ADDR']);
				// $data["login_time"]=time();
				// $data["login_times"]=`login_times`+1;
				// $mg->where("mid={$result['mid']}")->save($data);
				if($update_infor){
					//设置cookie,保持登陆状态
					if("{$_POST['online']}"){
						cookie('mid',md5($mg_infor['mid'].'123'),3600);
						cookie('mg_name',md5($mg_infor['mg_name'].'好'),3600);
						cookie('mg_nick',md5($mg_infor['mg_nick'].'sweet'),3600);
						// dump(cookie("mid"));
						// dump(cookie("mg_name"));
						// dump(cookie("mg_nick"));
						// die();
					}
					
					$this->redirect("manager/index",array(),0,"login success");
					}
				else{
					$this->redirect("login/index",array(),1,"login failed");
				}
			}
			else{
				$this->redirect("login/index",array(),1,"login failed");
			}
			
		}
		$this->display();
	}
	public function captcha(){
		$config = array(
		'fontSize'    =>    30,    // 验证码字体大小    
		'length'      =>    4,     // 验证码位数    
		);
		$Verify = new \Think\Verify($config);
		$Verify->entry();
	}
	
}
