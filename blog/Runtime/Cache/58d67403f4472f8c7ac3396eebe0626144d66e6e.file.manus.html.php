<?php /* Smarty version Smarty-3.1.6, created on 2015-09-26 20:47:45
         compiled from "D:/itcast/homework/TPframework/blog/Admin/View\Blog\manus.html" */ ?>
<?php /*%%SmartyHeaderCode:11443560693f1b16343-16908492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58d67403f4472f8c7ac3396eebe0626144d66e6e' => 
    array (
      0 => 'D:/itcast/homework/TPframework/blog/Admin/View\\Blog\\manus.html',
      1 => 1443259265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11443560693f1b16343-16908492',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blog_infor' => 0,
    'val' => 0,
    'cat_json' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_560693f2878f1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_560693f2878f1')) {function content_560693f2878f1($_smarty_tpl) {?>﻿<!DOCTYPE HTML>
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
<link rel="stylesheet" href="<?php echo @ADMIN_LIB_PATH;?>
/zTree/v3/css/zTreeStyle/zTreeStyle.css" type="text/css">
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>博客列表</title>
</head>
<body class="pos-r">
<div class="pos-a" style="width:150px;left:0;top:0; bottom:0; height:100%; border-right:1px solid #e5e5e5; background-color:#f5f5f5">
	<ul id="treeDemo" class="ztree">
	</ul>
</div>
<div style="margin-left:150px;">
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 博客管理 <span class="c-gray en">&gt;</span> 博客列表 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="pd-20">
		<div class="text-c"> 日期范围：
			<input type="text" onfocus="WdatePicker({ maxDate:'#F{ $dp.$D(\'logmax\')||\'%y-%M-%d\'}'})" id="logmin" class="input-text Wdate" style="width:120px;">
			-
			<input type="text" onfocus="WdatePicker({ minDate:'#F{ $dp.$D(\'logmin\')}',maxDate:'%y-%M-%d'})" id="logmax" class="input-text Wdate" style="width:120px;">
			<input type="text" name="" id="" placeholder=" 博客名称" style="width:250px" class="input-text">
			<button name="" id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜博客</button>
		</div>
		<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" onclick="blog_add('添加产品','<?php echo @__CONTROLLER__;?>
/add')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加博文</a></span> <span class="r">共有数据：<strong><?php echo count($_smarty_tpl->tpl_vars['blog_infor']->value);?>
</strong> 条</span> </div>
		<div class="mt-20">
			<table class="table table-border table-bordered table-bg table-hover table-sort">
				<thead>
					<tr class="text-c">
						<th width="40"><input name="" type="checkbox" value=""></th>
						<th width="40">分类</th>
						<th width="60">缩略图</th>
						<th width="100">博客标题</th>
						<th>摘要</th>
						<th width="100">关键字</th>
						<!-- <th width="60">发布状态</th> -->
						<th width="100">操作</th>
					</tr>
				</thead>
				<tbody>
					<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['blog_infor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
					<tr class="text-c va-m">
						<td><input name="" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['blog_id'];?>
"></td>
						<td><?php echo $_smarty_tpl->tpl_vars['val']->value['cat_name'];?>
</td>
						<td><a onClick="" href="javascript:;"><img width="60" class="product-thumb" src="/blog/<?php echo $_smarty_tpl->tpl_vars['val']->value['blog_img'];?>
"></a></td>
						<td class="text-l"><a style="text-decoration:none" onClick="blog_show('博文展示','<?php echo @__CONTROLLER__;?>
/showtext/id/<?php echo $_smarty_tpl->tpl_vars['val']->value['blog_id'];?>
')" href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['val']->value['blog_title'];?>
</td>
						<td class="text-l"><?php echo $_smarty_tpl->tpl_vars['val']->value['blog_abstract'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['val']->value['blog_keyword'];?>
</td>
						<!-- <td class="td-status"><span class="label label-success radius">已发布</span></td> -->
						<td class="td-manage"><a style="text-decoration:none" class="ml-5" onClick="blog_edit('博文编辑','<?php echo @__CONTROLLER__;?>
/edit/id/<?php echo $_smarty_tpl->tpl_vars['val']->value['blog_id'];?>
')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="blog_del(this,'<?php echo $_smarty_tpl->tpl_vars['val']->value['blog_id'];?>
')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
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
<script type="text/javascript" src="<?php echo @ADMIN_LIB_PATH;?>
/zTree/v3/js/jquery.ztree.all-3.5.min.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_JS_PATH;?>
/H-ui.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_JS_PATH;?>
/H-ui.admin.js"></script> 
<script type="text/javascript">
var setting = {
	view: {
		dblClickExpand: false,
		showLine: false,
		selectedMulti: false,
		addHoverDom: addHoverDom,
//		removeHoverDom: removeHoverDom
	},
	data: {
		simpleData: {
			enable:true,
			idKey: "cat_id",
			pIdKey: "cat_pid",
			rootPId: ""
		}
	},
	edit:{
	enable:true,
	removeTitle:"删除节点",
	renameTitle:"编辑节点名称",
	editNameSelectAll:true
	},
	callback: {
		beforeClick: function(treeId, treeNode) {
			var zTree = $.fn.zTree.getZTreeObj("treeDemo");
			if (treeNode.isParent) {
				zTree.expandNode(treeNode);
				return false;
			}
		},
		beforeRename: function (treeId, treeNode,newname){
			var pid = treeNode.getParentNode().cat_id;
			console.log(pid);
			//alert(pid);
			var id = treeNode.cat_id;
			$.ajax({
                url: "<?php echo @__MODULE__;?>
/category/rename/pid/"+pid+"/name/"+newname+"/id/"+id,
                type: "GET",
                async: false,
                success: function (res) {
                    if (res =="success") {
                        alert('修改成功!');
                        //window.location.reload();
                    } else {
                        alert('修改失败!');
                        window.location.reload();
                    }
                }
		    });
		}
	}
};

var zNodes=<?php echo $_smarty_tpl->tpl_vars['cat_json']->value;?>
;

function addHoverDom(treeId, treeNode) {
            var sObj = $("#" + treeNode.tId + "_span");
            if (treeNode.editNameFlag || $("#addBtn_" + treeNode.tId).length > 0) return;
            var addStr = "<span class='button add' id='addBtn_" + treeNode.tId
                + "' title='add node' onfocus='this.blur();'></span>";
            sObj.after(addStr);
            var btn = $("#addBtn_" + treeNode.tId);
            if (btn) btn.bind("click", function () {
                var zTree = $.fn.zTree.getZTreeObj("treeDemo");
                if (confirm("确认为 " + treeNode.name + " 添加子节点吗？")) {
					//alert (treeNode.id);

				   zTree.addNodes(treeNode, [{ "cat_pid":treeNode.cat_id,"name":"newNode","open":true}],false);
                   var treeInfo = treeNode.cat_id;
                  // alert(treeInfo);
			           $.ajax({
                	url: "<?php echo @__MODULE__;?>
/category/rename/pid/"+treeInfo+"/name/"+"newNode"+"/id/0",
                        type: "GET",
                        async: false,
                        success: function (res) {
                            if (res == "success") {
                                alert('添加成功!');
                               // window.location.reload();
                            } else {
                                alert('添加失败!');
                              //  window.location.reload();
                            }
                        }
                    });

                
            }
			});
        };
		
$(document).ready(function(){
	var t = $("#treeDemo");
	t = $.fn.zTree.init(t, setting, zNodes);
	var zTree = $.fn.zTree.getZTreeObj("treeDemo");
	zTree.selectNode(zTree.getNodeByParam("id",'11'));
});

$('.table-sort').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"aoColumnDefs": [
	  { "orderable":false,"aTargets":[0,6]}// 制定列不参与排序
	]
});
/*图片-添加*/
function blog_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*图片-查看*/
function blog_show(title,url){
	layer.open({
	    type: 2,
	    title: title,
	    shadeClose: true,
	    shade: 0.8,
	    area: ['600px', '90%'],
	    content:url //iframe的url
	}); 
}
/*图片-审核*/
// function product_shenhe(obj,id){
// 	layer.confirm('审核文章？', {
// 		btn: ['通过','不通过'], 
// 		shade: false
// 	},
// 	function(){
// 		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="blog_start(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
// 		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
// 		$(obj).remove();
// 		layer.msg('已发布', { icon:6,time:1000});
// 	},
// 	function(){
// 		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="blog_submit(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
// 		$(obj).parents("tr").find(".td-status").html('<span class="label label-danger radius">未通过</span>');
// 		$(obj).remove();
//     	layer.msg('未通过', { icon:5,time:1000});
// 	});	
// }
/*图片-下架*/
// function blog_stop(obj,id){
// 	layer.confirm('确认要下架吗？',function(index){
// 		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="blog_start(this,id)" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a>');
// 		$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已下架</span>');
// 		$(obj).remove();
// 		layer.msg('已下架!',{ icon: 5,time:1000});
// 	});
// }

// /*图片-发布*/
// function blog_start(obj,id){
// 	layer.confirm('确认要发布吗？',function(index){
// 		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="blog_stop(this,id)" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');
// 		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
// 		$(obj).remove();
// 		layer.msg('已发布!',{ icon: 6,time:1000});
// 	});
// }
// /*图片-申请上线*/
// function blog_submit(obj,id){
// 	$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">待审核</span>');
// 	$(obj).parents("tr").find(".td-manage").html("");
// 	layer.msg('已提交申请，耐心等待审核!', { icon: 1,time:2000});
// }
// /*文本-编辑*/
function blog_edit(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
// /*文本-删除*/
function blog_del(obj,id){
	layer.confirm('确认要删除吗？',function(){
		$.ajax({
			url:'<?php echo @__CONTROLLER__;?>
/delete/id/'+id,
			type: "GET",
			success: function(text){
				if(text=="success"){
					$(obj).parents("tr").remove();
					layer.msg('已删除!',{ icon:1,time:1000});				
					
				}
				else{
					layer.msg('删除失败!',{ icon:1,time:1000});				
	
				}
			}

		})
	});
 }
</script>
</body>
</html><?php }} ?>