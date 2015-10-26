<?php
namespace Admin\Controller;
//use Admin\Controller;
class CommentController extends AdminController{
	public function index(){
		//读取博文评论信息
		$comment = D("comments");
		$sql = "select u.user_name,b.blog_title,c.* from xw_blog as b inner join xw_comments as c on b.blog_id = c.blog_id inner join xw_user as u on u.uid = c.uid where c.is_approved=1 order by c.blog_id and c.path asc";
		$comment_infor = $comment->query($sql);
		$this->assign("comment_infor",$comment_infor);
		//dump($comment_infor);
		$this->display();
	}
	public function approve(){
		$comment = D("comments");
		$sql = "select u.user_name,b.blog_title,c.* from xw_blog as b inner join xw_comments as c on b.blog_id = c.blog_id inner join xw_user as u on u.uid = c.uid where c.is_approved=0 order by c.blog_id and c.path asc";
		$comment_infor = $comment->query($sql);
		$this->assign("comment_infor",$comment_infor);
		$this->display();
	}
	//用于ajax的
	public function shenhe($cid){
		$data["is_approved"]=1;

		$comment = D("comments");
		// var_dump($comment->where("cid=$cid")->save($data));
		// exit();
		if($comment->where("cid=$cid")->save($data)){
			echo "success";
		}else{
			echo "failed";
		}
	}
	public function del($cid){
		$comment = D("comments");
		$parent = $comment->where("pid=$cid")->select();
		if(!empty($parent)){
			echo "is_parent";
			return;
		}
		if($comment->where("cid=$cid")->delete()){
			echo  "success";
		}else{
			echo "failed";
		};
	}

}

