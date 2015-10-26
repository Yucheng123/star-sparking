<?php /* Smarty version Smarty-3.1.6, created on 2015-10-21 23:12:09
         compiled from "D:/itcast/homework/TPframework/blog/Admin/View\Blog\test.html" */ ?>
<?php /*%%SmartyHeaderCode:36415627aa2ed4e863-55179148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d9c37d3adcec6263af13c6b54d3ef72732bcacf' => 
    array (
      0 => 'D:/itcast/homework/TPframework/blog/Admin/View\\Blog\\test.html',
      1 => 1445440320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36415627aa2ed4e863-55179148',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5627aa2f004ea',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5627aa2f004ea')) {function content_5627aa2f004ea($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo @ADMIN_LIB_PATH;?>
/html5.js"></script>
<script type="text/javascript" src="<?php echo @ADMIN_LIB_PATH;?>
/respond.min.js"></script>
<script type="text/javascript" src="<?php echo @ADMIN_LIB_PATH;?>
/PIE_IE678.js"></script>
<![endif]-->


<title>新增文章</title>
</head>
<body>
<div class="pd-20">
	<form action="<?php echo @__CONTROLLER__;?>
/uploadimg" method="post" class="form form-horizontal" id="form-article-add" enctype = "multipart/form-data">
		<div class="row cl">
			<label class="form-label col-2">封面图：</label>
			<div class="formControls col-10">
				<div class="uploader-thum-container">
					<div id="fileDrag" class="uploader-Drag">
							<input type="file" name = "file">
							<button id="btn-star" type = "submit"class="btn btn-default btn-uploadstar radius ml-10">开始上传</button>
					</div>
				</div>
			</div>
		</div>

	</form>
</div>

</body>
</html><?php }} ?>