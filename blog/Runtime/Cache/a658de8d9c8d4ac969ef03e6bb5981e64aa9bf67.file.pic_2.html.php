<?php /* Smarty version Smarty-3.1.6, created on 2015-10-10 20:18:10
         compiled from "D:/itcast/homework/TPframework/blog/Home/View\Cache\pic_2.html" */ ?>
<?php /*%%SmartyHeaderCode:9580561902026c1ce5-41473552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a658de8d9c8d4ac969ef03e6bb5981e64aa9bf67' => 
    array (
      0 => 'D:/itcast/homework/TPframework/blog/Home/View\\Cache\\pic_2.html',
      1 => 1444479479,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9580561902026c1ce5-41473552',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56190202b2e19',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56190202b2e19')) {function content_56190202b2e19($_smarty_tpl) {?><!DOCTYPE html>
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
    <link href="/blog/home/public/css/galleria.classic.css" rel="stylesheet">


        <!-- load jQuery -->
        <script src="/blog/home/public/js/jquery.min.js"></script>
    
        <!-- load Galleria -->
        <script src="/blog/home/public/js/galleria-1.4.2.min.js"></script>

    </head>
<body>
    <div class="content">
        <h1>Galleria Classic Theme</h1>
        <p>Demonstrating a basic gallery example.</p>

        <!-- Adding gallery images. We use resized thumbnails here for better performance, but it’s not necessary -->

        <div id="galleria">
                       <a href="/blog/Uploads/2015-10-02/560e1b567e0c6.jpg" onclick="javascript:alert hello">
                <img 
                    src="/blog/Uploads/2015-10-02/560e1b567e0c6.jpg",
                    data-big="/blog/Uploads/2015-10-02/560e1b567e0c6.jpg"
                    data-title=" 图片"
                    data-description=" "
                >
            </a>
                        <a href="/blog/Uploads/2015-10-02/560e1b56977f7.jpg" onclick="javascript:alert hello">
                <img 
                    src="/blog/Uploads/2015-10-02/560e1b56977f7.jpg",
                    data-big="/blog/Uploads/2015-10-02/560e1b56977f7.jpg"
                    data-title=" 图片"
                    data-description=" "
                >
            </a>
                        <a href="/blog/Uploads/2015-10-02/560e1b56b9960.jpg" onclick="javascript:alert hello">
                <img 
                    src="/blog/Uploads/2015-10-02/560e1b56b9960.jpg",
                    data-big="/blog/Uploads/2015-10-02/560e1b56b9960.jpg"
                    data-title=" 图片"
                    data-description=" "
                >
            </a>
                        <a href="/blog/Uploads/2015-10-02/560e1b56df5e9.jpg" onclick="javascript:alert hello">
                <img 
                    src="/blog/Uploads/2015-10-02/560e1b56df5e9.jpg",
                    data-big="/blog/Uploads/2015-10-02/560e1b56df5e9.jpg"
                    data-title=" 图片"
                    data-description=" "
                >
            </a>
                        <a href="/blog/Uploads/2015-10-02/560e1b5703b23.jpg" onclick="javascript:alert hello">
                <img 
                    src="/blog/Uploads/2015-10-02/560e1b5703b23.jpg",
                    data-big="/blog/Uploads/2015-10-02/560e1b5703b23.jpg"
                    data-title=" 图片"
                    data-description=" "
                >
            </a>
                        <a href="/blog/Uploads/2015-10-02/560e1b571afdb.jpg" onclick="javascript:alert hello">
                <img 
                    src="/blog/Uploads/2015-10-02/560e1b571afdb.jpg",
                    data-big="/blog/Uploads/2015-10-02/560e1b571afdb.jpg"
                    data-title=" 图片"
                    data-description=" "
                >
            </a>
                        <a href="/blog/Uploads/2015-10-02/560e1b573d873.jpg" onclick="javascript:alert hello">
                <img 
                    src="/blog/Uploads/2015-10-02/560e1b573d873.jpg",
                    data-big="/blog/Uploads/2015-10-02/560e1b573d873.jpg"
                    data-title=" 图片"
                    data-description=" "
                >
            </a>
                        
        </div>


    </div>

    <script>

    // Load the classic theme
   Galleria.loadTheme('/blog/home/public/js/galleria.classic.min.js');

    // Initialize Galleria
    Galleria.run('#galleria');

    </script>
    </body>
</html><?php }} ?>