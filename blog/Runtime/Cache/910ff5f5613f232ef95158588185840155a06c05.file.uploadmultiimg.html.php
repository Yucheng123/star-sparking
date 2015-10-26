<?php /* Smarty version Smarty-3.1.6, created on 2015-09-28 12:31:25
         compiled from "D:/itcast/homework/TPframework/blog/Admin/View\Picture\uploadmultiimg.html" */ ?>
<?php /*%%SmartyHeaderCode:320795608bb25134a47-46106708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '910ff5f5613f232ef95158588185840155a06c05' => 
    array (
      0 => 'D:/itcast/homework/TPframework/blog/Admin/View\\Picture\\uploadmultiimg.html',
      1 => 1443414681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '320795608bb25134a47-46106708',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5608bb2528eb3',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5608bb2528eb3')) {function content_5608bb2528eb3($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
</head>
<body>
<form action="<?php echo @__SELF__;?>
" enctype="multipart/form-data" method="POST">
	<input type="file" name="file[]">
	<input type="file" name="file[]">
	<input type="file" name="file[]">
<input type ="submit">
	
</form>
</body><?php }} ?>