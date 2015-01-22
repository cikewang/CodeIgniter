<?php /* Smarty version Smarty-3.1.20, created on 2015-01-12 11:19:18
         compiled from "C:\Webroot\CodeIgniter\application\views\ucenter\userinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:1014454b3264628d3c8-96501417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fb6ba93911119cba1910ac90ca6f2a49bca4dc6' => 
    array (
      0 => 'C:\\Webroot\\CodeIgniter\\application\\views\\ucenter\\userinfo.html',
      1 => 1421032729,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1014454b3264628d3c8-96501417',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_54b326462c6312_37192375',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b326462c6312_37192375')) {function content_54b326462c6312_37192375($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include 'C:\\Webroot\\CodeIgniter\\application\\libraries\\smarty\\plugins\\function.site_url.php';
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
				<h3 class="panel-title">账户信息</h3>
			</div>
			<div class="panel-body">
				<div class="ui-left u-info pull-left">
					<form action="<?php echo smarty_function_site_url(array('uri'=>'ucenter/do_userinfo'),$_smarty_tpl);?>
" method="post">
	                	<div class="form-group clearfix">
	                		<div class="u-title pull-left">用户名：</div>
	                		<div class="u-input pull-left"><input class="form-control input-sm username" disabled  type="text" id="typeahead-demo-01" name="username" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
" /></div>
						</div>
						<div class="form-group clearfix">
	                		<div class="u-title pull-left">真实姓名：</div>
	                		<div class="u-input pull-left"><input class="form-control input-sm" type="text" id="typeahead-demo-01" name="name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
"/></div>
						</div>
						<div class="form-group clearfix">
	                		<div class="u-title pull-left">性别：</div>
	                		<div class="u-input pull-left">
	                			<label class="radio pull-left" for="radio1">
				                  <input type="radio" name="sex"id="radio1" value="1" data-toggle="radio" class="custom-radio"  <?php if ($_smarty_tpl->tpl_vars['user']->value->sex==1) {?>checked<?php }?> ><span class="icons"><span class="icon-unchecked"></span><span class="icon-checked"></span></span>
				                  男
				                </label>
				                <label class="radio pull-left" for="radio2">
				                  <input type="radio" name="sex" id="radio2" value="2" data-toggle="radio" class="custom-radio"  <?php if ($_smarty_tpl->tpl_vars['user']->value->sex==2) {?>checked<?php }?> ><span class="icons"><span class="icon-unchecked"></span><span class="icon-checked"></span></span>
				                  女
				                </label>
				                <label class="radio pull-left" for="radio3">
				                  <input type="radio" name="sex" id="radio3" value="5" data-toggle="radio" class="custom-radio"  <?php if ($_smarty_tpl->tpl_vars['user']->value->sex==5) {?>checked<?php }?> ><span class="icons"><span class="icon-unchecked"></span><span class="icon-checked"></span></span>
				                  外星人
				                </label>
	                			
	                		</div>
						</div>
						<div class="form-group clearfix">
	                		<div class="u-title pull-left">手机号：</div>
	                		<div class="u-input pull-left"><input class="form-control input-sm" type="text" id="typeahead-demo-01" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->phone;?>
"/></div>
						</div>
						<div class="form-group clearfix">
	                		<div class="u-title pull-left">邮箱：</div>
	                		<div class="u-input pull-left"><input class="form-control input-sm" type="text" id="typeahead-demo-01" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
"/></div>
						</div>
						<div class="form-group clearfix">
	                		<div class="u-title pull-left">QQ：</div>
	                		<div class="u-input pull-left"><input class="form-control input-sm" type="text" id="typeahead-demo-01"  name="qq" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->qq;?>
"/></div>
						</div>
						<button class="btn btn btn-primary" type="submit">提交</button>	
	                </form>
				</div>
				<div class="ui-right pull-right">
					<div>
						<div class="thumbnail">
							<img alt="" src="http://pindan.me/uc_server/avatar.php?uid=<?php echo $_smarty_tpl->tpl_vars['user']->value->uid;?>
&amp;size=big">
						</div>
						<div style="text-align: center;">
							<a href="<?php echo smarty_function_site_url(array('uri'=>'ucenter/m_avatar'),$_smarty_tpl);?>
">修改头像</a>
						</div>
	                </div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
