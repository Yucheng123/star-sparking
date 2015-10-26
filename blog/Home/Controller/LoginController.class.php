<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
	public function index(){
		if(!empty($_POST)){
			//检查用户名和密码，并且分配session
			$user = D("user");
			$_POST["user_password"]=addslashes($_POST["user_password"]);//防止sql注入
			$_POST["user_name"]=addslashes($_POST["user_name"]);
			// dump($_POST);
			$_POST["user_password"]=md5($_POST["user_password"]);
			$user_infor = $user->where("user_name='{$_POST['user_name']}' and user_password='{$_POST['user_password']}'")->find();
			// dump($user->getLastSql());
			// dump($user_infor);
			// die();
			if($user_infor){
				//session 持久化
				session("user_name","{$user_infor['user_name']}");
				session("uid","{$user_infor['uid']}");
				//设置cookie,保持登陆状态
				if("{$_POST['remember']}"){
					cookie('uid',md5($user_infor['uid'].'123'),3600);
					cookie('user_name',md5($user_infor['user_name'].'好'),3600);
				}					
					//登陆成功
				echo $str=<<<"eof"
					<script type="text/javascript">
						window.onload=function(){
							window.parent.window.location.reload();
							window.close();
						}
					</script>
eof;
				die();
			}
				
			echo "login failed";
				die();
			}
			
				
		$this->display();
	}
	public  function  log_out(){
		session('[destroy]'); 
		echo "success";
	}
	
}