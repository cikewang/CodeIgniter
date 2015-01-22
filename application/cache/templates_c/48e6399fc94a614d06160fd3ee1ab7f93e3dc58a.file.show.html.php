<?php /* Smarty version Smarty-3.1.20, created on 2015-01-08 10:40:20
         compiled from "C:\Webroot\CodeIgniter\application\views\show\show.html" */ ?>
<?php /*%%SmartyHeaderCode:795154acea6b3bf611-59676343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48e6399fc94a614d06160fd3ee1ab7f93e3dc58a' => 
    array (
      0 => 'C:\\Webroot\\CodeIgniter\\application\\views\\show\\show.html',
      1 => 1420684806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '795154acea6b3bf611-59676343',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_54acea6b3ea759_99672116',
  'variables' => 
  array (
    'order_action' => 0,
    'last_money' => 0,
    'order_info' => 0,
    'order' => 0,
    'goods' => 0,
    'action_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54acea6b3ea759_99672116')) {function content_54acea6b3ea759_99672116($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\Webroot\\CodeIgniter\\application\\libraries\\smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_base_url')) include 'C:\\Webroot\\CodeIgniter\\application\\libraries\\smarty\\plugins\\function.base_url.php';
if (!is_callable('smarty_function_site_url')) include 'C:\\Webroot\\CodeIgniter\\application\\libraries\\smarty\\plugins\\function.site_url.php';
?><?php echo $_smarty_tpl->getSubTemplate ('common/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="container w-index m-b-20">
      <!-- /.左边部分开始 -->
      <div class="w-left pull-left pd-info">
        <!-- /.筛选部分开始 -->
        <div class="u-order-info col-sm-12">
          <div class="u-item">
            <div class="col-sm-2">发起人</div>
            <div class="col-sm-2"><?php echo $_smarty_tpl->tpl_vars['order_action']->value->username;?>
</div>
            <div class="col-sm-2">下单时间</div>
            <div class="col-sm-6"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['order_action']->value->estimated_time,'%Y-%m-%d %H:%M');?>
</div>
          </div>
          <div class="u-item">
            <div class="col-sm-2">目标金额</div>
            <div class="col-sm-2"><?php echo $_smarty_tpl->tpl_vars['order_action']->value->aim_price;?>
 元</div>
            <div class="col-sm-2">现在金额</div>
            <div class="col-sm-3"><?php echo $_smarty_tpl->tpl_vars['last_money']->value;?>
</div>
          </div>
          <div class="u-item">
            <div class="col-sm-2">商城</div>
            <div class="col-sm-2">京东商城</div>
            <div class="col-sm-2">地址</div>
            <div class="col-sm-6"><?php echo $_smarty_tpl->tpl_vars['order_action']->value->address;?>
</div>
          </div>
        </div><!-- /.筛选部分结束 -->

        <div class="col-sm-12 pd-show m-t-20">
          <div>
            <div class="bs-docs-example">
                <table class="table">
                <?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['order']->key;
?>
                  <tr>
                    <td class="col-sm-2">
                      <div class="order-show-u-info p-t-20">
                        <div>
                          <img width="100px" height="100px" src="http://www.57pd.com/uc_server/avatar.php?uid=<?php echo $_smarty_tpl->tpl_vars['order']->value->uid;?>
&amp;size=middle">
                        </div>
                        <div><?php echo $_smarty_tpl->tpl_vars['order']->value->username;?>
</div>
                        <!-- <div>信誉等级：5星</div>
                        <div>发站内信</div>
                        <div>查看联系方式</div> -->
                      </div>
                    </td>
                    <td class="col-sm-10">
                      <?php if ($_smarty_tpl->tpl_vars['order']->value->title!='') {?>
                      <div class="alert alert-info">
                        <span>
                          <img width="50" src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
static/img/png-0003.png">
                        </span>
                        <span class=""> <?php echo $_smarty_tpl->tpl_vars['order']->value->title;?>
 </span>
                      </div>
                      <?php }?>
                      <ul class="list-unstyled col-sm-12 ">
                        <?php  $_smarty_tpl->tpl_vars['goods'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goods']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order']->value->goods_info; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goods']->key => $_smarty_tpl->tpl_vars['goods']->value) {
$_smarty_tpl->tpl_vars['goods']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['goods']->key;
?>
                        <li id="goods_1" class="col-sm-6">
                          <div>
                            <div class="order-show-img-div">
                               <a target="_blank" href="#">
                                <img class="order-show-img" title="<?php echo $_smarty_tpl->tpl_vars['goods']->value->goods_name;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['goods']->value->goods_name;?>
" src="<?php echo $_smarty_tpl->tpl_vars['goods']->value->img_middle_url;?>
" >
                              </a>
                            </div>
                            <div>
                              <div class="order-show-title">
                                <a target="_blank" href="http://www.57pd.com/front/goods/18.html">
                                  <?php echo $_smarty_tpl->tpl_vars['goods']->value->goods_name;?>

                                </a>
                              </div>
                              <div class="order-show-price">
                                <span style="color:red;">￥ <?php echo $_smarty_tpl->tpl_vars['goods']->value->price;?>
</span>  × <?php echo $_smarty_tpl->tpl_vars['goods']->value->goods_num;?>
</div>
                            </div>
                          </div>
                        </li>
                        <?php } ?>
                      </ul>
                    </td>
                  </tr>
                  <?php } ?>                                        
                </table>
              </div>  
          </div>
        </div>
      </div><!-- /.左边部分结束 -->
      
      <!-- /.右边部分开始 -->
      <div class="w-right pull-right">
        <div id="faqi">
          <a class="btn btn-block btn-lg btn-primary" href="<?php echo smarty_function_site_url(array('uri'=>'init'),$_smarty_tpl);?>
">发起拼单</a>
        </div>
        <div id="faqi" class="m-t-20">
          <a class="btn btn-block btn-lg btn-danger" href="<?php echo smarty_function_site_url(array('uri'=>'join?oid='),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['action_id']->value;?>
">参与拼单</a>
        </div>
        <div class="ad">
          <h1>广告区</h1>
        </div>
        <div class="ad">
          <h1>广告区</h1>
        </div>
        <div class="ad">
          <h1>广告区</h1>
        </div>
      </div> <!-- /.右边部分结束 -->
    </div><!-- /.container -->

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
