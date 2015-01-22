<?php /* Smarty version Smarty-3.1.20, created on 2015-01-12 11:50:28
         compiled from "C:\Webroot\CodeIgniter\application\views\ucenter\modify_pass.html" */ ?>
<?php /*%%SmartyHeaderCode:774954b32643891608-39941892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4ce639666bd483c9b9c8fd664e5feede2674c32' => 
    array (
      0 => 'C:\\Webroot\\CodeIgniter\\application\\views\\ucenter\\modify_pass.html',
      1 => 1421034592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '774954b32643891608-39941892',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_54b326438c6a72_98733309',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b326438c6a72_98733309')) {function content_54b326438c6a72_98733309($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include 'C:\\Webroot\\CodeIgniter\\application\\libraries\\smarty\\plugins\\function.site_url.php';
?><?php echo $_smarty_tpl->getSubTemplate ('common/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container">
	<div class="this-go">
		用户中心  >  修改密码
	</div>
	<!-- /.左边部分开始 -->
	<div class="l-width pull-left">
		<div class="">
			<ul class="list-group">
				<li class="list-group-item"><a href="<?php echo smarty_function_site_url(array('uri'=>'ocenter'),$_smarty_tpl);?>
">我的拼单</a></li>
				<li class="list-group-item"><a href="<?php echo smarty_function_site_url(array('uri'=>'ucenter'),$_smarty_tpl);?>
">账户信息</a></li>
				<li class="list-group-item active"><a href="<?php echo smarty_function_site_url(array('uri'=>'ucenter/m_pass'),$_smarty_tpl);?>
">修改密码</a></li>
			</ul>
		</div>
	</div>
	<!-- 右边区域 -->
	<div  class="r-width pull-right">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">修改密码</h3>
			</div>
			<div class="panel-body">
				<div class="u-info">
	                <form action="<?php echo smarty_function_site_url(array('uri'=>'ucenter/do_pass'),$_smarty_tpl);?>
" method="post">
	                	<div class="form-group clearfix">
	                		<div class="u-title pull-left">旧密码：</div>
	                		<div class="u-input pull-left"><input class="form-control input-sm" name="pass" type="password" id="pass" /></div>
						</div>
						<div class="form-group clearfix">
	                		<div class="u-title pull-left">新密码：</div>
	                		<div class="u-input pull-left"><input class="form-control input-sm" name="new_pass" type="password" id="new_pass" /></div>
						</div>
						<div class="form-group clearfix">
	                		<div class="u-title pull-left">确认密码：</div>
	                		<div class="u-input pull-left"><input class="form-control input-sm" name="v_pass" type="password" id="v_pass" /></div>
						</div>
						
						<button class="btn btn btn-primary" type="submit">提交</button>
						
	                </form>
              	</div>
			</div>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
