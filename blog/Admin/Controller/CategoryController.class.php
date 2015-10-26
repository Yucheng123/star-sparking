<?php
namespace Admin\Controller;
//use Admin\Controller;
class CategoryController extends AdminController{
	public function index(){
		$this->display();
	}
	public function add(){
		$this->display();
	}
	public function getchild($pid){
		$cat = D("cat");
		$child_infor = $cat->where("cat_path like '$pid-%'")->order("cat_path asc")->select();
		// dump($child_infor);
		echo json_encode($child_infor);

	}
	public function rename($pid,$name,$id){
		$cat = D("cat");
		// 如果节点的id已经存在
		if($id){
			$sql = "update xw_cat set cat_name ='$name' where cat_id = '$id' and cat_pid = '$pid'";
			// dump($cat->execute($sql));
			// exit();
			if($cat->execute($sql)){
				echo "success";
				return;
			}
			echo "failed";
		}
		//如果节点id不存在，此节点可能是新添加的或者是拖拽过来的
		else{
			//id 不存在
			//$pid !=0,表示添加的不是根节点
			if($pid){
			//1.先查询父类的path
				$parent_infor = $cat->find($pid);
				// dump($parent_infor);
				// exit();

			//2.插入新的记录
				$data['cat_pid']=$pid;
				$data['cat_name']=$name;
				$newid = $cat->add($data);
				
				if($newid){
					//$sql = "insert into xw_cat values (null,cat_pid = '$pid',cat_name = '$name')"
				//3.根据获得的新id以及父类的path信息添加新插入记录的path，同时更新level信息
					$data['cat_id'] = $newid;
					$data['cat_path'] = $parent_infor["cat_path"]."-".$newid;
					$data['cat_level'] = $parent_infor["cat_level"]+1;
					if($cat->save($data)){
						echo "success";
					}else{
						echo "fail";
					};
					;					
				}else{
					echo "failed";
				}
			//$pid = 0,表示添加的是根节点
			//代码以后再写
			}
		}
	}
}

