<?php /* Smarty version Smarty-3.1.20, created on 2015-01-12 11:53:55
         compiled from "C:\Webroot\CodeIgniter\application\views\common\header.html" */ ?>
<?php /*%%SmartyHeaderCode:1490854a3c975f406f0-63618011%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd1d730cd81ed568dbd81ebd765cf236e0d81fd2' => 
    array (
      0 => 'C:\\Webroot\\CodeIgniter\\application\\views\\common\\header.html',
      1 => 1421034754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1490854a3c975f406f0-63618011',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_54a3c9760004b8_44286698',
  'variables' => 
  array (
    'city_name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a3c9760004b8_44286698')) {function content_54a3c9760004b8_44286698($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include 'C:\\Webroot\\CodeIgniter\\application\\libraries\\smarty\\plugins\\function.site_url.php';
if (!is_callable('smarty_function_base_url')) include 'C:\\Webroot\\CodeIgniter\\application\\libraries\\smarty\\plugins\\function.base_url.php';
?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <title>拼单么-拼单网</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/static/css/vendor/bootstrap.min.css" rel="stylesheet">
    <!-- Loading Flat UI -->
    <link href="/static/css/flat-ui.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="/static/img/favicon.ico">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
    <link href="/static/css/common.css" rel="stylesheet">
  </head>
  <body>

    <!-- /.头部开始 -->
    <div class="w-header">
      <!-- /.TOP导航开始 -->
      <div class="w-header-bar">
        <div class="container">
          <div class="wrap  max-wrap">
            <div class="city-area pull-left">
              <span class="city-name"><?php echo $_smarty_tpl->tpl_vars['city_name']->value;?>
</span>
              <a class="link" href="<?php echo smarty_function_site_url(array('uri'=>'changecity'),$_smarty_tpl);?>
">[切换城市]</a>
            </div>
          </div>
          <div class="pull-right">
            <ul class="list-inline">
              <li id="loginbar">
              </li>
              <li>|</li>
              <li><a href="<?php echo smarty_function_site_url(array('uri'=>'ocenter'),$_smarty_tpl);?>
">我的拼单</a></li>
              <li class="login-out hide">|</li>
              <li class="login-out hide"><a href="<?php echo smarty_function_site_url(array('uri'=>'user/login_out'),$_smarty_tpl);?>
">退出</a></li>
            </ul>
          </div>
        </div>
      </div><!-- /.TOP导航结束 -->
      <!-- /.logo 开始 -->
      <div class="logo-search">
        <div class="container">
          <div class="pull-left">
            <a href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
">
              <img src="/static/img/logo.png">
            </a>
          </div>
          <div class="pull-right">
            <div class="map-select">
              <a href="" title="地图查询"><img src="/static/img/icons/svg/map.svg" alt="地图查询"></a>
            </div>
          </div>
        </div>
      </div><!-- /.logo 结束 -->
      <!-- /.导航开始 -->
      <div class="nav-area">
        <div  class="container">
          <nav role="navigation" class="navbar navbar-inverse navbar-embossed">
             <!--  <div class="navbar-header">
                <button data-target="#navbar-collapse-03" data-toggle="collapse" class="navbar-toggle" type="button">
                  <span class="sr-only">Toggle navigation</span>
                </button>
                <a href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
" class="navbar-brand">首页</a>
              </div> -->
              <div id="navbar-collapse-03" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                  <li class=""><a href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
">首页</a></li>
                  <!-- <li><a href="#fakelink">商城活动</a></li> -->
                 </ul>
              </div><!-- /.navbar-collapse -->
            </nav>
        </div>
      </div><!-- /.导航结束 -->
    </div><!-- /.头部结束 --><?php }} ?>
