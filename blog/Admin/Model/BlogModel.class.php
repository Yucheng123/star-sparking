<?php
namespace Admin\Model;
use Think\Model;
class BlogModel extends model{
	//添加博客时允许接收的字段
	protected $insertFields="blog_title,cat_parent,sort_by,cat_id,blog_keyword,blog_abstract,blog_author,is_self,blog_source,is_best,is_top,blog_img,blog_text";
	public function getBlog($status="1"){
		$where=array();
		$from_time =strtotime(I("get.from_time"));
		$to_time =strtotime(I("get.to_time"));
		$blog_name = I("get.blog_name");
		//dump($from_time);
		if($from_time&&$to_time){
			$where += array(
				"blog_create_time"=>array("between",array($from_time,$to_time))
				);
		}elseif ($from_time) {
			$where += array(
				'blog_create_time' =>array("egt",$from_time) 
				);
		}elseif($to_time){
			$where += array(
				"blog_create_time" =>array("elt",$to_time)
				);
		}else{

		}

	
		if($blog_name){
			$where += array(
				"blog_title"=>array("like","%{$blog_name}%"),
				);
		}
		$where += array(
				"a.is_finished"=>$status
				);
		//dump($where);
		$blog_infor =$this->alias("a")
		->field("a.*")
		->join("left join xw_cat as b on a.cat_id=b.cat_id")
		->where($where)
		->order("b.cat_name desc")
		->select();
		return $blog_infor;

	}

	protected function _before_insert(&$data,$option){
		$data["blog_create_time"]=time();
		$data["blog_text"]=RemoveXss($_POST['blog_text']);

	}
	protected function _before_update(&$data,$option){
		$data["blog_modified_time"]=time();
	}

}