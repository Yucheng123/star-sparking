<?php /* Smarty version Smarty-3.1.6, created on 2015-10-20 17:37:39
         compiled from "D:/itcast/homework/TPframework/blog/Home/View\public\header.html" */ ?>
<?php /*%%SmartyHeaderCode:43665611f13ca5dc21-67951775%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aebc795823a0288165a04ccb3223818ffc17a477' => 
    array (
      0 => 'D:/itcast/homework/TPframework/blog/Home/View\\public\\header.html',
      1 => 1445333855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43665611f13ca5dc21-67951775',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5611f13cb5248',
  'variables' => 
  array (
    'session_id' => 0,
    'session_name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5611f13cb5248')) {function content_5611f13cb5248($_smarty_tpl) {?><div class="container-fluid">
  <div class="row">
    <div class="col-md-7">
      <div class="row">
        <div class="col-md-2">
          <img alt="Bootstrap Image Preview" src="<?php echo @HOME_IMG_PATH;?>
/whalelogo.jpg" style="width:80px;height:80px" class="pull-middle" >
        </div>
        <div class="col-md-10">
          <h3 >
            艰难困苦，玉汝于成.
          </h3>
        </div>
      </div>
    </div>
    <div class="col-md-5">
      <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-9">
          <h3 class="pull-right">
            It's my golden age.
          </h3>
        </div>
      </div>
    </div>
  </div>
  <!--导航栏-->
	<div class="row">
		<div class="col-md-10">
			<ul class="nav nav-tabs">
				<li class="dropdown ">
   
        <a class="dropdown-toggle "  href="<?php echo @__CONTROLLER__;?>
/index">
          <span class ="glyphicon glyphicon-home"><span>
          首页      
          <span class="caret"></span>
        </a>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle "  href="<?php echo @__CONTROLLER__;?>
/navigator/cat_id/11">
             后台脚本      
              <span class="caret"></span>
            </a>
            <!-- <ul class="dropdown-menu" role="menu">
              <li><a href="#">自学笔记</a></li>
              <li><a href="#">bug处理</a></li>
              <li><a href="#">学习心得</a></li>
            </ul> -->
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle "  href="<?php echo @__CONTROLLER__;?>
/navigator/cat_id/10">
          前端技术      
          <span class="caret"></span>
          </a>
<!--           <ul class="dropdown-menu" role="menu">
              <li><a href="#">html</a></li>
              <li><a href="#">JS</a></li>
              <li><a href="#">css</a></li>
          </ul> -->
        </li>
        <li class="dropdown">
           <a class="dropdown-toggle "  href="<?php echo @__CONTROLLER__;?>
/navigator/cat_id/1">
              生活      
              <span class="caret"></span>
          </a>
<!--           <ul class="dropdown-menu" role="menu">
              <li><a href="#">旅游</a></li>
              <li><a href="#">美食</a></li>
              <li><a href="#">历史</a></li>
              <li><a href="#">文艺腔</a></li>
          </ul> -->
        </li>
<!--         <li class="dropdown">
   
           <a class="dropdown-toggle " data-toggle="dropdown" href="#">
              <span class ="glyphicon glyphicon-book"><span>
              在线资源      
              <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
              <li><a href="#">PHP手册</a></li>
              <li><a href="#">Mysql</a></li>
              <li><a href="#">Apache</a></li>
              <li><a href="#">其它</a></li>
          </ul>
        </li> -->
        <li>   
           <a class="dropdown-toggle "  href="<?php echo @__CONTROLLER__;?>
/introduce">
           <span class ="glyphicon glyphicon-user"></span>
              关于我
          </a>
        </li>
      </ul>
    </div>
        <div class="col-md-2">
        <ul class="nav nav-tabs" style="align:right">
          <?php if ($_smarty_tpl->tpl_vars['session_id']->value&&$_smarty_tpl->tpl_vars['session_name']->value){?>
           <li class="dropdown">
   
           <a class="dropdown-toggle " data-toggle="dropdown" href="#">
              <strong>欢迎你<?php echo $_smarty_tpl->tpl_vars['session_name']->value;?>
 </strong>     
              <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
              <li><a href="javascript:" onclick="log_out()">登出</a></li>
              
          </ul>
        </li>
      
          <?php }else{ ?>
          <li > <a href="javascript:" onclick="login()"><span>登陆</span></a></li>
          <?php }?>
        </ul>
        </div>
</div><?php }} ?>