<?php
namespace Home\Model;
use Think\Model;
class CommentsModel extends Model {
    public function child_rearrange($comment_infor,$pd=0){
        $new_arr = array();
        foreach ($comment_infor as $v){
            if($v['pid']==$pd){
                $v["child"] = $this->child_rearrange($comment_infor,$v['cid']);
                $new_arr[] = $v;                                
            }
        }

        return $new_arr;
    }
    public function recursive_comment($array,$level=0){
        
        $str =" ";
        if($level ==0){

        $str .="<ol class='commentlist'> ";
        }
        else{
         $str .="<ul > ";   
        }

       

        foreach ($array as $key => $value) {


            $str .= <<<"eof"
            <li id="comment-{$value['cid']}" class="comment even thread-even  depth-1">
eof;
            
            $str .= <<<"eof"
            <div class="comment-body" id="div-comment-279986">
                            <div class="comment-author vcard">
                                <img width="40" height="40" class="avatar avatar-32" src="/blog/Home/public/img/whalelogo.jpg"> <cite class="fn"><a class="url" rel="external nofollow" href="http://iqianduan.net">{$value['user_name']}</a></cite><span class="says">说道：</span>      
                            </div>
        
                            <div class="comment-meta commentmetadata">
                                <a href="">
eof;
                               $str.=date("Y-m-d H:i:s",$value["comment_create_time"]); 
            if($value["is_approved"]==0){
                $str.="<div><strong><i style='color:black'>您的评论正在审核中...</i></strong></div>";
            }
            $str .=<<<"eof"
                            </div>

                            <p>{$value["comments"]}</p>

                            <div class="reply"><a aria-label="回复给{$value['user_name']}" onclick="addComment({$value['cid']})" href="javascript:;" class="comment-reply-link">回复</a></div>
                    </div>
                    
                
eof;
             if($value["child"]){
                
             $str .=$this->recursive_comment($value["child"],$level+1);
            }
        $str.="</li>";
        }
       if($level==0){
         $str .="</ol>";
       }
       else{
        $str .="</ul>";

       }

        return $str;
    }
   
}