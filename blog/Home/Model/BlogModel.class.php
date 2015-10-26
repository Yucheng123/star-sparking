<?php
namespace Home\Model;
use Think\Model;
class BlogModel extends Model {
    /*
    获取分类以及对应子类所对应的博文信息


     */
    public function get_navi_category($cat_id){
        $cat_model = D("cat");
        $cat_infor = $cat_model->SELECT();
        $cat_infor_id = $this->getchild($cat_infor,$cat_id);
        $cat_infor_id[]=$cat_id;
        /*------------------------获取这些分类所对应的博文信息----------------*/
        $blog_model = D("blog");
        $blog_infor = $blog_model->WHERE(
            array(
                "cat_id"=>array("in",$cat_infor_id)
                )
            )->ORDER("blog_create_time desc")
            ->SELECT();

        // dump($blog_infor);

        return $blog_infor;
    }
    /*
    
    获取$cat_id 自身以及所对应的子类
     */
    protected function getchild($cat_infor,$cat_id,$temp = true){
        if($temp){
        static $cat_child_id = array();
        }
        foreach($cat_infor as $key=>$value){
            if($value["cat_pid"]==$cat_id){
                $this->getchild($value["cat_id"],false);
                $cat_child_id[]=$value["cat_id"];
            }
        }
        return $cat_child_id;

    }

}