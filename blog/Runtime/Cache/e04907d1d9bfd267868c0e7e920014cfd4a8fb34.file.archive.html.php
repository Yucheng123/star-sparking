<?php /* Smarty version Smarty-3.1.6, created on 2015-10-20 16:38:30
         compiled from "D:/itcast/homework/TPframework/blog/Home/View\Index\archive.html" */ ?>
<?php /*%%SmartyHeaderCode:308235614fdf6a8ffa9-11219752%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e04907d1d9bfd267868c0e7e920014cfd4a8fb34' => 
    array (
      0 => 'D:/itcast/homework/TPframework/blog/Home/View\\Index\\archive.html',
      1 => 1445330305,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '308235614fdf6a8ffa9-11219752',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5614fdf70ab8b',
  'variables' => 
  array (
    'blog_infor' => 0,
    'value' => 0,
    'man_infor' => 0,
    'Archive' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5614fdf70ab8b')) {function content_5614fdf70ab8b($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\itcast\\homework\\TPframework\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
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
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['blog_infor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
					<div class="row">
						<div class="col-md-2">
							<img alt="Bootstrap Image Preview"src="/blog/<?php echo $_smarty_tpl->tpl_vars['value']->value['blog_img'];?>
" style="width:100px;height:100px" >
						</div>
						<div class="col-md-10">
							<dl>
								<dt>
									文章标题
								</dt>
								<dd>
									<a href="<?php echo @__CONTROLLER__;?>
/show/blog_id/<?php echo $_smarty_tpl->tpl_vars['value']->value['blog_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['blog_title'];?>
</a><br/>

								</dd>
								<dt>
									摘要
								</dt>
								<dd>
									<?php echo $_smarty_tpl->tpl_vars['value']->value['blog_abstract'];?>

									<p><strong>发表日期:</strong><a href="javascript:"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['blog_create_time'],"%Y-%m-%d");?>
</a> 
									<strong>作者:</strong><a href="javascript:"><?php echo $_smarty_tpl->tpl_vars['value']->value['blog_author'];?>
</a>
									<strong>关键词:</strong><a href="javascript:"><?php echo $_smarty_tpl->tpl_vars['value']->value['blog_keyword'];?>
</a>
									</p>
								</dd>
								<dt>
									<a href="<?php echo @__CONTROLLER__;?>
/show/blog_id/<?php echo $_smarty_tpl->tpl_vars['value']->value['blog_id'];?>
">阅读全文&gt;&gt;</a>

								</dt>
							</dl>
						</div>
					</div>
				<?php } ?>	
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
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
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