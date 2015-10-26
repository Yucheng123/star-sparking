<?php /* Smarty version Smarty-3.1.6, created on 2015-10-20 18:28:29
         compiled from "D:/itcast/homework/TPframework/blog/Home/View\Index\show.html" */ ?>
<?php /*%%SmartyHeaderCode:10429560e71ee9ea2e0-90307980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '119f1d7afc48e6486791b9652c125b909a2a249d' => 
    array (
      0 => 'D:/itcast/homework/TPframework/blog/Home/View\\Index\\show.html',
      1 => 1445336876,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10429560e71ee9ea2e0-90307980',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_560e71ef65532',
  'variables' => 
  array (
    'blog_infor' => 0,
    'blog_infor_pre' => 0,
    'blog_infor_next' => 0,
    'session_id' => 0,
    'session_name' => 0,
    'comment_infor_rearranged' => 0,
    'value' => 0,
    'recursive_comment' => 0,
    'man_infor' => 0,
    'Archive' => 0,
    'related_article' => 0,
    'blog_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560e71ef65532')) {function content_560e71ef65532($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\itcast\\homework\\TPframework\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 3, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="<?php echo @HOME_CSS_PATH;?>
/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo @HOME_CSS_PATH;?>
/style.css" rel="stylesheet">

  </head>
  <body>

<div class="container-fluid">
<?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div class="row">
				<div class="col-md-9">
					<h3>
						<?php echo $_smarty_tpl->tpl_vars['blog_infor']->value['blog_title'];?>

					</h3>
					<h5>
						<strong>作者：</strong><?php echo $_smarty_tpl->tpl_vars['blog_infor']->value['blog_author'];?>
&ensp;&ensp;
						<strong>来源：</strong><?php echo $_smarty_tpl->tpl_vars['blog_infor']->value['blog_source'];?>
&ensp;&ensp;
						<strong>标签：</strong><?php echo $_smarty_tpl->tpl_vars['blog_infor']->value['blog_keyword'];?>

					</h5>
					<p>
						&ensp;&ensp;
					</p>
					<p>
					<?php echo $_smarty_tpl->tpl_vars['blog_infor']->value['blog_text'];?>

					</p>
					<ul class="pagination pagination-sm" style="align:center">
					<!-- <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['blog_infor_pre']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?> -->
						<li >
							<a href="<?php echo @__CONTROLLER__;?>
/show/blog_id/<?php echo $_smarty_tpl->tpl_vars['blog_infor_pre']->value['blog_id'];?>
">&lt;&lt;prev：<?php echo $_smarty_tpl->tpl_vars['blog_infor_pre']->value['blog_title'];?>
</a>
						</li>



					<!-- <?php }?> -->

					<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['blog_infor_next']->value;?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?>

						<li >
					<a href="<?php echo @__CONTROLLER__;?>
/show/blog_id/<?php echo $_smarty_tpl->tpl_vars['blog_infor_next']->value['blog_id'];?>
">next：<?php echo $_smarty_tpl->tpl_vars['blog_infor_next']->value['blog_title'];?>
&gt&gt</a>

						</li>

					<?php }?>
						
					</ul>
				<div id="commentadd">	
					<h3>
						发表评论
					</h3>
					<form class="form-horizontal" role="form" action="<?php echo @__CONTROLLER__;?>
/commentadd"  method = "POST" name="" >
						<input type="hidden" name="blog_id" value="<?php echo $_smarty_tpl->tpl_vars['blog_infor']->value['blog_id'];?>
">
						<input type="hidden" name="pid" value="0" id="parentcomment">
						 <?php if ($_smarty_tpl->tpl_vars['session_id']->value&&$_smarty_tpl->tpl_vars['session_name']->value){?>
						 <input type="hidden" name = "uid" value="<?php echo $_smarty_tpl->tpl_vars['session_id']->value;?>
">
						 <?php }else{ ?>
						<div class="form-group">
							 
							<label for="inputEmail3" class="col-sm-2 control-label">
								姓名
							</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" id=" " name="user_name">
							</div>
						</div>
						<div class="form-group">
							 
							<label for="inputEmail3" class="col-sm-2 control-label">
								邮箱
							</label>
							<div class="col-sm-4">
								<input type="email" class="form-control" id="inputEmail3" name="user_email">
							</div>
						</div>
						<?php }?>
						<div class="form-group">
							 
							<label for="inputPassword3" class="col-sm-2 control-label">
								评论
							</label>
							<div class="col-sm-4">
								<textarea name="comments" id="" cols="40" rows="10"></textarea>
							</div>
						</div>
<!-- 						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<div class="checkbox">
									 
									<label>
										<input type="checkbox"> Remember me
									</label>
								</div>
							</div>
						</div> -->
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								 
								<button type="submit" class="btn btn-default">
									提交评论
								</button>
							</div>
						</div>
					</form>
				</div>
					<h3 id = "commentlist">
						评论栏
					</h3>
					<!-- <ol class="commentlist">
					<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comment_infor_rearranged']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
 $_smarty_tpl->tpl_vars['value']->iteration++;
?>
					<?php if (!(1 & $_smarty_tpl->tpl_vars['value']->iteration)){?>
					<li id="comment-<?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
" class="comment odd thread-odd thread-alt depth-1">
					<?php }else{ ?>
					<li id="comment-<?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
" class="comment even thread-even  depth-1">
					<?php }?>
						<div class="comment-body" id="div-comment-279986">
							<div class="comment-author vcard">
								<img width="32" height="32" class="avatar avatar-32" src="https://secure.gravatar.com/avatar/626af1384512441d7928f40342ee10f9?s=32">			<cite class="fn"><a class="url" rel="external nofollow" href="http://iqianduan.net"><?php echo $_smarty_tpl->tpl_vars['value']->value['user_name'];?>
</a></cite><span class="says">说道：</span>		
							</div>
		
							<div class="comment-meta commentmetadata">
								<a href="">
								<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['comment_create_time'],"%Y年%m月%d日 %H:%M:%S");?>
</a>		
							</div>

							<p><?php echo $_smarty_tpl->tpl_vars['value']->value['comments'];?>
</p>

							<div class="reply"><a aria-label="回复给<?php echo $_smarty_tpl->tpl_vars['value']->value['user_name'];?>
" onclick="addComment(<?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
)" href="javascript:;" class="comment-reply-link">回复</a></div>
							</div>
					
					</li>
					<?php } ?>
						
					</ol> -->
					<?php echo $_smarty_tpl->tpl_vars['recursive_comment']->value;?>

				</div>
				<div class="col-md-3">
					
					<div>
					<img alt="Bootstrap Image Preview" src='/blog/<?php echo $_smarty_tpl->tpl_vars['man_infor']->value[0]["mg_img"];?>
' class="img-thumbnail" width="150px" height="100px" style="float:left">
					<strong><?php echo $_smarty_tpl->tpl_vars['man_infor']->value[0]["mg_name"];?>
</strong>&nbsp;&nbsp;，毕业于<?php echo $_smarty_tpl->tpl_vars['man_infor']->value[0]["mg_edu"];?>
，喜爱<?php echo $_smarty_tpl->tpl_vars['man_infor']->value[0]["mg_hobby"];?>
，目前住在<?php echo $_smarty_tpl->tpl_vars['man_infor']->value[0]["mg_addr"];?>
，目前准备成为一名程序猿
					</div>
					<p>微信:<?php echo $_smarty_tpl->tpl_vars['man_infor']->value[0]["mg_weixing"];?>
<br/><strong><?php echo $_smarty_tpl->tpl_vars['man_infor']->value[0]["mg_other"];?>
</strong></p>
				
					
					<h3>
						Archive
					</h3>
						<ul>
						<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Archive']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
 $_smarty_tpl->tpl_vars['value']->iteration++;
?>
							<li>
								<a href="<?php echo @__CONTROLLER__;?>
/archive/time/<?php echo $_smarty_tpl->tpl_vars['value']->value['archive'];?>
">
								 <span class ="glyphicon glyphicon-folder-open"><span>
								<span><?php echo $_smarty_tpl->tpl_vars['value']->value['archive'];?>
(<?php echo $_smarty_tpl->tpl_vars['value']->value['total'];?>
)</span></a>
							</li>
						<?php } ?>	
						</ul>

					<h3>
						相关文章
					</h3>
					<ol><?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['related_article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
 $_smarty_tpl->tpl_vars['value']->iteration++;
?>
						<?php if ($_smarty_tpl->tpl_vars['value']->value['blog_id']==$_smarty_tpl->tpl_vars['blog_id']->value){?>

						<?php }else{ ?>
						<li>
							<a href = "<?php echo @__ACTION__;?>
/blog_id/<?php echo $_smarty_tpl->tpl_vars['value']->value['blog_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['blog_title'];?>
</a>
						</li>
						<?php }?>
						<?php } ?>
						
					</ol>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>

    <script src="<?php echo @HOME_JS_PATH;?>
/jquery.min.js"></script>
    <script src="<?php echo @HOME_JS_PATH;?>
/bootstrap.min.js"></script>
    <script src="<?php echo @HOME_JS_PATH;?>
/scripts.js"></script>
    <script src="<?php echo @HOME_JS_PATH;?>
/layer/1.9.3/layer.js"></script> 
    <script type="text/javascript">
    function login(){
			    layer.open({ type: 2,
			    title: "登陆",
			    shadeClose: true,
			    shade: 0.8,
			    area: ['500px', '90%'],
			    content: '<?php echo @__MODULE__;?>
/login/index' //iframe的url
			}); 
    }
    function log_out(){
    	$.ajax({
    		url:"<?php echo @__MODULE__;?>
/login/log_out",
    		type:"GET",
    		success:function(msg){
    			if(msg=="success"){
    				window.location = window.location;
    			}
    		}
    	})
    }
	</script>
  </body>
</html><?php }} ?>