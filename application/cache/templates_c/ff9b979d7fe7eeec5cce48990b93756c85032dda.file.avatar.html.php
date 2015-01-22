<?php /* Smarty version Smarty-3.1.20, created on 2015-01-12 11:17:33
         compiled from "C:\Webroot\CodeIgniter\application\views\ucenter\avatar.html" */ ?>
<?php /*%%SmartyHeaderCode:2585254b33b272dab52-85530149%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff9b979d7fe7eeec5cce48990b93756c85032dda' => 
    array (
      0 => 'C:\\Webroot\\CodeIgniter\\application\\views\\ucenter\\avatar.html',
      1 => 1421032591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2585254b33b272dab52-85530149',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_54b33b273113b7_44763696',
  'variables' => 
  array (
    'uid' => 0,
    'avater' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b33b273113b7_44763696')) {function content_54b33b273113b7_44763696($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include 'C:\\Webroot\\CodeIgniter\\application\\libraries\\smarty\\plugins\\function.site_url.php';
?><?php echo $_smarty_tpl->getSubTemplate ('common/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container my_order">
	<div class="this-go">
		用户中心  >  账户信息
	</div>
	<!-- /.左边部分开始 -->
	<div class="l-width pull-left">
		<div class="">
			<ul class="list-group">
				<li class="list-group-item"><a href="<?php echo smarty_function_site_url(array('uri'=>'ocenter'),$_smarty_tpl);?>
">我的拼单</a></li>
				<li class="list-group-item active"><a href="<?php echo smarty_function_site_url(array('uri'=>'ucenter'),$_smarty_tpl);?>
">账户信息</a></li>
				<li class="list-group-item"><a href="<?php echo smarty_function_site_url(array('uri'=>'ucenter/m_pass'),$_smarty_tpl);?>
">修改密码</a></li>
			</ul>
		</div>
	</div>
	<!-- 右边区域 -->
	<div  class="r-width pull-right">
		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">头像</h3>
			</div>
			<div class="panel-body">
				<div class="alert alert-info">
              		头像上传成功后，点击‘F5’键 或者 鼠标右键 ‘刷新’ 即可看到上传的新头像
			  	</div>
			  	<div class="width236 pull-left">
					<div>
						<div class="thumbnail" style="width:200px;">
							<img src="/uc_server/avatar.php?uid=<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
&size=big" alt="">
						</div>
					</div>
				</div>  
				<div class="width500 pull-left ml10">
				<?php echo $_smarty_tpl->tpl_vars['avater']->value;?>

				</div>
				
			</div>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
