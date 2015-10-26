<?php
namespace Admin\Controller;

class UserController extends AdminController{
	public function index(){
		$comment = D("user");
		$sql = "select u.uid,u.user_name,u.user_email,count('c.*') as comment_number,c.comments from xw_comments as c inner join xw_user as u on u.uid = c.uid  where u.is_approved=1 group by c.uid order by u.create_time desc";
		$user_infor = $comment->query($sql);
		$this->assign("user_infor",$user_infor);
		$this->display();
	}
	public function approve(){
		$comment = D("user");
		$sql = "select u.uid,u.user_name,u.user_email,count('c.*') as comment_number,c.comments from xw_comments as c inner join xw_user as u on u.uid = c.uid  where u.is_approved=0 group by c.uid order by u.create_time desc";
		$user_infor = $comment->query($sql);
		$this->assign("user_infor",$user_infor);
		$this->display();

	}
	public function shenhe($uid,$user_name,$email){
		$password = dechex(time()).dechex(mt_rand(1,65535));
                $data["is_approved"]=1;
                $data["user_password"]=md5($password);

		$user = D("user");
		// var_dump($comment->where("cid=$cid")->save($data));
		// exit();
		if($user->where("uid=$uid")->save($data)){
                   
                    $body = "$user_name,您好：<br>欢迎注册我的博客，您的登陆用户名是您的注册邮箱，登陆密码是$password";
                    //给用户发送一份邮件
                    $email_result= send_mail($email, "phpmailer", $user_name,$body);
                    // dump($email_result);
                    // die();
                    if($email_result=="success"){
                        echo "success";
                        return;
					}
		}
		echo "failed";
		
	}
	public function del($uid){
		$user = D("user");
		$comment = D("comments");

		if(($user->where("uid=$uid")->delete())&&($comment->where("uid=$uid")->delete())){
			echo  "success";
		}else{
			echo "failed";
		};
	}

}
