<?php
namespace Admin\Controller;
//use Admin\Controller;
class HostController extends AdminController{
	public function index(){
		//从管理员库中获取数据
		$man = D("manager");
		$infor = $man-> select();
		$this->assign("infor",$infor);
		$this->display();
	}
	public function add(){
		if(!empty($_POST)){
			$man = D("manager");
			$man->create();
			if($man->add()){
				$this->redirect("host/index",array(),2,"添加成功");
			}else{
				$this->redirect("host/add",array(),2,"添加失败");
			}
		}
		$this->display();
	}
	public function edit($mid){
		// 获取所要编辑的信息
		$man = D("manager");
		if(!empty($_POST)){
			$infor = $man->create();
			if($man->save()){
				$this->redirect("host/index",array(),2,"修改成功");
			}else{
				$this->redirect("host/index",array(),2,"修改失败");

			}
		}
		$infor = $man->find($mid);
		$infor["mg_other"]=html_entity_decode($infor["mg_other"]);
		$this->assign("infor",$infor);
		$this->display();
	}


//专门的方法给webupload使用
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
