<?php /* Smarty version Smarty-3.1.6, created on 2015-10-13 18:38:01
         compiled from "D:/itcast/homework/TPframework/blog/Home/View\Login\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2194561ba6443c8607-22140010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51d3a9081b73044a191741f13d5accf9e179e817' => 
    array (
      0 => 'D:/itcast/homework/TPframework/blog/Home/View\\Login\\index.html',
      1 => 1444732676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2194561ba6443c8607-22140010',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_561ba64450618',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561ba64450618')) {function content_561ba64450618($_smarty_tpl) {?><!DOCTYPE html>
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
    <link href="<?php echo @HOME_CSS_PATH;?>
/login.css" rel="stylesheet">

  </head>
  <body class="login login-action-login wp-core-ui  locale-zh-cn">
	<div id="login">
		<!-- <h1 ><img src="/blog/home/public/img/whalelogo1.png" width="100px" height="100px"></h1> -->
		<form method="post" action="<?php echo @__SELF__;?>
" id="loginform" name="loginform">
			<p>
				<label for="user_login">用户名<br>
				<input type="text" size="20" value="" class="input" id="user_login" name="user_name"></label>
			</p>
			<p>
				<label for="user_pass">密码<br>
				<input type="password" size="20" value="" class="input" id="user_password" name="user_password"></label>
			</p>
				<p class="forgetmenot"><label for="rememberme"><input type="checkbox" value="1" id="rememberme" name="remember"> 记住我的登录信息</label></p>
			<p class="submit">
				<input type="submit" value="登录" class="button button-primary button-large" id="wp-submit" name="wp-submit">
				
			</p>
		</form>

<!-- 		<p id="nav">
			<a title="找回密码" href="http://www.zhangxinxu.com/wordpress/wp-login.php?action=lostpassword">忘记密码？</a>
		</p> -->
	</div>

<script type="text/javascript">
function wp_attempt_focus(){
setTimeout( function(){ try{
d = document.getElementById('user_login');
d.focus();
d.select();
} catch(e){}
}, 200);
}

wp_attempt_focus();
if(typeof wpOnload=='function')wpOnload();
</script>
</body>
  <?php }} ?>