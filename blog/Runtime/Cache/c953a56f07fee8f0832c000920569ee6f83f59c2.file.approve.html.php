<?php /* Smarty version Smarty-3.1.6, created on 2015-10-07 19:42:30
         compiled from "D:/itcast/homework/TPframework/blog/Admin/View\Comment\approve.html" */ ?>
<?php /*%%SmartyHeaderCode:53915613dc64229534-49194314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c953a56f07fee8f0832c000920569ee6f83f59c2' => 
    array (
      0 => 'D:/itcast/homework/TPframework/blog/Admin/View\\Comment\\approve.html',
      1 => 1444144307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53915613dc64229534-49194314',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5613dc649b65f',
  'variables' => 
  array (
    'comment_infor' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5613dc649b65f')) {function content_5613dc649b65f($_smarty_tpl) {?>﻿<!DOCTYPE HTML>
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
<title>评论列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 评论管理 <span class="c-gray en">&gt;</span> 评论列表 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="pd-20">
	<!-- <div class="text-c"> 日期范围：
		<input type="text" onfocus="WdatePicker({ maxDate:'#F{ $dp.$D(\'logmax\')||\'%y-%M-%d\'}'})" id="logmin" class="input-text Wdate" style="width:120px;">
		-
		<input type="text" onfocus="WdatePicker({ minDate:'#F{ $dp.$D(\'logmin\')}',maxDate:'%y-%M-%d'})" id="logmax" class="input-text Wdate" style="width:120px;">
		<input type="text" name="" id="" placeholder=" 评论名称" style="width:250px" class="input-text">
		<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜评论</button>
	</div> -->
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>共有评论：<strong><?php echo count($_smarty_tpl->tpl_vars['comment_infor']->value);?>
</strong> 条</span> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort">
			<thead>
				<tr class="text-c">
					<th width="40"><input name="" type="checkbox" value=""></th>
					<th width="80">ID</th>
					<th width="100">博文题目</th>
					<th>评论用户</th>

					<th>评论描述</th>
					<th>路径</th>
					<th>审核状态</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['comment_infor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<tr class="text-c">
					<td><input name="" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
"></td>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
</td>
					<td><a href="javascript:;" onClick="host_edit('评论信息编辑','<?php echo @__CONTROLLER__;?>
/edit/cid/<?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
')"><?php echo $_smarty_tpl->tpl_vars['value']->value['blog_title'];?>
</a></td>
					<td class="text-c"><?php echo $_smarty_tpl->tpl_vars['value']->value['user_name'];?>
</td>
					<td class="text-c"><?php echo $_smarty_tpl->tpl_vars['value']->value['comments'];?>
</td>
					<td ><?php echo str_repeat("&nbsp",$_smarty_tpl->tpl_vars['value']->value['level']);?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['path'];?>
</td>
					<td class="td-status"><span class="label label-danger radius"><?php if ($_smarty_tpl->tpl_vars['value']->value['is_approved']==0){?>未审核<?php }?></span></td>
					<td class="td-manage"><a style="text-decoration:none" onClick="comment_shenhe(this,'<?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
')" href="javascript:;" title="审核"><i class="Hui-iconfont">&#xe6de;</i></a> <i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="host_del(this,'<?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
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
/*评论-添加*/
function host_add(title,url){
	var index = layer.open({ 
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
// /*评论-查看*/
// function picture_show(title,url,id){
// 	var index = layer.open({ 
// 		type: 2,
// 		title: title,
// 		content: url
// 	});
// 	layer.full(index);
// }
/*评论-审核*/
function comment_shenhe(obj,id){
	layer.confirm('审核文章？', {
		btn: ['通过','不通过'], 
		shade: false
	},
	function(){
		//发出ajax请求
		$.ajax({
			url:"<?php echo @__CONTROLLER__;?>
/shenhe/cid/"+id,
			type:"GET",
			success:function(msg){
				if(msg=="success"){
					$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已通过</span>');
				}
				else{
					alert("修改失败");
				}

			}
		})
		layer.msg('已发布', { icon:6,time:1000});
	},
	function(){

		$(obj).parents("tr").find(".td-status").html('<span class="label label-danger radius">未通过</span>');

    	layer.msg('未通过', { icon:5,time:1000});
	});	
}
// /*评论-下架*/
function picture_stop(obj,id){
	layer.confirm('确认要下架吗？',function(index){
		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="picture_start(this,id)" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已下架</span>');
		$(obj).remove();
		layer.msg('已下架!',{ icon: 5,time:1000});
	});
}

// /*评论-发布*/
// function picture_start(obj,id){
// 	layer.confirm('确认要发布吗？',function(index){
// 		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="picture_stop(this,id)" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');
// 		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
// 		$(obj).remove();
// 		layer.msg('已发布!',{ icon: 6,time:1000});
// 	});
// }
// /*评论-申请上线*/
// function picture_shenqing(obj,id){
// 	$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">待审核</span>');
// 	$(obj).parents("tr").find(".td-manage").html("");
// 	layer.msg('已提交申请，耐心等待审核!', { icon: 1,time:2000});
// }
/*评论-编辑*/
// function host_edit(title,url){
// 	var index = layer.open({
// 		type: 2,
// 		title: title,
// 		content: url
// 	});
// 	layer.full(index);
// }
/*评论-删除*/
function host_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		//console.log("hello");
		$.ajax({
			url:"<?php echo @__CONTROLLER__;?>
/del/cid/"+id,
			type:"GET",
			success:function(msg){
				if(msg=="is_parent"){
					layer.msg('还有子评论未删除', { icon:5,time:1000})
				}
				if(msg =="success"){
					$(obj).parents("tr").remove();
					layer.msg('已删除!',{ icon:1,time:1000});
				}
				if(msg=="failed"){
					layer.msg("删除失败",{ icon:5,time:1000});
				}

			}
		})

	});
}
</script>
</body>
</html><?php }} ?>