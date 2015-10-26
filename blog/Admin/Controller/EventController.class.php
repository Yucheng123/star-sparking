<?php
namespace Admin\Controller;
//use Admin\Controller;
class EventController extends AdminController{
	public function index(){
	//获取事件总信息
		$evt = D("event");
		$infor = $evt->order("evt_id asc")->select();
		foreach($infor as $k => $v){

			$infor[$k]["evt_desc"]= html_entity_decode($infor[$k]["evt_desc"]);
		}
		$this->assign("infor",$infor); 

		
		$this->display();
	}
	
	public function add(){
		$evt = D("event");
		if(!empty($_POST)){
			
			$_POST["evt_time"]=strtotime($_POST["evt_time"]);
			// dump($_POST);
			// die();
			$evt->create();
			if($evt->add()){
				$this->redirect("event/add",array(),2,"添加成功");
			}
			else{
				$this->redirect("event/add",array(),2,"添加失败");

			};
		}
		$this->display();
	}
	
	public function edit($evt_id){
		//读取对应的内容
		$evt = D("event");
		if(!empty($_POST)){
			$_POST['evt_time'] = strtotime($_POST["evt_time"]);
			$evt->create();
			if($evt->where("evt_id=$evt_id")->save()){
				$this->redirect("event/index",array(),2,"修改成功");
			};
		}
		$infor = $evt -> find($evt_id);
		$infor["evt_desc"] = html_entity_decode($infor["evt_desc"]);
		$this->assign("infor",$infor);
		$this->display();


	}
	public function delete($id){
		


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
