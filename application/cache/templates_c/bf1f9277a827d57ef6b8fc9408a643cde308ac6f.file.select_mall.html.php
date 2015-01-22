<?php /* Smarty version Smarty-3.1.20, created on 2015-01-04 11:43:49
         compiled from "C:\Webroot\CodeIgniter\application\views\init\select_mall.html" */ ?>
<?php /*%%SmartyHeaderCode:2463554a403ed975ef1-47803590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf1f9277a827d57ef6b8fc9408a643cde308ac6f' => 
    array (
      0 => 'C:\\Webroot\\CodeIgniter\\application\\views\\init\\select_mall.html',
      1 => 1420342681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2463554a403ed975ef1-47803590',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_54a403ed9a3846_46526371',
  'variables' => 
  array (
    'mall_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a403ed9a3846_46526371')) {function content_54a403ed9a3846_46526371($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include 'C:\\Webroot\\CodeIgniter\\application\\libraries\\smarty\\plugins\\function.site_url.php';
?><?php echo $_smarty_tpl->getSubTemplate ('common/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!-- /.内容部分开始 -->
    <div class="container w-index">
      <div>
        <div class="">
          <img src="/static/img/a1.png">
        </div>
      </div>
      <div class="w-select-mall">
        <form action="<?php echo smarty_function_site_url(array('uri'=>'/init/address'),$_smarty_tpl);?>
" method="post">
          <div>
            <div>
              <h6>请选择拼单商品购买商城</h6>
            </div>
            <div class="select-mall">
              <div class="btn-group" data-toggle="buttons">
                <label class="btn <?php if ($_smarty_tpl->tpl_vars['mall_id']->value==1) {?>active<?php }?>">
                  <img class="mall-logo" data-src="京东商城" alt="京东商城" src="/static/img/mall/jd.png" data-holder-rendered="true">
                  <input type="radio" name="mall_id" id="option1" autocomplete="off" <?php if ($_smarty_tpl->tpl_vars['mall_id']->value==1) {?>checked<?php }?> value="1"> 
                </label>
               <!--  <label class="btn">
                  <img class="mall-logo" data-src="" alt="国美在线" src="/static/img/mall/gome.jpg" data-holder-rendered="true">
                  <input type="radio" name="mall_id" id="option2" autocomplete="off"> 
                </label> -->
                <label class="btn <?php if ($_smarty_tpl->tpl_vars['mall_id']->value==2) {?>active<?php }?>">
                  <img class="mall-logo" data-src="" alt="线下拼单" src="/static/img/mall/xx.png" data-holder-rendered="true">
                  <input type="radio" name="mall_id" id="option3" autocomplete="off" <?php if ($_smarty_tpl->tpl_vars['mall_id']->value==2) {?>checked<?php }?> value="2">
                </label>
              </div>
            </div>
            <div>
              
            </div>
            <div class="clearfix">
              <span class="col-lg-9 pull-left">
                <blockquote>
                <small>目前仅支持 “京东商城” 及 “线下” 拼单，其他商城陆续加入中，尽情期待!</small>
                </blockquote>
              </span>
              <span class="go-faqi pull-right">
                <button type="submit" class="btn btn-block btn-lg btn-primary">下一步  ></button>
              </span>
            </div>
          </div>
        </form>
      </div>
      <script>
        function changeAtt(t) {
          t.childNodes[1].checked= 'checked'; 
          for (var i = 0; i<t.parentNode.childNodes.length; i++) {  
            if (t.parentNode.childNodes[i].className == 'cattsel') {
               t.parentNode.childNodes[i].className = ''; 
            } 
          }
          //t.lastChild.checked= 'checked';
          t.className = "cattsel";
          changePrice();
        }
      </script>
    </div><!-- /.内容部分结束 -->
    
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
