<?php
namespace Admin\Controller;
//use Admin\Controller;
class BlogController extends AdminController{
	public function index(){
		//获得分类数据，拼接成json数据
		//$cat = new \Admin\Model\CatModel();
		$from_time =I("get.from_time");
		$to_time =I("get.to_time");
		$blog_name = I("get.blog_name");
		dump($blog_name);
		// die();
		$cat_model = D("cat");
		$cat_json = $cat_model->GetJsonCat();
		//获得博文信息数据，联合查询
		$blog_model = D("blog");
		$blog_infor = $blog_model->GetBlog();
		//dump($blog_model->getLastSql());
		//查询cat_id对应的分类信息
		$this->assign(array(
			"blog_infor"=>$blog_infor,
			"cat_json"=>$cat_json,
			"from_time"=>$from_time,
			"to_time"=>$to_time,
			"blog_name"=>$blog_name,
			)
		);
		$this->display();
	}
	public function showtext($id){
		$blog = D("blog");
		$text = $blog->where(array("blog_id"=>"$id"))->getField("blog_text");
		// dump($text);
		$text = html_entity_decode($text);
		$this->assign("text",$text);
		$this->display();
	}
	public function add(){
		$blog_model = D("blog"); 			
		if(IS_POST){//如果有数据提交
			if($blog_model->create(I("post."),1)){//使用I函数接收post数据
				if($blog_model->add()){
					$this->redirect("blog/add",array(),2,"添加成功");
					exit();
				}
			}
			$error = $blog_model->getError();
			$this->redirect("blog/add",array(),2,"添加失败,错误信息为$error");
		}		
		//读取顶级分类信息
		$cat_model = D("cat");
		$cat_parent_infor = $cat_model->where("cat_pid =0 ")->select();
		//	dump($cat_parent_infor);
		//展示添加页面
		$this->assign("cat_parent_infor",$cat_parent_infor);
		$this->display();
	}
	public function edit(){
		$id=I("get.id");
		$blog_model = D("blog");
		if(IS_POST){
			$blog_model->create(I("post."),2);
			if(FALSE!==$blog_model->where("blog_id ='$id'")->save()){
				$this->redirect("blog/index",array(),2,"修改成功");
				exit();	
			}
			$error=$blgo_model->getError();
			$this->redirect("blog/index",array(),2,"修改失败,$error");

		}
		//查询$id所对应的信息;
		$blog_one_infor = $blog_model->find($id);
		$blog_one_infor["blog_text"] = html_entity_decode($blog_one_infor["blog_text"]);
		//dump($blog_one_infor);

		//读取顶级分类信息
		$cat_parent = D("cat");
		$cat_parent_infor = $cat_parent->where("cat_pid =0 ")->select();
		//根据$blog_one_infor["cat_id"] 的cat_id值读取顶级父类的id;
		$path_infor = $cat_parent->field('cat_path')->find($blog_one_infor["cat_id"]);
		$parent_id =substr($path_infor["cat_path"],0,strpos($path_infor["cat_path"],"-"));
	
		//根据父类id读取其子类id		
		$parent_child_id = $cat_parent->where("cat_path like '$parent_id-%'")->order("cat_path asc")->select();
		//分配数据
		$this->assign( array(
			"cat_parent_infor"=>$cat_parent_infor,
			"blog_one_infor"=>$blog_one_infor,
			"parent_id"=>$parent_id,
			"parent_child_id"=>$parent_child_id,

			));
		$this->display();


	}
	public function delete($id){
		// echo $id;
		// exit();
		$blog_model = D("blog");
		//不知道对面传过来的一直有一个%7D
		if(strpos($id,"%7D")!=-1){
			$id = ltrim($id,"%7D");
		}
		if($blog_model->where("blog_id='$id'")->delete()){
			echo "success";
		}else{
			echo "failed";
		}

	}
//草稿箱的写作
	public function manus(){
		$cat_model = D("cat");
		// dump($cat_json);
		// exit();
		$cat_json= $cat_model->GetJsonCat();
		// dump($cat_json);
		// exit();
		//获得博文信息数据，联合查询
		$blog_model = D("blog");
		$blog_infor = $blog_model->GetBlog("0");
		//查询cat_id对应的分类信息
		$this->assign(array(
			"blog_infor"=>$blog_infor,
			"cat_json"=>$cat_json
			)
		);
		// dump($blog_infor);
		// exit();
		$this->display();
	}


//专门的方法给webupload使用
	public function uploadimg(){

		$upload_img = $_FILES['file'];

			// dump($upload_img);
			// die();
		if($upload_img['error']==0){
				// 处理图片数据
		
			$upload = new \Think\Upload();// 实例化上传类    
			$upload->maxSize   =     3145728 ;// 设置附件上传大小    
			$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
			$upload->rootPath  =      './Uploads/'; // 设置附件上传目录
			$upload_infor = $upload->uploadOne($upload_img);
			// dump($upload_infor);
			// die();
			dump($upload->getError());
			die();

		if($upload_infor){
			$upload_infor_path = $upload_class->rootPath.$upload_infor["savepath"].$upload_infor['savename'];
			$result = array();
			$result["path"]=ltrim($upload_infor_path,"./");
			// dump($result);
			// dump(json_encode($result));
			echo json_encode($result);
			//return "hello";
		}
		echo null;
		//dump($_FILES["file"]);
		}
	}
	public function img_test(){
		$this->display();
	}
}
