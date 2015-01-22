<?php /* Smarty version Smarty-3.1.20, created on 2015-01-07 14:45:33
         compiled from "C:\Webroot\CodeIgniter\application\views\init\complete.html" */ ?>
<?php /*%%SmartyHeaderCode:209754acd54f9133d9-60126122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40da0e247a0bb7c5acf2b19a7c86de3d67747705' => 
    array (
      0 => 'C:\\Webroot\\CodeIgniter\\application\\views\\init\\complete.html',
      1 => 1420613130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209754acd54f9133d9-60126122',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_54acd54fb4dc63_18957244',
  'variables' => 
  array (
    'user_order_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54acd54fb4dc63_18957244')) {function content_54acd54fb4dc63_18957244($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\Webroot\\CodeIgniter\\application\\libraries\\smarty\\plugins\\function.base_url.php';
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
        <h4>发布成功</h4>
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
