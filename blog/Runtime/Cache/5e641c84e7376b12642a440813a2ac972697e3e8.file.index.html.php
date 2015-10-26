<?php /* Smarty version Smarty-3.1.6, created on 2015-10-13 22:16:36
         compiled from "D:/itcast/homework/TPframework/blog/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:11216560dea7d94e167-26703644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e641c84e7376b12642a440813a2ac972697e3e8' => 
    array (
      0 => 'D:/itcast/homework/TPframework/blog/Home/View\\Index\\index.html',
      1 => 1444735479,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11216560dea7d94e167-26703644',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_560dea7e45503',
  'variables' => 
  array (
    'pic_infor' => 0,
    'value' => 0,
    'blog_infor' => 0,
    'blog_best_infor' => 0,
    'blog_normal_infor' => 0,
    'Archive' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560dea7e45503')) {function content_560dea7e45503($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\itcast\\homework\\TPframework\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>欢迎来到我的博客</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="<?php echo @HOME_CSS_PATH;?>
/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo @HOME_CSS_PATH;?>
/style.css" rel="stylesheet">

  </head>
  <body>
<!-- 头以及导航栏 -->
<div class="container-fluid">

<?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<!-- l轮播 -->
			<div class="row">
				<div class="col-md-4">
					<div class="carousel slide" id="carousel-574495">
						<ol class="carousel-indicators">
							<li data-slide-to="0" data-target="#carousel-574495">
							</li>
							<li data-slide-to="1" data-target="#carousel-574495">
							</li>
							<li data-slide-to="2" data-target="#carousel-574495" class="active">
							</li>
						</ol>
						<div class="carousel-inner">
							<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pic_infor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
 $_smarty_tpl->tpl_vars['value']->iteration++;
?>
							<?php if ($_smarty_tpl->tpl_vars['value']->iteration==1){?>
								<div class="item active">
							<?php }else{ ?>
								<div class="item">
							<?php }?>
								<a href ="javascript:"><img alt="Carousel Bootstrap First" src="/blog/<?php echo $_smarty_tpl->tpl_vars['value']->value['pic_img'];?>
" width="417px" height="265px" onclick="pic_list('<?php echo $_smarty_tpl->tpl_vars['value']->value['pic_title'];?>
',<?php echo $_smarty_tpl->tpl_vars['value']->value['pic_id'];?>
)"></a>
								<div class="carousel-caption">
									<h4>
										<?php echo $_smarty_tpl->tpl_vars['value']->value['pic_title'];?>

									</h4>
									<p>
										<?php echo $_smarty_tpl->tpl_vars['value']->value['pic_desc'];?>

									</p>
								</div>
							</div>
							<?php } ?>
							<!-- <div class="item">
								<img alt="Carousel Bootstrap Second" src="<?php echo @HOME_IMG_PATH;?>
/slide_1.jpg">
								<div class="carousel-caption">
									<h4>
										Second Thumbnail label
									</h4>
									<p>
										Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
									</p>
								</div>
							</div>
							<div class="item active">
								<img alt="Carousel Bootstrap Third" src="<?php echo @HOME_IMG_PATH;?>
/slide_3.jpg">
								<div class="carousel-caption">
									<h4>
										Third Thumbnail label
									</h4>
									<p>
										Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
									</p>
								</div>
							</div>-->
						</div>  
						<a class="left carousel-control" href="#carousel-574495" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-574495" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>
				</div>
				<div class="col-md-5">
					<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['blog_infor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
 $_smarty_tpl->tpl_vars['value']->iteration++;
?>
						<h3>
							<?php echo $_smarty_tpl->tpl_vars['value']->value['blog_title'];?>

						</h3>
						<p>
							<?php echo $_smarty_tpl->tpl_vars['value']->value['blog_abstract'];?>

						</p>
						<p>
							<a class="btn" href="<?php echo @__CONTROLLER__;?>
/show/blog_id/<?php echo $_smarty_tpl->tpl_vars['value']->value['blog_id'];?>
">View details »</a>
						</p>
					<?php } ?>

				</div>
				<div class="col-md-3">
					<h2>
						网站介绍
					</h2>
					<p>
						本博客遵守中华人民共和国法律法规、中华民族基本道德和基本网络道德规范。主要用于交流PHP学习心得以及记录生活中的趣事。让我们畅游在自由，民主，开放的PHP开源社会中吧
					</p>
					<p>
						<a class="btn" href="<?php echo @__CONTROLLER__;?>
/introduce">About me »</a>
					</p>

				</div>
			</div>
			<div class="row">
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['blog_best_infor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
 $_smarty_tpl->tpl_vars['value']->iteration++;
?>
				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="Bootstrap Thumbnail First" src="/blog/<?php echo $_smarty_tpl->tpl_vars['value']->value['blog_img'];?>
" style="width:150px;height:150px" >
						<div class="caption">
							<h3>
								<?php echo $_smarty_tpl->tpl_vars['value']->value['blog_title'];?>

							</h3>
							<p>
								<?php echo $_smarty_tpl->tpl_vars['value']->value['blog_abstract'];?>

							</p>
							<p>
							 <a class="btn" href="<?php echo @__CONTROLLER__;?>
/show/blog_id/<?php echo $_smarty_tpl->tpl_vars['value']->value['blog_id'];?>
">View&gt&gt</a>
							</p>
						</div>
					</div>
				</div>
			<?php } ?>
<!-- 				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="Bootstrap Thumbnail Second" src="<?php echo @HOME_IMG_PATH;?>
/whalelogo.jpg" style="width:150px;height:150px" >
						<div class="caption">
							<h3>
								精选
							</h3>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
							<p>
								<a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
							</p>
						</div>
					</div>
				</div> -->
<!-- 				<div class="col-md-4">
					<div class="thumbnail">
						<img alt="Bootstrap Thumbnail Third" src="<?php echo @HOME_IMG_PATH;?>
/whalelogo.jpg" style="width:150px;height:150px" >
						<div class="caption">
							<h3>
								精选
							</h3>
							<p>
								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
							</p>
							<p>
								<a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
							</p>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['blog_normal_infor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['value']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
 $_smarty_tpl->tpl_vars['value']->iteration++;
?>
			<div class="row">
				<div class="col-md-3">
					<img alt="Bootstrap Image Preview"src="/blog/<?php echo $_smarty_tpl->tpl_vars['value']->value['blog_img'];?>
" style="width:150px;height:150px" >
				</div>
				<div class="col-md-9">
					<dl>
						<dt>
							文章标题
						</dt>
						<dd>
							<a href="<?php echo @__CONTROLLER__;?>
/show/blog_id/<?php echo $_smarty_tpl->tpl_vars['value']->value['blog_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['blog_title'];?>
</a>
						</dd>
						<dt>
							作者
						</dt>
						<dd>
							<?php echo $_smarty_tpl->tpl_vars['value']->value['blog_author'];?>

						</dd>
						<dt>
							关键词
						</dt>
						<dd>
							<?php echo $_smarty_tpl->tpl_vars['value']->value['blog_keyword'];?>

						</dd>
						<dt>
							摘要
						</dt>
						<dd>
							<?php echo $_smarty_tpl->tpl_vars['value']->value['blog_abstract'];?>

							<p>&lt;&lt;<a href="javascript:"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['blog_create_time'],"%Y-%m-%d");?>
</a></p>
						</dd>
					</dl>
				</div>
			</div>
		<?php } ?>	
			
		</div>
		<div class="col-md-4">
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
					 <span class ="glyphicon glyphicon-folder-open"></span>
					<span><?php echo $_smarty_tpl->tpl_vars['value']->value['archive'];?>
(<?php echo $_smarty_tpl->tpl_vars['value']->value['total'];?>
)</span></a>
				</li>
			<?php } ?>	
			</ul>
			<h3>
				友情链接.
			</h3>
			<ul>
				<li>
				<a href="https://pages.github.com/" target="_blank">Gitub</a>	
				</li>
				<li>
				<a href="http://www.csdn.net/" target="_blank">CSDN</a>	
				</li>
				<li>
				<a href="https://www.baidu.com/" target="_blank">百度</a>	
				</li>
				<li>
				<a href="http://www.sciencenet.cn/" target="_blank">科学网</a>	
				</li>
			</ul>
		</div>
	</div>
	<div class="row">
		<?php echo $_smarty_tpl->getSubTemplate ("public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
		
	</div>
  </div>
</div>
    <script src="<?php echo @HOME_JS_PATH;?>
/jquery.min.js"></script>
    <script src="<?php echo @HOME_JS_PATH;?>
/bootstrap.min.js"></script>
    <script src="<?php echo @HOME_JS_PATH;?>
/scripts.js"></script>
    <script type="text/javascript" src="<?php echo @HOME_JS_PATH;?>
/layer/1.9.3/layer.js"></script> 
    <script type="text/javascript">
    function pic_list(pic_title,id){
			    layer.open({ type: 2,
			    title: pic_title,
			    shadeClose: true,
			    shade: 0.8,
			    area: ['800px', '90%'],
			    content: '<?php echo @__CONTROLLER__;?>
/pic_list/pic_id/'+id //iframe的url
			}); 
    }
    </script>
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