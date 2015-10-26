<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	//获取图片信息
    	$pic = D("pic");
    	$pic_infor = $pic->field("pic_id,pic_title,pic_desc,pic_img,pic_keyword")->order("pic_create_time desc")->limit("3")->select();
    	//var_dump($pic_infor);
    	$this->assign("pic_infor",$pic_infor);
    	//获取头条信息
    	$blog = D("blog");
    	$blog_infor = $blog->field("blog_id,blog_title,blog_abstract")->where("is_top=1")->order('blog_create_time')->limit("2")->select();
    	$this->assign("blog_infor",$blog_infor);
    	//获取精选的信息
    	$blog_best_infor = $blog->field("blog_id,blog_img,blog_title,blog_abstract")->where("is_best=1")->order("blog_create_time")->limit("3")->select();
    	$this->assign("blog_best_infor",$blog_best_infor);
    	//dump($blog_best_infor);
    	//获取非精选的信息
    	$blog_normal_infor = $blog->field("blog_id,blog_img,blog_keyword,blog_author,blog_title,blog_abstract,blog_create_time")->where("is_best=0")->order("blog_create_time")->limit("3")->select();
    	$this->assign("blog_normal_infor",$blog_normal_infor);
    	//dump($blog_normal_infor);
    	//获取分类的信息
        $Archive = $this->archive_infor();
        //dump($Archive);
        //dump($Archive);
    	$this->assign("Archive",$Archive);
        $this->assign("session_name",session("user_name"));
        $this->assign("session_id",session("uid"));
    	$this->display();
    }
    public function pic_list($pic_id){
    	if(file_exists("./Home/view/Cache/pic_{$pic_id}.html")){
            // echo "hello";
            $url ="Cache/pic_{$pic_id}";
            $this->display($url);
            return;
        }
        //开启静态文件
        ob_start();
        $pic = D("pic");
        $pic_gallery = $pic->field("pic_gallery")->where("pic_id=$pic_id")->find();
    	$pic_gallery = explode(";", $pic_gallery["pic_gallery"]);
    	//dump($pic_gallery);
    	$this->assign("pic_gallery",$pic_gallery);
    	$this->display();
        //创建静态文件
        
        $contents = ob_get_contents();
        file_put_contents("./Home/view/Cache/pic_{$pic_id}.html", $contents);



    }
    public function show($blog_id){
        $man_infor = $this->manager_infor();
        //dump($man_infor);
        $this->assign("man_infor",$man_infor);
    	//获取专门博客的信息并且更新点击信息
    	$blog = D("blog");
    	$sql = "update xw_blog set hits=hits+1 where blog_id=$blog_id";
    	if(!($blog->execute($sql))){
    		$this->redirect("home/index/index",array(),1,"网站出现错误信息");
    	}
    	$blog_infor=$blog->find($blog_id);
    	$blog_infor["blog_text"]=html_entity_decode($blog_infor["blog_text"]);
    	$this->assign("blog_infor",$blog_infor);
    	//获取博客上一篇和下一篇的标题
    	$blog_infor_pre = $blog->field("blog_id,blog_title")->find($blog-1);
    	//如果$blog_infor_pre是空的话，可能这个id到头了或者没有这个id，那么就执行循环查找
    	//直到找到最近的那个
    	if(!$blog_infor_pre){

	    	for($i=1;$i<$blog_id;$i++){
	    		$blog_infor_pre = $blog->field("blog_id,blog_title")->find($blog_id-$i);
	    		if($blog_infor_pre){
	    			// echo "hello";
	    			break;
	    		}
	    	}
    	}
    	$blog_infor_next = $blog->field("blog_id,blog_title")->find($blog_id+1);

    	//同样，按照上面的逻辑，也需要循环找到最近的博文
    	if(!$blog_infor_next){
    		//$sql = "select max(blog_id) as max from xw_blog";
    		//$max_id = $blog->query($sql);
    		$max_id = $blog->field("max(blog_id) as max")->find();
    		for($i=$blog_id+1;$i<=$max_id["max"];$i++){
    		    $blog_infor_next = $blog->field("blog_id,blog_title")->find($i);
    		    if($blog_infor_next){
    		    	break;
    		    }
	
    		};
    	}
    	
    	// dump($blog_infor_pre);
    	// dump($blog_infor_next);
    	$this->assign("blog_infor_pre",$blog_infor_pre);
    	$this->assign("blog_infor_next",$blog_infor_next);
    	//读取评论栏的信息
    	$comment = new \Home\Model\CommentsModel();
    	$sql ="select u.user_name,c.* from xw_user as u inner join xw_comments as c on u.uid=c.uid where blog_id=$blog_id order by c.comment_create_time desc";
    	$comment_infor = $comment->query($sql);
    	$comment_infor_rearranged = $comment->child_rearrange($comment_infor);
    	// dump($comment_infor_rearranged);
    	  $recursive_comment = $comment->recursive_comment($comment_infor_rearranged);
    	// dump($recursive_comment);
    	// exit();
    	//获取分类的信息
        $Archive = $this->archive_infor();

    	$this->assign("Archive",$Archive);

    	$this->assign("recursive_comment",$recursive_comment);
        $this->assign("session_name",session("user_name"));
        $this->assign("session_id",session("uid"));
        /*--------------------获取相关文章信息-------------*/
        $related_article= $this->related_article($blog_id);
        $this->assign("related_article",$related_article);
        $this->assign("blog_id",$blog_id);

    	$this->display();
    }
    public function archive($time){
    	 //获取管理员的信息
        $man_infor = $this->manager_infor();
        //dump($man_infor);
        $this->assign("man_infor",$man_infor);
    	//获取分类的信息
        $Archive = $this->archive_infor();
    	//dump($Archive);
    	$this->assign("Archive",$Archive);
    	//到后面进一步完善
    	$sql = "select blog_id,blog_img,blog_keyword,blog_author,blog_title,blog_abstract,blog_create_time from xw_blog where FROM_UNIXTIME(`blog_create_time`,'%Y-%m')='$time'";
    	$blog_model = D("blog");
    	$blog_infor = $blog_model->query($sql);
    	// dump($blog->getLastSql());
    	// dump($blog_infor);
    	$this->assign("blog_infor",$blog_infor);
        $this->assign("session_name",session("user_name"));
        $this->assign("session_id",session("uid"));


    	$this->display();

    }
    public function commentadd(){
        if(empty($_POST["uid"])){
        	//保存用户的信息
        	$_POST["create_time"]=time();
        	$user = D("user");
        	//dump($_GET);
        	$user->create();
        	$uid = $user->add();
        	//保存评论信息
        	$_POST["uid"]=$uid;//保存用户的id
        }	
        $_POST["comment_create_time"]=time();
        $comment = D("comments");
        $comment->create();
        $cid = $comment->add();
        	//如果添加用户不成功，那么就直接跳转到前台，并提示添加用户失败
        if(!$cid){
            $this->redirect("home/index/show/blog_id/{$_POST['blog_id']}",array(),2,"User-add failed");
        }
    	//添加用户成功，开始添加用户的评论
    	if($_POST["pid"]){
    		//存在父类的评论
    		$pid = $_POST["pid"];
    		$p_infor=$comment->where("cid=$pid")->find();
    		// dump($p_infor);
    		// dump($comment->getLastSql());
    		// exit();
    		$data["level"]=$p_infor["level"]+1;
    		$data["path"]=$p_infor["path"]."-".$cid;
    		if($comment->where("cid=$cid")->save($data)){
    			$this->redirect("home/index/show/blog_id/{$_POST['blog_id']}",array(),2,"comment success");
    		}else{
    			$this->redirect("home/index/show/blog_id/{$_POST['blog_id']}",array(),2,"comment failed");
    		};
    		
    	}else{
    		//不存在父类的评论
    		//更新path字段
    		$data["path"]=$cid;
    		if($comment->where("cid=$cid")->save($data)){
    			$this->redirect("home/index/show/blog_id/{$_POST['blog_id']}",array(),2,"comment success");
    		}else{
    			$this->redirect("home/index/show/blog_id/{$_POST['blog_id']}",array(),2,"comment failed");
    		};
    	}
    	
    }
    public function introduce(){
        $man_infor = $this->manager_infor();
    	//dump($man_infor);
    	$this->assign("man_infor",$man_infor);

    	//获取分类的信息
        $Archive = $this->archive_infor();
        //dump($Archive);
        $this->assign("Archive",$Archive);
    	//dump($Archive);
    	$this->assign("Archive",$Archive);
    	//读取管理员大事记信息
    	$event = D("event");
    	$event_infor = $event->where("mid=1")->order("evt_time desc")->select();
    	foreach ($event_infor as $key => $value) {
    		$event_infor[$key]["evt_desc"]=html_entity_decode($event_infor[$key]["evt_desc"]);
    	}
    	$this->assign("event_infor",$event_infor);
    	$this->display();
    }
    /**
     * 读取相关分类下的博文信息
     * 
     */
    public function navigator($cat_id){
        /*---------------获取管理员信息---------------*/
        $man_infor = $this->manager_infor();
        //dump($man_infor);
        $this->assign("man_infor",$man_infor);
        /*--------------------获取分类信息------------*/
        $Archive = $this->archive_infor();
        //dump($Archive);
        $this->assign("Archive",$Archive);
        /*-------------获取博文-----------------*/
        $blog_model= new \Home\Model\BlogModel();
        $navi_blog_infor=$blog_model->get_navi_category($cat_id);
        $this->assign("blog_infor",$navi_blog_infor);
        $this->display();



    }
    protected function manager_infor(){
        $manage = D("manager");
        $man_infor=$manage->select();        
        $man_infor[0]["mg_other"]=html_entity_decode($man_infor[0]["mg_other"]);
        return $man_infor;

    }

    protected function archive_infor(){
        $blog = D("blog");
        $sql ="select FROM_UNIXTIME(`blog_create_time`,'%Y-%m') as Archive,count(*) as total from xw_blog group by Archive" ;
        $Archive = $blog->query($sql);
        return $Archive;

    }
    protected function related_article($blog_id){
        $blog = D("blog");
        $blog_infor = $blog->where(
            array("blog_id"=>array("eq",$blog_id))
            )->find();
        // dump($blog_infor);
        // die();
        $relate_article = $blog->field("blog_id,blog_title")->where(
                            array("cat_id"=>
                                array("eq",$blog_infor["cat_id"])))
                        ->order('blog_create_time desc')
                        ->limit('8')
                        ->select();
        return $relate_article;

    }
}