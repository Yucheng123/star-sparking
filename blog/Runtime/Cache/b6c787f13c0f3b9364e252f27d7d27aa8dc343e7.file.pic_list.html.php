<?php /* Smarty version Smarty-3.1.6, created on 2015-10-07 14:05:56
         compiled from "D:/itcast/homework/TPframework/blog/Home/View\Index\pic_list.html" */ ?>
<?php /*%%SmartyHeaderCode:2285356147e58529dc3-74134696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6c787f13c0f3b9364e252f27d7d27aa8dc343e7' => 
    array (
      0 => 'D:/itcast/homework/TPframework/blog/Home/View\\Index\\pic_list.html',
      1 => 1444187076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2285356147e58529dc3-74134696',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56147e5874f5b',
  'variables' => 
  array (
    'pic_gallery' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56147e5874f5b')) {function content_56147e5874f5b($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Galleria Classic Theme</title>
        <style>

            /* Demo styles */
            html,body{ background:#222;margin:0;}
            body{ border-top:4px solid #000;}
            .content{ color:#777;font:12px/1.4 "helvetica neue",arial,sans-serif;width:620px;margin:20px auto;}
            h1{ font-size:12px;font-weight:normal;color:#ddd;margin:0;}
            p{ margin:0 0 20px}
            a { color:#22BCB9;text-decoration:none;}
            .cred{ margin-top:20px;font-size:11px;}

            /* This rule is read by Galleria to define the gallery height: */
            #galleria{ height:320px}

        </style>
    <link href="<?php echo @HOME_CSS_PATH;?>
/galleria.classic.css" rel="stylesheet">


        <!-- load jQuery -->
        <script src="<?php echo @HOME_JS_PATH;?>
/jquery.min.js"></script>
    
        <!-- load Galleria -->
        <script src="<?php echo @HOME_JS_PATH;?>
/galleria-1.4.2.min.js"></script>

    </head>
<body>
    <div class="content">
        <h1>Galleria Classic Theme</h1>
        <p>Demonstrating a basic gallery example.</p>

        <!-- Adding gallery images. We use resized thumbnails here for better performance, but it’s not necessary -->

        <div id="galleria">
           <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pic_gallery']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
            <a href="/blog/<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" onclick="javascript:alert hello">
                <img 
                    src="/blog/<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
",
                    data-big="/blog/<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"
                    data-title=" 图片"
                    data-description=" "
                >
            </a>
            <?php } ?>
            
        </div>


    </div>

    <script>

    // Load the classic theme
   Galleria.loadTheme('<?php echo @HOME_JS_PATH;?>
/galleria.classic.min.js');

    // Initialize Galleria
    Galleria.run('#galleria');

    </script>
    </body>
</html><?php }} ?>