<?php /* Smarty version Smarty-3.1.6, created on 2015-10-11 23:15:38
         compiled from "D:/itcast/homework/TPframework/blog/Admin/View\Manager\welcome.html" */ ?>
<?php /*%%SmartyHeaderCode:716255fa373ea825e0-46057483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08d6d42b5a2dea14f2cb68be178e1e7f0dbafec2' => 
    array (
      0 => 'D:/itcast/homework/TPframework/blog/Admin/View\\Manager\\welcome.html',
      1 => 1444552650,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '716255fa373ea825e0-46057483',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_55fa373ecadc6',
  'variables' => 
  array (
    'login_times' => 0,
    'last_ip' => 0,
    'last_login_time' => 0,
    'server' => 0,
    'apache_version' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa373ecadc6')) {function content_55fa373ecadc6($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\itcast\\homework\\TPframework\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link href="<?php echo @ADMIN_CSS_PATH;?>
/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo @ADMIN_CSS_PATH;?>
/H-ui.admin.css" rel="stylesheet" type="text/css" />

<link href="<?php echo @ADMIN_LIB_PATH;?>
/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="<?php echo @ADMIN_LIB_PATH;?>
/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>我的桌面</title>
</head>
<body>
<div class="pd-20" style="padding-top:20px;">
  <p class="f-20 text-success">欢迎使用H-ui.admin <span class="f-14">v2.3</span>后台模版！</p>
  <p>登录次数：<?php echo $_smarty_tpl->tpl_vars['login_times']->value;?>
 </p>
  <p>上次登录IP：<?php echo $_smarty_tpl->tpl_vars['last_ip']->value;?>
  上次登录时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['last_login_time']->value,"%Y-%m-%d %H:%M:%S");?>
</p>
  <!-- <table class="table table-border table-bordered table-bg">
    <thead>
      <tr>
        <th colspan="7" scope="col">信息统计</th>
      </tr>
      <tr class="text-c">
        <th>统计</th>
        <th>资讯库</th>
        <th>图片库</th>
        <th>产品库</th>
        <th>用户</th>
        <th>管理员</th>
      </tr>
    </thead>
    <tbody>
      <tr class="text-c">
        <td>总数</td>
        <td>92</td>
        <td>9</td>
        <td>0</td>
        <td>8</td>
        <td>20</td>
      </tr>
      <tr class="text-c">
        <td>今日</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
      <tr class="text-c">
        <td>昨日</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
      <tr class="text-c">
        <td>本周</td>
        <td>2</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
      <tr class="text-c">
        <td>本月</td>
        <td>2</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
    </tbody>
  </table> -->
  <table class="table table-border table-bordered table-bg mt-20">
    <thead>
      <tr>
        <th colspan="2" scope="col">服务器信息</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td width="200">服务器计算机名</td>
        <td><span id="lbServerName">http://127.0.0.1/</span></td>
      </tr>
      <tr>
        <td>服务器IP地址</td>
        <td><?php echo $_smarty_tpl->tpl_vars['server']->value["SERVER_ADDR"];?>
</td>
      </tr>
      <tr>
        <td>服务器域名</td>
        <td><?php echo $_smarty_tpl->tpl_vars['server']->value["SERVER_NAME"];?>
</td>
      </tr>
      <tr>
        <td>服务器端口 </td>
        <td><?php echo $_smarty_tpl->tpl_vars['server']->value["SERVER_PORT"];?>
</td>
      </tr>
      <tr>
        <td>服务器apache版本 </td>
        <td><?php echo $_smarty_tpl->tpl_vars['apache_version']->value;?>
</td>
      </tr>
      <tr>
        <td>本文件所在文件夹 </td>
        <td><?php echo $_smarty_tpl->tpl_vars['server']->value["DOCUMENT_ROOT"];?>
</td>
      </tr>
      <tr>

    </tbody>
  </table>
</div>
<footer class="footer">
  <p>感谢jQuery、layer、laypage、Validform、UEditor、My97DatePicker、iconfont、Datatables、WebUploaded、icheck、highcharts、bootstrap-Switch<br>Copyright &copy;2015 H-ui.admin v2.3 All Rights Reserved.<br>
    本后台系统由<a href="http://www.h-ui.net/" target="_blank" title="H-ui前端框架">H-ui前端框架</a>提供前端技术支持</p>
</footer>
<script type="text/javascript" src="<?php echo @ADMIN_LIB_PATH;?>
/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="js/H-ui.js"></script>
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
</body>
</html><?php }} ?>