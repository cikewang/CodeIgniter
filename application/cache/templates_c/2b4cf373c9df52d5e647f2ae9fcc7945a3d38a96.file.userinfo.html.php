<?php /* Smarty version Smarty-3.1.20, created on 2015-01-11 17:24:52
         compiled from "C:\Webroot\CodeIgniter\application\views\center\userinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:1864854b237c348e7b9-66266214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b4cf373c9df52d5e647f2ae9fcc7945a3d38a96' => 
    array (
      0 => 'C:\\Webroot\\CodeIgniter\\application\\views\\center\\userinfo.html',
      1 => 1420968290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1864854b237c348e7b9-66266214',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_54b237c34c1c51_93476165',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b237c34c1c51_93476165')) {function content_54b237c34c1c51_93476165($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include 'C:\\Webroot\\CodeIgniter\\application\\libraries\\smarty\\plugins\\function.site_url.php';
?><?php echo $_smarty_tpl->getSubTemplate ('common/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container my_order">
	<div class="this-go">
		用户中心  >  账户信息
	</div>
	<!-- /.左边部分开始 -->
	<div class="l-width pull-left">
		<div class="">
			<ul class="list-group">
				<li class="list-group-item"><a href="<?php echo smarty_function_site_url(array('uri'=>'center'),$_smarty_tpl);?>
">我的拼单</a></li>
				<li class="list-group-item active"><a href="<?php echo smarty_function_site_url(array('uri'=>'center/userinfo'),$_smarty_tpl);?>
">账户信息</a></li>
				<li class="list-group-item"><a href="<?php echo smarty_function_site_url(array('uri'=>'center/m_pass'),$_smarty_tpl);?>
">修改密码</a></li>
			</ul>
		</div>
	</div>
	<!-- 右边区域 -->
	<div  class="r-width pull-right">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">账户信息</h3>
			</div>
			<div class="panel-body">
				<div class="ui-left u-info pull-left">
					<form action="" method="post">
	                	<div class="form-group clearfix">
	                		<div class="u-title pull-left">账户：</div>
	                		<div class="u-input pull-left"><input class="form-control input-sm" type="text" id="typeahead-demo-01" /></div>
						</div>
						<div class="form-group clearfix">
	                		<div class="u-title pull-left">真实姓名：</div>
	                		<div class="u-input pull-left"><input class="form-control input-sm" type="text" id="typeahead-demo-01" /></div>
						</div>
						<div class="form-group clearfix">
	                		<div class="u-title pull-left">性别：</div>
	                		<div class="u-input pull-left"><input class="form-control input-sm" type="text" id="typeahead-demo-01" /></div>
						</div>
						<div class="form-group clearfix">
	                		<div class="u-title pull-left">邮箱：</div>
	                		<div class="u-input pull-left"><input class="form-control input-sm" type="text" id="typeahead-demo-01" /></div>
						</div>
						<div class="form-group clearfix">
	                		<div class="u-title pull-left">QQ：</div>
	                		<div class="u-input pull-left"><input class="form-control input-sm" type="text" id="typeahead-demo-01" /></div>
						</div>
						<button class="btn btn btn-primary" type="submit">提交</button>	
	                </form>
				</div>
				<div class="ui-right pull-right">
					<div>
						<div class="thumbnail">
							<img alt="" src="http://www.57pd.com/uc_server/avatar.php?uid=1&amp;size=big">
						</div>
						<div style="text-align: center;">
							<a href="http://www.57pd.com/ucenter/modifyavatar.html">修改头像</a>
						</div>
	                </div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
