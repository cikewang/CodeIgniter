<?php /* Smarty version Smarty-3.1.20, created on 2015-01-15 14:33:27
         compiled from "C:\Webroot\CodeIgniter\application\views\user\register.html" */ ?>
<?php /*%%SmartyHeaderCode:3044254aa98bfb0ea65-46150757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9f388fe63373c7c6dea2726f62bc5840942c236' => 
    array (
      0 => 'C:\\Webroot\\CodeIgniter\\application\\views\\user\\register.html',
      1 => 1420612395,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3044254aa98bfb0ea65-46150757',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_54aa98bfb6b8b7_27545500',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54aa98bfb6b8b7_27545500')) {function content_54aa98bfb6b8b7_27545500($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include 'C:\\Webroot\\CodeIgniter\\application\\libraries\\smarty\\plugins\\function.site_url.php';
?><?php echo $_smarty_tpl->getSubTemplate ('common/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!-- /.内容部分开始 -->
    <div class="">
      <div class="u-login">
        <div class="reg login-screen">
          <div class="ad reg-ad pull-left">

          </div>
          <div class="col-sm-4 login-form pull-right">
            <form action="<?php echo smarty_function_site_url(array('uri'=>'user/do_register'),$_smarty_tpl);?>
" method="post" id="register-form">
              <div class="form-group">
                <input type="text" id="login-name" name="login-name" placeholder="用户名" value="" class="form-control login-field">
                <label for="login-name" class="login-field-icon fui-user tishi" data-placement="left" data-toggle="tooltip" href="#" data-original-title="4-20位字符，支持汉字、字母、数字“-”、“_”组合"></label>
              </div>
              <div class="form-group">
                <input type="password" id="login-pass" name="login-pass" placeholder="密码" value="" class="form-control login-field">
                <label for="login-pass" class="login-field-icon fui-lock tishi" data-placement="left" data-toggle="tooltip" href="#" data-original-title="6-20位字符，建议字母、数字及符号组合"></label>
              </div>
              <div class="form-group">
                <input type="text" id="phone" name="phone" placeholder="验证手机" value="" class="form-control login-field">
                <label for="login-pass" class="login-field-icon "></label>
              </div>
              <div class="form-group clearfix">
                <div class="yz-btn">
                <a href="javascript:get_code();" class="code-btn btn btn-success btn-lg   btn-block">获取验证码&nbsp;<span class="jishu hide" style="font-size:12px;color:#333">60</span></a>
                </div>
                <div class="yz-input">
                  <input type="text" id="phone_auth" name="phone_auth" placeholder="短信验证码" value="" class="form-control login-field">
               
                </div>
              </div>
              <div class="">
                <button type="submit" class="btn btn-primary btn-lg btn-block">注册</button>
              </div>
              <div class="login-link">
                <a href="#" >忘记密码？</a>
                <a href="javascript:login();" >登录</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div><!-- /.内容部分结束 -->
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
