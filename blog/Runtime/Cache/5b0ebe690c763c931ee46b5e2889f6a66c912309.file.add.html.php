<?php /* Smarty version Smarty-3.1.6, created on 2015-10-20 22:59:03
         compiled from "D:/itcast/homework/TPframework/blog/Admin/View\Blog\add.html" */ ?>
<?php /*%%SmartyHeaderCode:505855fa57fde64644-44888622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b0ebe690c763c931ee46b5e2889f6a66c912309' => 
    array (
      0 => 'D:/itcast/homework/TPframework/blog/Admin/View\\Blog\\add.html',
      1 => 1445352267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '505855fa57fde64644-44888622',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55fa57fe253b7',
  'variables' => 
  array (
    'cat_parent_infor' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa57fe253b7')) {function content_55fa57fe253b7($_smarty_tpl) {?><!DOCTYPE HTML>
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
<link href="<?php echo @ADMIN_LIB_PATH;?>
/icheck/icheck.css" rel="stylesheet" type="text/css" />
<link href="<?php echo @ADMIN_LIB_PATH;?>
/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<link href="<?php echo @ADMIN_LIB_PATH;?>
/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />

<!--[if IE 6]>
<script type="text/javascript" src="<?php echo @ADMIN_LIB_PATH;?>
/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>新增文章</title>
</head>
<body>
<div class="pd-20">
	<form action="<?php echo @__SELF__;?>
" method="post" class="form form-horizontal" id="form-article-add">
		<div class="row cl">
			<label class="form-label col-2"><span class="c-red">*</span>文章标题：</label>
			<div class="formControls col-10">
				<input type="text" class="input-text" value="" placeholder="" id="" name="blog_title">
			</div>
		</div>
<!-- 		<div class="row cl">
			<label class="form-label col-2">简略标题：</label>
			<div class="formControls col-10">
				<input type="text" class="input-text" value="" placeholder="" id="" name="">
			</div>
		</div> -->
		<div class="row cl">
			<label class="form-label col-2"><span class="c-red">*</span>分类栏目：</label>
			<div class="formControls col-2"> <span class="select-box">
			<!-- 二级联动菜单，父级菜单改变触发子集菜单的改变 -->
				<select name="cat_parent" class="select" >
					<option value="0">全部栏目</option>
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cat_parent_infor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cat_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['cat_name'];?>
</option>
					<?php } ?>
				</select>
				</span> 
			</div>
			<div class="formControls col-2"> <span class="select-box">
				<select name="cat_id" class="select">
					<option value="0">全部栏目</option>

				</select>
				</span> 
			</div>

			<label class="form-label col-2">排序值：</label>
			<div class="formControls col-2">
				<input type="text" class="input-text" value="0" placeholder="" id="" name="sort_by">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-2">关键词：</label>
			<div class="formControls col-10">
				<input type="text" class="input-text" value="0" placeholder="" id="" name="blog_keyword">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-2">文章摘要：</label>
			<div class="formControls col-10">
				<textarea name="blog_abstract" cols="" rows="" class="textarea"  placeholder="说点什么...最少输入10个字符" datatype="*10-100" dragonfly="true" nullmsg="备注不能为空！" onKeyUp="textarealength(this,200)"></textarea>
				<p class="textarea-numberbar"><em class="textarea-length">0</em>/200</p>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-2">文章作者：</label>
			<div class="formControls col-2">
				<input type="text" class="input-text" value="0" placeholder="" id="" name="blog_author">
			</div>
			<label class="form-label col-2"><span class="c-red">*</span>文章类型：</label>
			<div class="formControls col-2"> 
				<span class="select-box">
					<select name="is_self" class="select">
						<option value="1">原创</option>
						<option value="0">转载</option>
					</select>
				</span> 
			</div>
			<label class="form-label col-2">文章来源：</label>
			<div class="formControls col-2">
				<input type="text" class="input-text" value="0" placeholder="" id="" name="blog_source">
			</div>

		</div>
<!-- 		<div class="row cl">
			<label class="form-label col-2">允许评论：</label>
			<div class="formControls col-2 skin-minimal">
				<div class="check-box">
					<input type="checkbox" id="checkbox-pinglun">
					<label for="checkbox-pinglun">&nbsp;</label>
				</div>
			</div>
			<label class="form-label col-2">评论开始日期：</label>
			<div class="formControls col-2">
				<input type="text" onfocus="WdatePicker({ dateFmt:'yyyy-MM-dd HH:mm:ss',maxDate:'#F{ $dp.$D(\'datemax\')||\'%y-%M-%d\'}'})" id="datemin" class="input-text Wdate">
			</div>
			<label class="form-label col-2">评论结束日期：</label>
			<div class="formControls col-2">
				<input type="text" onfocus="WdatePicker({ dateFmt:'yyyy-MM-dd HH:mm:ss',minDate:'#F{ $dp.$D(\'datemin\')}'})" id="datemax" class="input-text Wdate">
			</div>
		</div> -->
		<div class="row cl">
			<label class="form-label col-2">是否精选：</label>
			<div class="formControls col-2 skin-minimal">
				<div class="check-box">
					<input type="checkbox" id="checkbox-moban" name="is_best" value = "1">
					<label for="checkbox-moban">&nbsp;</label>
				</div>
			</div>
			<label class="form-label col-2">是否头条：</label>
			<div class="formControls col-2 skin-minimal">
				<div class="check-box">
					<input type="checkbox" id="checkbox-moban" name="is_top" value = "1">
					<label for="checkbox-moban">&nbsp;</label>
				</div>
			</div>
		</div> 
		<div class="row cl">
			<label class="form-label col-2">封面图：</label>
			<div class="formControls col-10">
				<div class="uploader-thum-container">
					<div id="fileDrag" class="uploader-Drag">
							<div id="fileList" class="uploader-list"></div>
							<div id="filePick">选择图片</div>
							<button id="btn-star" class="btn btn-default btn-uploadstar radius ml-10">开始上传</button>
					</div>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-2">文章内容：</label>
			<div class="formControls col-10"> 
				<script id="editor" type="text/plain" style="width:100%;height:400px;" name = "blog_text"></script> 
			</div>
		</div>
		<div class="row cl">
			<div class="col-10 col-offset-2">
				<button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存</button>
				<button onClick="article_save();" class="btn btn-secondary radius" type="button"><i class="Hui-iconfont">&#xe632;</i> 保存草稿</button>
				<button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>
	</form>
</div>
<script type="text/javascript" src="<?php echo @ADMIN_LIB_PATH;?>
/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_LIB_PATH;?>
/layer/1.9.3/layer.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_LIB_PATH;?>
/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_LIB_PATH;?>
/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_LIB_PATH;?>
/Validform/5.3.2/Validform.min.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_LIB_PATH;?>
/webuploader/0.1.5/webuploader.min.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_LIB_PATH;?>
/ueditor/1.4.3/ueditor.config.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_LIB_PATH;?>
/ueditor/1.4.3/ueditor.all.min.js"> </script> 
<script type="text/javascript" src="<?php echo @ADMIN_LIB_PATH;?>
/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_JS_PATH;?>
/H-ui.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_JS_PATH;?>
/H-ui.admin.js"></script> 

<script type="text/javascript">
$(function(){
	//这里应该是设置获得焦点时出现光晕的
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	$list = $("#fileList"),
	$btn = $("#btn-star"),
	state = "pending",
	uploader;

	var uploader = WebUploader.create({
		auto: true,
		swf: '<?php echo @ADMIN_LIB_PATH;?>
/webuploader/0.1.5/Uploader.swf',
	
		// 文件接收服务端。
		//server: 'http://lib.h-ui.net/webuploader/0.1.5/server/fileupload.php',
		server: '<?php echo @__CONTROLLER__;?>
/uploadimg',
	
		// 选择文件的按钮。可选。
		// 内部根据当前运行是创建，可能是input元素，也可能是flash.
		pick: '#filePick',
		// 拖拽
		dnd:'#fileDrag',
		paste: document.body,
		disableGlobalDnd: true,
	
		// 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
		resize: false,
		// thumb:{ width: 110,
		// 	    height: 110,

		// 	    // 图片质量，只有type为`image/jpeg`的时候才有效。
		// 	    quality: 70,

		// 	    // 是否允许放大，如果想要生成小图的时候不失真，此选项应该设置为false.
		// 	    allowMagnify: true,

		// 	    // 是否允许裁剪。
		// 	    crop: false,

		// 	    // 为空的话则保留原有图片格式。
		// 	    // 否则强制转换成指定的类型。
		// 	    type: 'image/jpeg'

		// },
		// 只允许选择图片文件。
		accept: {
			title: 'Images',
			extensions: 'gif,jpg,jpeg,bmp,png',
			mimeTypes: 'image/*'
		}
	});
	uploader.on( 'fileQueued', function( file ) {
		var $li = $(
			'<div id="' + file.id + '" class="item">' +
				'<div class="pic-box"><img></div>'+
				'<div class="info">' + file.name + '</div>' +
				'<p class="state">等待上传...</p>'+
			'</div>'
		),
		$img = $li.find('img');
		$list.append( $li );
	
		// 创建缩略图
		// 如果为非图片文件，可以不用调用此方法。
		// thumbnailWidth x thumbnailHeight 为 100 x 100
		// uploader.makeThumb( file, function( error, src ) {
		// 	if ( error ) {
		// 		$img.replaceWith('<span>不能预览</span>');
		// 		return;
		// 	}
	
		// 	$img.attr( 'src', src );
		// }, thumbnailWidth, thumbnailHeight );
	});
	// 文件上传过程中创建进度条实时显示。
	uploader.on( 'uploadProgress', function( file, percentage ) {
		var $li = $( '#'+file.id ),
			$percent = $li.find('.progress-box .sr-only');
	
		// 避免重复创建
		if ( !$percent.length ) {
			$percent = $('<div class="progress-box"><span class="progress-bar radius"><span class="sr-only" style="width:0%"></span></span></div>').appendTo( $li ).find('.sr-only');
		}
		$li.find(".state").text("上传中");
		$percent.css( 'width', percentage * 100 + '%' );
	});
	
	// 文件上传成功，给item添加成功class, 用样式标记上传成功。
	uploader.on( 'uploadSuccess', function( file ) {
		$( '#'+file.id ).addClass('upload-state-success').find(".state").text("已上传");
	});
	
	// 文件上传失败，显示上传出错。
	uploader.on( 'uploadError', function( file ) {
		$( '#'+file.id ).addClass('upload-state-error').find(".state").text("上传出错");
	});
	
	// 完成上传完了，成功或者失败，先删除进度条。
	uploader.on( 'uploadComplete', function( file ) {
		$( '#'+file.id ).find('.progress-box').fadeOut();
	});
	uploader.on('all', function (type) {
        if (type === 'startUpload') {
            state = 'uploading';
        } else if (type === 'stopUpload') {
            state = 'paused';
        } else if (type === 'uploadFinished') {
            state = 'done';
        }

        if (state === 'uploading') {
            $btn.text('暂停上传');
        } else {
            $btn.text('开始上传');
        }
    });
    uploader.on( 'uploadAccept', function( file, response ) {
    	//console.log(response);
    if (!response) {
        // 通过return false来告诉组件，此文件上传有错。
        return false;
    }
	});
     uploader.on( 'uploadSuccess', function( file, response ) {
     	console.log(response);
     	var $hide =$(
     				 '<input type="hidden" value="'+response.path+'" name ="blog_img">'
     				); 
     	$list.append($hide);
	});

    $btn.on('click', function () {
        if (state === 'uploading') {
            uploader.stop();
        } else {
            uploader.upload();
        }
    });
	var ue = UE.getEditor('editor');
	
});

function article_save(){
	$("#form-article-add").append($('<input type="hidden" name="is_finished" value="0">'));
	$("#form-article-add").submit();
}
</script>
<!--二级联动菜单的函数设计-->
<script type="text/javascript">
	$('[name="cat_parent"]').change(
		function(){
			var pid = $('[name="cat_parent"] option:selected').attr("value");
			$.ajax ({
				url:"<?php echo @__MODULE__;?>
/category/getchild/pid/"+pid,
				type:"GET",
				dataType:"json",
				success:function(msg){
					// console.log(msg);
					//console.log(msg[1]);
					$('[name = "cat_id"]').empty();
					for(var i in msg){

						$('[name="cat_id"]').append("<option value = "+msg[i].cat_id+">"+msg[i].cat_name+"</option>");
					}
				}
			});
		}
	)
</script>

</body>
</html><?php }} ?>