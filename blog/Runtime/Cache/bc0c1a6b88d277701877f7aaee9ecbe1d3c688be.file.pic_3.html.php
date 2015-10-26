<?php /* Smarty version Smarty-3.1.6, created on 2015-10-10 20:16:47
         compiled from "D:/itcast/homework/TPframework/blog/Home/View\Cache\pic_3.html" */ ?>
<?php /*%%SmartyHeaderCode:23718561900ff125134-71328242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc0c1a6b88d277701877f7aaee9ecbe1d3c688be' => 
    array (
      0 => 'D:/itcast/homework/TPframework/blog/Home/View\\Cache\\pic_3.html',
      1 => 1444479402,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23718561900ff125134-71328242',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_561900ff3261b',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561900ff3261b')) {function content_561900ff3261b($_smarty_tpl) {?><!DOCTYPE html>
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
                       <a href="/blog/Uploads/2015-10-02/560e1c8942de8.jpg" onclick="javascript:alert hello">
                <img 
                    src="/blog/Uploads/2015-10-02/560e1c8942de8.jpg",
                    data-big="/blog/Uploads/2015-10-02/560e1c8942de8.jpg"
                    data-title=" 图片"
                    data-description=" "
                >
            </a>
                        <a href="/blog/Uploads/2015-10-02/560e1c897fc61.jpg" onclick="javascript:alert hello">
                <img 
                    src="/blog/Uploads/2015-10-02/560e1c897fc61.jpg",
                    data-big="/blog/Uploads/2015-10-02/560e1c897fc61.jpg"
                    data-title=" 图片"
                    data-description=" "
                >
            </a>
                        <a href="/blog/Uploads/2015-10-02/560e1c89c9837.jpg" onclick="javascript:alert hello">
                <img 
                    src="/blog/Uploads/2015-10-02/560e1c89c9837.jpg",
                    data-big="/blog/Uploads/2015-10-02/560e1c89c9837.jpg"
                    data-title=" 图片"
                    data-description=" "
                >
            </a>
                        <a href="/blog/Uploads/2015-10-02/560e1c8a198a7.jpg" onclick="javascript:alert hello">
                <img 
                    src="/blog/Uploads/2015-10-02/560e1c8a198a7.jpg",
                    data-big="/blog/Uploads/2015-10-02/560e1c8a198a7.jpg"
                    data-title=" 图片"
                    data-description=" "
                >
            </a>
                        <a href="/blog/Uploads/2015-10-02/560e1c8a4dd17.jpg" onclick="javascript:alert hello">
                <img 
                    src="/blog/Uploads/2015-10-02/560e1c8a4dd17.jpg",
                    data-big="/blog/Uploads/2015-10-02/560e1c8a4dd17.jpg"
                    data-title=" 图片"
                    data-description=" "
                >
            </a>
                        <a href="/blog/Uploads/2015-10-02/560e1c8a693d8.jpg" onclick="javascript:alert hello">
                <img 
                    src="/blog/Uploads/2015-10-02/560e1c8a693d8.jpg",
                    data-big="/blog/Uploads/2015-10-02/560e1c8a693d8.jpg"
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