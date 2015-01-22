<?php /* Smarty version Smarty-3.1.20, created on 2015-01-11 18:10:54
         compiled from "C:\Webroot\CodeIgniter\application\views\center\my_order.html" */ ?>
<?php /*%%SmartyHeaderCode:2244154b215d4e69145-17252864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8efe27708a094d679efd7339bc803a10eee78084' => 
    array (
      0 => 'C:\\Webroot\\CodeIgniter\\application\\views\\center\\my_order.html',
      1 => 1420971050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2244154b215d4e69145-17252864',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_54b215d4e97410_02928384',
  'variables' => 
  array (
    'order_list' => 0,
    'order' => 0,
    'goods' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b215d4e97410_02928384')) {function content_54b215d4e97410_02928384($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include 'C:\\Webroot\\CodeIgniter\\application\\libraries\\smarty\\plugins\\function.site_url.php';
if (!is_callable('smarty_modifier_date_format')) include 'C:\\Webroot\\CodeIgniter\\application\\libraries\\smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('common/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="container my_order">
	<div class="this-go">
		用户中心  >  我的拼单
	</div>
	<!-- /.左边部分开始 -->
	<div class="l-width pull-left">
		<div class="">
			<ul class="list-group">
				<li class="list-group-item active"><a href="<?php echo smarty_function_site_url(array('uri'=>'center'),$_smarty_tpl);?>
">我的拼单</a></li>
				<li class="list-group-item"><a href="<?php echo smarty_function_site_url(array('uri'=>'center/userinfo'),$_smarty_tpl);?>
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
				<h3 class="panel-title">我的拼单</h3>
			</div>
			<div class="panel-body">
				<div class="my_order_table tab-pane active">
				<!-- 全部拼单开始 -->
					<table class="table table-hover tac ">
						<thead>
							<tr>
								<td align="center">拼单号</td>
								<td align="center" widtd="326">拼单商品</td>
								<td align="center">拼单金额</td>
								<td align="center">拼单时间</td>
								<td align="center">状态</td>
								<td align="center">操作</td>
							</tr>
						</thead>
						<tbody class="table-bordered">
							<?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['order']->key;
?>
							<tr>
								<td align="center">
									<div class="u-order-id">
									<?php echo $_smarty_tpl->tpl_vars['order']->value['order_id'];?>

									</div>
								</td>
								<td width="326">
									<div class="img-list">
										<?php  $_smarty_tpl->tpl_vars['goods'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goods']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order']->value['goods_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goods']->key => $_smarty_tpl->tpl_vars['goods']->value) {
$_smarty_tpl->tpl_vars['goods']->_loop = true;
?>
										<a class="thumbnail img-url" target="_blank" href="/front/goods/18">
											<img width="100" class="img-polaroid" title="<?php echo $_smarty_tpl->tpl_vars['goods']->value->goods_name;?>
" src="<?php echo $_smarty_tpl->tpl_vars['goods']->value->img_middle_url;?>
">
										</a>
										<?php } ?>
									</div>
								</td>
								<td align="center">
									<div class="total_price">
										￥ <?php echo $_smarty_tpl->tpl_vars['order']->value['total_price'];?>

									</div>
								</td>
								<td align="center">
									<div class="c-time">
										<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['order']->value['create_time'],'%Y-%m-%d %H:%M:%S');?>

									</div>
								</td>
								<td align="center">
									<div class="order_status">
										已下单                        	
									</div>
								</td>
								<td align="center">
									<div class="action">
										<div class="show">
											<a class="btn  btn-xs btn-primary" target="_blank" href="<?php echo smarty_function_site_url(array('uri'=>'show?oid'),$_smarty_tpl);?>
=<?php echo $_smarty_tpl->tpl_vars['order']->value['action_id'];?>
">查看</a>
										</div>	
										<div class="do-action">
											<a class="btn  btn-xs btn-primary" href="http://www.57pd.com/order/incart/3.html">重新下单</a>	
										</div>
									</div>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				    <!-- 全部拼单结束 -->
				</div>
			</div>
		</div>
	</div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
