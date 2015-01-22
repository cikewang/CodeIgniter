<?php /* Smarty version Smarty-3.1.20, created on 2015-01-20 13:04:32
         compiled from "C:\Webroot\pindan.me\application\views\user\login.html" */ ?>
<?php /*%%SmartyHeaderCode:1642654bde1e0040830-51305475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42bd1de7b62c6438b57696bb5d5078b6acb26afb' => 
    array (
      0 => 'C:\\Webroot\\pindan.me\\application\\views\\user\\login.html',
      1 => 1420529890,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1642654bde1e0040830-51305475',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_54bde1e0080b82_30423005',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54bde1e0080b82_30423005')) {function content_54bde1e0080b82_30423005($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include 'C:\\Webroot\\pindan.me\\application\\libraries\\smarty\\plugins\\function.site_url.php';
?><?php echo $_smarty_tpl->getSubTemplate ('common/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!-- /.内容部分开始 -->
    <div class="">
      <div class="u-login">
        <div class="login-div login-screen">
          <div class="ad login-ad pull-left">

          </div>
          <div class="col-sm-4 login-form pull-right">
            <form action="<?php echo smarty_function_site_url(array('uri'=>'user/do_login'),$_smarty_tpl);?>
" id="login" method="post">
              <div class="form-group">
                <input type="text" id="login-name" name="login-name" placeholder="用户名/邮箱/手机号" value="" class="form-control login-field">
                <label for="login-name" class="login-field-icon fui-user"></label>
              </div>

              <div class="form-group">
                <input type="password" id="login-pass" name="login-pass" placeholder="密码" value="" class="form-control login-field">
                <label for="login-pass" class="login-field-icon fui-lock"></label>
              </div>
              <button type="submit" class="btn btn-primary btn-lg btn-block">登录</button>
              <div class="login-link">
                <a href="#" >忘记密码？</a>
                <a href="javascript:regist();" >注册</a>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div><!-- /.内容部分结束 -->
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
