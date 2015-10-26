<?php /* Smarty version Smarty-3.1.6, created on 2015-10-11 11:24:39
         compiled from "D:/itcast/homework/TPframework/blog/Admin/View\Login\index.html" */ ?>
<?php /*%%SmartyHeaderCode:98645619bcffa12033-08850344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e42c88d82951701ea7362d70eb2ae7e53f31168' => 
    array (
      0 => 'D:/itcast/homework/TPframework/blog/Admin/View\\Login\\index.html',
      1 => 1444533871,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98645619bcffa12033-08850344',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5619bcffc754d',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5619bcffc754d')) {function content_5619bcffc754d($_smarty_tpl) {?>﻿<!DOCTYPE HTML>
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
/H-ui.login.css" rel="stylesheet" type="text/css" />
<link href="<?php echo @ADMIN_CSS_PATH;?>
/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo @ADMIN_LIB_PATH;?>
/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>后台登录 - H-ui.admin v2.3</title>
<meta name="keywords" content="">
<meta name="description" content=" ">
</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value="" />
<div class="loginWraper">
  <div id="loginform" class="loginBox">
    <form class="form form-horizontal" action=" " method="post">
      <div class="row cl">
        <label class="form-label col-3"><i class="Hui-iconfont">&#xe60d;</i></label>
        <div class="formControls col-8">
          <input id="" name="mg_nick" type="text" placeholder="账户" class="input-text size-L">
        </div>
      </div>
      <div class="row cl">
        <label class="form-label col-3"><i class="Hui-iconfont">&#xe60e;</i></label>
        <div class="formControls col-8">
          <input id="" name="password" type="password" placeholder="密码" class="input-text size-L">
        </div>
      </div>
      <div class="row cl">
        <div class="formControls col-8 col-offset-3">
          <input class="input-text size-L" type="text" placeholder="验证码" name="captcha" onblur="if(this.value==''){ this.value='验证码:'}" onclick="if(this.value=='验证码:'){ this.value='';}" value="验证码:" style="width:150px;">
          <img id="captcha" src="<?php echo @__CONTROLLER__;?>
/captcha" style="width:150px;height:40px"> <a id="kanbuq" href="javascript:" onclick="changecaptcha()">换一张</a> </div>
      </div>
      <div class="row">
        <div class="formControls col-8 col-offset-3">
          <label for="online">
            <input type="checkbox" name="online" id="online" value="1">
            使我保持登录状态</label>
        </div>
      </div>
      <div class="row">
        <div class="formControls col-8 col-offset-3">
          <input name="" type="submit" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
          <input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
        </div>
      </div>
    </form>
  </div>
</div>
<div class="footer">Copyright 你的公司名称 by H-ui.admin.v2.3</div>
<script type="text/javascript" src="<?php echo @ADMIN_LIB_PATH;?>
/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="<?php echo @ADMIN_JS_PATH;?>
/H-ui.js"></script> 
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?080836300300be57b7f34f4b3e97d911";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F080836300300be57b7f34f4b3e97d911' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
  function changecaptcha(){
    //console.log(1);
    $("#captcha")[0].src="<?php echo @__CONTROLLER__;?>
/captcha/"+Math.random();
  }
</script>>
</body>
</html><?php }} ?>