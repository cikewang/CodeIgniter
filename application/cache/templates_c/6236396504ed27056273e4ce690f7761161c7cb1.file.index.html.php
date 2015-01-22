<?php /* Smarty version Smarty-3.1.20, created on 2015-01-22 11:55:22
         compiled from "C:\Webroot\CodeIgniter\application\views\index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1335954a3c975eec727-70295882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6236396504ed27056273e4ce690f7761161c7cb1' => 
    array (
      0 => 'C:\\Webroot\\CodeIgniter\\application\\views\\index\\index.html',
      1 => 1421898920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1335954a3c975eec727-70295882',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_54a3c975f312d8_23665071',
  'variables' => 
  array (
    'item' => 0,
    'room' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a3c975f312d8_23665071')) {function content_54a3c975f312d8_23665071($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\Webroot\\CodeIgniter\\application\\libraries\\smarty\\plugins\\function.base_url.php';
if (!is_callable('smarty_function_site_url')) include 'C:\\Webroot\\CodeIgniter\\application\\libraries\\smarty\\plugins\\function.site_url.php';
?><!DOCTYPE html>
<html lang="zh-cn">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>创建房间</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
static/css/createRoom.css">
	</head>
	<body>
		<div class="container top">
			<div>
				房间名：<input id="roomNameInput" type="text">
			</div>
			<div>
				用户名：<input id="userName" type="text">
			</div>
			<div>
				<button id="createRoomButton" class="btn btn-primary">Create Room</button>
			</div>
		</div>

		<div class="container top">
			<h3>
				房间列表
			</h3>
			<table class="table table-bordered">
				<thead>
					<tr>
					  <th>房间号</th>
					  <th>房间名</th>
					  <th>状态</th>
					  <th>操作</th>
					</tr>
				</thead>
				<tbody>
					<?php  $_smarty_tpl->tpl_vars['room'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['room']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['room']->key => $_smarty_tpl->tpl_vars['room']->value) {
$_smarty_tpl->tpl_vars['room']->_loop = true;
?>
					<tr>
					  <td><?php echo $_smarty_tpl->tpl_vars['room']->value['room_id'];?>
</td>
					  <td><?php echo $_smarty_tpl->tpl_vars['room']->value['room'];?>
</td>
					  <td>1</td>
					  <td>2</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>

		<!-- FRAMEWORKS -->
		<!-- JQuery -->
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
		<!-- Moment: date lib -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.2/moment-with-locales.min.js"></script>
		
		<!-- Latest compiled and minified JavaScript for Bootstrap-->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<!-- end -->
		<!-- JS and CSS -->
		
		<script>
			$("#roomNameInput").focus();
			$("#roomNameInput").keypress(function(e) {
				if(e.keyCode===13) {
					window.location = "<?php echo smarty_function_site_url(array('uri'=>'index/create_room?room='),$_smarty_tpl);?>
"+$("#roomNameInput").val()+"&username="+$('#userName').val();
				}
			});
			$("#createRoomButton").click(function() {
			  	window.location = "<?php echo smarty_function_site_url(array('uri'=>'index/create_room?room='),$_smarty_tpl);?>
"+$("#roomNameInput").val()+"&username="+$('#userName').val();
			});
		</script>
	</body>
</html>
<?php }} ?>
