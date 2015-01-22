<?php /* Smarty version Smarty-3.1.20, created on 2015-01-07 19:51:41
         compiled from "C:\Webroot\CodeIgniter\application\views\join\join_complete.html" */ ?>
<?php /*%%SmartyHeaderCode:43754ad1dcd08b697-74721712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2ffa9f7207ec66c302da2120abd4bf73a4e1090' => 
    array (
      0 => 'C:\\Webroot\\CodeIgniter\\application\\views\\join\\join_complete.html',
      1 => 1420628857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43754ad1dcd08b697-74721712',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_order_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_54ad1dcd0c0ab4_92075509',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ad1dcd0c0ab4_92075509')) {function content_54ad1dcd0c0ab4_92075509($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\Webroot\\CodeIgniter\\application\\libraries\\smarty\\plugins\\function.base_url.php';
?><?php echo $_smarty_tpl->getSubTemplate ('common/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!-- /.内容部分开始 -->
    <div class="container w-index">
      <div class="mark-img">
        <div class="">
          <img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
static/img/a4.png">
        </div>
      </div>
      <div class="w-complete col-sm-12">
        <img src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
static/img/icons/svg/retina.svg" alt="Retina">
        <h4>参与成功</h4>
        <div>
          <span class="jishu" style="color:red;">3</span>秒后自动跳转，<a href="<?php echo $_smarty_tpl->tpl_vars['user_order_url']->value;?>
" class="user_order_url">点击查看我的拼单</a>
        </div>
      </div>
      
    </div><!-- /.内容部分结束 -->

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script type="text/javascript">
function showTime()
{  
    var t = $('.jishu').html();
    if(t > 0){
      t -= 1;  
      $('.jishu').html(t);  
      setTimeout("showTime()",1000);  
    }
    else
    {
      window.location.href= $('.user_order_url').attr('href'); 
    }    
}  
showTime();
</script><?php }} ?>
