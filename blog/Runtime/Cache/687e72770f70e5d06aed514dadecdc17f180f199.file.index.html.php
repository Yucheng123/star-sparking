<?php /* Smarty version Smarty-3.1.6, created on 2015-09-29 15:34:43
         compiled from "D:/itcast/homework/TPframework/blog/Admin/View\Host\index.html" */ ?>
<?php /*%%SmartyHeaderCode:24019560a133d542bb8-51585824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '687e72770f70e5d06aed514dadecdc17f180f199' => 
    array (
      0 => 'D:/itcast/homework/TPframework/blog/Admin/View\\Host\\index.html',
      1 => 1443512080,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24019560a133d542bb8-51585824',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_560a133d8f3bc',
  'variables' => 
  array (
    'infor' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560a133d8f3bc')) {function content_560a133d8f3bc($_smarty_tpl) {?>﻿<!DOCTYPE HTML>
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
<link href="<?php echo @ADMIN_CSS_PATH;?>
/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo @ADMIN_CSS_PATH;?>
/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="<?php echo @ADMIN_CSS_PATH;?>
/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo @ADMIN_LIB_PATH;?>
/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>主人列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 主人管理 <span class="c-gray en">&gt;</span> 主人列表 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="pd-20">
	<!-- <div class="text-c"> 日期范围：
		<input type="text" onfocus="WdatePicker({ maxDate:'#F{ $dp.$D(\'logmax\')||\'%y-%M-%d\'}'})" id="logmin" class="input-text Wdate" style="width:120px;">
		-
		<input type="text" onfocus="WdatePicker({ minDate:'#F{ $dp.$D(\'logmin\')}',maxDate:'%y-%M-%d'})" id="logmax" class="input-text Wdate" style="width:120px;">
		<input type="text" name="" id="" placeholder=" 主人名称" style="width:250px" class="input-text">
		<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜主人</button>
	</div> -->
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" onclick="host_add('添加主人','<?php echo @__CONTROLLER__;?>
/add')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加主人</a></span> <span class="r">共有数据：<strong><?php echo count($_smarty_tpl->tpl_vars['infor']->value);?>
</strong> 条</span> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort">
			<thead>
				<tr class="text-c">
					<th width="40"><input name="" type="checkbox" value=""></th>
					<th width="80">ID</th>
					<th width="100">头像</th>
					<th>主人名字</th>
					<th>微信</th>>
					<th width="150">爱好</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['infor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<tr class="text-c">
					<td><input name="" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['mid'];?>
"></td>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['mid'];?>
</td>
					<td><a href="javascript:;" onClick="host_edit('主人信息编辑','<?php echo @__CONTROLLER__;?>
/edit/mid/<?php echo $_smarty_tpl->tpl_vars['value']->value['mid'];?>
')"><img width="100" class="picture-thumb" src="/blog/<?php echo $_smarty_tpl->tpl_vars['value']->value['mg_img'];?>
"></a></td>
					<td class="text-c"><?php echo $_smarty_tpl->tpl_vars['value']->value['mg_name'];?>
</td>
					<td class="text-c"><?php echo $_smarty_tpl->tpl_vars['value']->value['mg_weixing'];?>
</td>
					<td class="text-c"><?php echo $_smarty_tpl->tpl_vars['value']->value['mg_hobby'];?>
</td>
					<td class="td-manage"><a style="text-decoration:none" class="ml-5" onClick="host_edit('主人信息编辑','<?php echo @__CONTROLLER__;?>
/edit/mid/<?php echo $_smarty_tpl->tpl_vars['value']->value['mid'];?>
')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="host_del(this,'<?php echo $_smarty_tpl->tpl_vars['value']->value['mid'];?>
')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript" src="<?php echo @ADMIN_LIB_PATH;?>
/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_LIB_PATH;?>
/layer/1.9.3/layer.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_LIB_PATH;?>
/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_LIB_PATH;?>
/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_JS_PATH;?>
/H-ui.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_JS_PATH;?>
/H-ui.admin.js"></script> 
<script type="text/javascript">
$('.table-sort').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"aoColumnDefs": [
	  //{ "bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
	  { "orderable":false,"aTargets":[0,5]}// 制定列不参与排序
	]
});
/*主人-添加*/
function host_add(title,url){
	var index = layer.open({ 
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
// /*主人-查看*/
// function picture_show(title,url,id){
// 	var index = layer.open({ 
// 		type: 2,
// 		title: title,
// 		content: url
// 	});
// 	layer.full(index);
// }
/*主人-审核*/
// function picture_shenhe(obj,id){
// 	layer.confirm('审核文章？', {
// 		btn: ['通过','不通过'], 
// 		shade: false
// 	},
// 	function(){
// 		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="picture_start(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
// 		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
// 		$(obj).remove();
// 		layer.msg('已发布', { icon:6,time:1000});
// 	},
// 	function(){
// 		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="picture_shenqing(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
// 		$(obj).parents("tr").find(".td-status").html('<span class="label label-danger radius">未通过</span>');
// 		$(obj).remove();
//     	layer.msg('未通过', { icon:5,time:1000});
// 	});	
// }
// /*主人-下架*/
// function picture_stop(obj,id){
// 	layer.confirm('确认要下架吗？',function(index){
// 		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="picture_start(this,id)" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a>');
// 		$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已下架</span>');
// 		$(obj).remove();
// 		layer.msg('已下架!',{ icon: 5,time:1000});
// 	});
// }

// /*主人-发布*/
// function picture_start(obj,id){
// 	layer.confirm('确认要发布吗？',function(index){
// 		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="picture_stop(this,id)" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');
// 		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
// 		$(obj).remove();
// 		layer.msg('已发布!',{ icon: 6,time:1000});
// 	});
// }
// /*主人-申请上线*/
// function picture_shenqing(obj,id){
// 	$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">待审核</span>');
// 	$(obj).parents("tr").find(".td-manage").html("");
// 	layer.msg('已提交申请，耐心等待审核!', { icon: 1,time:2000});
// }
/*主人-编辑*/
function host_edit(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*主人-删除*/
function host_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$(obj).parents("tr").remove();
		layer.msg('已删除!',{ icon:1,time:1000});
	});
}
</script>
</body>
</html><?php }} ?>