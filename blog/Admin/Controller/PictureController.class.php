<?php
namespace Admin\Controller;
//use Admin\Controller;
class PictureController extends AdminController{
	public function index(){
		$pic = D("pic");
		//读取所有的图片数据
		$sql = "select * from xw_pic as a inner join xw_cat as b on a.cat_id = b.cat_id";
		$pic_infor=$pic -> query($sql);
		$this->assign("pic_infor",$pic_infor);
		$this->display();
	}
	public function add(){
		$pic = D("pic");
		if(!empty($_POST)){
			//处理图片数据
			$_POST["pic_gallery"]=implode(";",$_POST["pic_gallery"]);
			$_POST["pic_create_time"]=time();
			$pic->create();
			if($pic->add()){
				$this->redirect("picture/index",array(),2,"添加成功");
			}else{
				$this->redirect("picture/add",array(),2,"添加失败");
			}

		}
		
			//读取顶级分类信息
		$cat_parent = D("cat");
		$cat_parent_infor = $cat_parent->where("cat_pid =0 ")->select();
		//	dump($cat_parent_infor);

		//展示添加页面
		$this->assign("cat_parent_infor",$cat_parent_infor);

		$this->display();
	}
	public function edit($pic_id){
		//读取信息
		$pic = D("pic");
		if(!empty($_POST)){
			$_POST["pic_gallery"]=implode(";",$_POST["pic_gallery"]);
			$pic->create();
			// exit();
			if($pic->save()){
				 	$this->redirect("picture/index",array(),2,"修改成功");	
				}
				else{
					$this->redirect("picture/index",array(),2,"修改失败");
			
				}
		}
		//查询$pic_id所对应的信息;

		$pic_one_infor = $pic->find($pic_id);
		// $pic_one_infor["pic_desc"] = html_entity_decode($pic_one_infor["pic_desc"]);
		//dump($pic_one_infor);

		//读取顶级分类信息
		$cat_parent = D("cat");
		$cat_parent_infor = $cat_parent->where("cat_pid =0 ")->select();
		$this->assign("cat_parent_infor",$cat_parent_infor);
		$this->assign("pic_one_infor",$pic_one_infor);
		//根据$pic_one_infor["cat_id"] 的cat_id值读取顶级父类的id;
		$path_infor = $cat_parent->field('cat_path')->find($pic_one_infor["cat_id"]);

		$parent_id =substr($path_infor["cat_path"],0,strpos($path_infor["cat_path"],"-"));
		$this->assign("parent_id",$parent_id);
		//根据父类id读取其子类id
		
		$parent_two_id = $cat_parent->where("cat_path like '$parent_id-%'")->order("cat_path asc")->select();
		$this->assign("parent_two_id",$parent_two_id);
		$this->display();
	}
	/*-------------删除图片信息----------------------------*/
	public function delete($pic_id){
		$pic = D("pic");
		$pic->where(array(
			"pic_id"=>$pic_id
			))->delete();
		

	}
	public function show(){
		//等到后面有时间再来晚上具体的图片展示功能，主要是图片查看器
		$this->display();
	}
	public function uploadimg(){
		$upload_img = $_FILES['file'];
				// dump($upload_img);
				// die();
		if($upload_img['error']==0){
				// 处理图片数据
			$upload_class = new \Think\Upload();
			$upload_infor = $upload_class->uploadOne($upload_img);
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

}