<?php /* Smarty version Smarty-3.1.6, created on 2015-10-12 19:27:51
         compiled from "D:/itcast/homework/TPframework/blog/Home/View\Cache\pic_1.html" */ ?>
<?php /*%%SmartyHeaderCode:21121561b993709da85-87569036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50d7544b70893c059788cf68c5cdfde5dd00cdf6' => 
    array (
      0 => 'D:/itcast/homework/TPframework/blog/Home/View\\Cache\\pic_1.html',
      1 => 1444479501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21121561b993709da85-87569036',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_561b993773195',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561b993773195')) {function content_561b993773195($_smarty_tpl) {?><!DOCTYPE html>
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
                       <a href="/blog/Uploads/2015-10-02/560e1b277f5a3.jpg" onclick="javascript:alert hello">
                <img 
                    src="/blog/Uploads/2015-10-02/560e1b277f5a3.jpg",
                    data-big="/blog/Uploads/2015-10-02/560e1b277f5a3.jpg"
                    data-title=" 图片"
                    data-description=" "
                >
            </a>
                        <a href="/blog/Uploads/2015-10-02/560e1b279cb4a.jpg" onclick="javascript:alert hello">
                <img 
                    src="/blog/Uploads/2015-10-02/560e1b279cb4a.jpg",
                    data-big="/blog/Uploads/2015-10-02/560e1b279cb4a.jpg"
                    data-title=" 图片"
                    data-description=" "
                >
            </a>
                        <a href="/blog/Uploads/2015-10-02/560e1b27b13f3.jpg" onclick="javascript:alert hello">
                <img 
                    src="/blog/Uploads/2015-10-02/560e1b27b13f3.jpg",
                    data-big="/blog/Uploads/2015-10-02/560e1b27b13f3.jpg"
                    data-title=" 图片"
                    data-description=" "
                >
            </a>
                        <a href="/blog/Uploads/2015-10-02/560e1b27caf2d.jpg" onclick="javascript:alert hello">
                <img 
                    src="/blog/Uploads/2015-10-02/560e1b27caf2d.jpg",
                    data-big="/blog/Uploads/2015-10-02/560e1b27caf2d.jpg"
                    data-title=" 图片"
                    data-description=" "
                >
            </a>
                        <a href="/blog/Uploads/2015-10-02/560e1b27e12f8.jpg" onclick="javascript:alert hello">
                <img 
                    src="/blog/Uploads/2015-10-02/560e1b27e12f8.jpg",
                    data-big="/blog/Uploads/2015-10-02/560e1b27e12f8.jpg"
                    data-title=" 图片"
                    data-description=" "
                >
            </a>
                        <a href="/blog/Uploads/2015-10-02/560e1b28079f5.jpg" onclick="javascript:alert hello">
                <img 
                    src="/blog/Uploads/2015-10-02/560e1b28079f5.jpg",
                    data-big="/blog/Uploads/2015-10-02/560e1b28079f5.jpg"
                    data-title=" 图片"
                    data-description=" "
                >
            </a>
                        <a href="/blog/Uploads/2015-10-02/560e1b281b34a.jpg" onclick="javascript:alert hello">
                <img 
                    src="/blog/Uploads/2015-10-02/560e1b281b34a.jpg",
                    data-big="/blog/Uploads/2015-10-02/560e1b281b34a.jpg"
                    data-title=" 图片"
                    data-description=" "
                >
            </a>
                        <a href="/blog/Uploads/2015-10-02/560e1b282fcf3.jpg" onclick="javascript:alert hello">
                <img 
                    src="/blog/Uploads/2015-10-02/560e1b282fcf3.jpg",
                    data-big="/blog/Uploads/2015-10-02/560e1b282fcf3.jpg"
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