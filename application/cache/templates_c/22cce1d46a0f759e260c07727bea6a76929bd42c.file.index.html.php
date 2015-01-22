<?php /* Smarty version Smarty-3.1.20, created on 2015-01-15 15:53:37
         compiled from "C:\Webroot\pindan.me\application\views\index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:634054b772014c4b27-03477579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22cce1d46a0f759e260c07727bea6a76929bd42c' => 
    array (
      0 => 'C:\\Webroot\\pindan.me\\application\\views\\index\\index.html',
      1 => 1420957163,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '634054b772014c4b27-03477579',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mall_id' => 0,
    'city_id' => 0,
    'area_id' => 0,
    'mark_id' => 0,
    'mall_list' => 0,
    'item' => 0,
    'area_list' => 0,
    'mark_list' => 0,
    'order_list' => 0,
    'goods' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_54b7720155c941_94942269',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54b7720155c941_94942269')) {function content_54b7720155c941_94942269($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include 'C:\\Webroot\\pindan.me\\application\\libraries\\smarty\\plugins\\function.site_url.php';
?><?php echo $_smarty_tpl->getSubTemplate ('common/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="container w-index">
      <!-- /.左边部分开始 -->
      <div class="w-left pull-left">
        <!-- /.筛选部分开始 -->
        <div class="select">
          <div class="filter-row">
            <div class="filter-row-inner clearfix">
              <div class="title pull-left">拼单平台：</div>
              <div class="items pull-left">
                <a class="link <?php if ($_smarty_tpl->tpl_vars['mall_id']->value==0) {?>filter-active<?php }?>" href="?city_id=<?php echo $_smarty_tpl->tpl_vars['city_id']->value;?>
&area_id=<?php echo $_smarty_tpl->tpl_vars['area_id']->value;?>
&mark_id=<?php echo $_smarty_tpl->tpl_vars['mark_id']->value;?>
&mall_id=0">全部</a>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['mall_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                  <a class="link <?php if ($_smarty_tpl->tpl_vars['mall_id']->value==$_smarty_tpl->tpl_vars['item']->value->mall_id) {?>filter-active<?php }?>" href="?city_id=<?php echo $_smarty_tpl->tpl_vars['city_id']->value;?>
&area_id=<?php echo $_smarty_tpl->tpl_vars['area_id']->value;?>
&mark_id=<?php echo $_smarty_tpl->tpl_vars['mark_id']->value;?>
&mall_id=<?php echo $_smarty_tpl->tpl_vars['item']->value->mall_id;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->mall_name;?>
</a>
                <?php } ?>
              </div>
            </div>
          </div>
          <?php if (count($_smarty_tpl->tpl_vars['area_list']->value)>0) {?>
          <div class="filter-row">
            <div class="clearfix">
              <div class="title pull-left">全部区域：</div>
              <div class="items pull-left">
                <a class="link <?php if ($_smarty_tpl->tpl_vars['area_id']->value==0) {?>filter-active<?php }?>" href="?city_id=<?php echo $_smarty_tpl->tpl_vars['city_id']->value;?>
&area_id=0&mark_id=0&mall_id=<?php echo $_smarty_tpl->tpl_vars['mall_id']->value;?>
">全部</a>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['area_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                <a class="link <?php if ($_smarty_tpl->tpl_vars['area_id']->value==$_smarty_tpl->tpl_vars['item']->value->code) {?>filter-active<?php }?>" href='?city_id=<?php echo $_smarty_tpl->tpl_vars['city_id']->value;?>
&area_id=<?php echo $_smarty_tpl->tpl_vars['item']->value->code;?>
&mark_id=0&mall_id=<?php echo $_smarty_tpl->tpl_vars['mall_id']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['item']->value->city_name;?>
</a>
                <?php } ?>
              </div>
            </div>
          </div>
          <?php }?>
          <?php if (count($_smarty_tpl->tpl_vars['mark_list']->value)>0) {?>
          <div class="filter-row">
            <div class="clearfix">
              <div class="title pull-left"></div>
              <div class="items pull-left area">
                <a class="link <?php if ($_smarty_tpl->tpl_vars['mark_id']->value==0) {?>filter-active<?php }?>" href="?city_id=<?php echo $_smarty_tpl->tpl_vars['city_id']->value;?>
&area_id=<?php echo $_smarty_tpl->tpl_vars['area_id']->value;?>
&mark_id=0&mall_id=<?php echo $_smarty_tpl->tpl_vars['mall_id']->value;?>
">全部</a>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['mark_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                <a class="link <?php if ($_smarty_tpl->tpl_vars['mark_id']->value==$_smarty_tpl->tpl_vars['item']->value->code) {?>filter-active<?php }?>" href="?city_id=<?php echo $_smarty_tpl->tpl_vars['city_id']->value;?>
&area_id=<?php echo $_smarty_tpl->tpl_vars['area_id']->value;?>
&mark_id=<?php echo $_smarty_tpl->tpl_vars['item']->value->code;?>
&mall_id=<?php echo $_smarty_tpl->tpl_vars['mall_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->city_name;?>
</a>
                <?php } ?>
              </div>
            </div>
          </div>
          <?php }?>
        </div><!-- /.筛选部分结束 -->

        <div class="pindan">
          <?php if (count($_smarty_tpl->tpl_vars['order_list']->value)==0) {?>
          <div class="item no-order">
            <div class="col-xs-12 no-order-msg">
              <div class="col-xs-2">
                 <img class="no-order-img" src="/static/img/icons/svg/paper-bag.svg" alt="Pocket">
              </div>
              <div class="col-xs-7">
                <h4 class="m-t-20">该区域暂无拼单信息,<font color='red'>快来发起吧！</font></h4>
                <div class="m-lt-auto faqi-btn">
                  <a href="<?php echo smarty_function_site_url(array('uri'=>'/init'),$_smarty_tpl);?>
" class=" btn btn-block btn-lg btn-primary">发起拼单</a>
                </div>
              </div>
            </div>
          </div>
          <?php } else { ?>
          <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['order_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
          <!-- /.拼单信息展示开始 -->
          <div class="item">
            <div class="p-info">
              <!-- <span class="fui-location tishi" data-toggle="tooltip" data-placement="top" title="距离"> 50 米</span> -->
              <span class="fui-user tishi  p-l-20 " data-toggle="tooltip" data-placement="top" title="拼单人数"> <?php echo $_smarty_tpl->tpl_vars['item']->value->user_num;?>
</span> 
              <span class="fui-home tishi p-l-20 " data-toggle="tooltip" data-placement="top" title="拼单地址"> <?php echo $_smarty_tpl->tpl_vars['item']->value->address;?>
</span> 
              <span class="pull-right delivery tishi" data-toggle="tooltip" data-placement="top" title="商家">
                商家：<?php echo $_smarty_tpl->tpl_vars['item']->value->shop_name;?>

              </span>
            </div>
            <!-- /. 下区开始 -->
            <div class="clearfix pd-info">
              <div class="pull-left g-list">
                <?php  $_smarty_tpl->tpl_vars['goods'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['goods']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value->goods_info; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['goods']->key => $_smarty_tpl->tpl_vars['goods']->value) {
$_smarty_tpl->tpl_vars['goods']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['goods']->key;
?>
                <!--商品图片展现开始-->
                <div class="pull-left g-info">
                  <div class="">
                    <a class="thumbnail" target="_blank" href="#">
                        <img alt="<?php echo $_smarty_tpl->tpl_vars['goods']->value->goods_name;?>
" title="<?php echo $_smarty_tpl->tpl_vars['goods']->value->goods_name;?>
" src="<?php echo $_smarty_tpl->tpl_vars['goods']->value->img_middle_url;?>
">
                      </a>
                  </div>
                  <div class="">
                    <span style="color:red;"><?php echo $_smarty_tpl->tpl_vars['goods']->value->price;?>
</span> ×  <?php echo $_smarty_tpl->tpl_vars['goods']->value->goods_number;?>
                 
                  </div>
                </div><!--商品图片展现结束-->
                <?php } ?>                       
              </div>
              <!--参与拼单操作区开始-->
              <div class="pull-right pd-action">
                <div class="">
                  <div class="button">
                    <a class="btn btn-primary" href="<?php echo smarty_function_site_url(array('uri'=>'show?'),$_smarty_tpl);?>
oid=<?php echo $_smarty_tpl->tpl_vars['item']->value->action_id;?>
" target='_blank'>查看拼单</a>
                  </div>
                  <div class="button">
                    <?php if ($_smarty_tpl->tpl_vars['item']->value->status==1) {?>
                    <a class="btn btn-danger" href="<?php echo smarty_function_site_url(array('uri'=>'join?'),$_smarty_tpl);?>
oid=<?php echo $_smarty_tpl->tpl_vars['item']->value->action_id;?>
"  target='_blank'>参与拼单</a>
                    <?php } else { ?>
                    <a class="btn disabled" href="javascript:void(0);">已下单</a>
                    <?php }?>
                  </div>
                </div>
              </div><!-- /.参与拼单操作区开始-->
            </div><!-- /.下区结束-->
          </div><!-- /.拼单信息展示开始 --> 
          <?php } ?>
          <?php }?>
        </div>

        <div class="pagination pull-right">
            <ul>
              <li class="previous"><a class="fui-arrow-left" href="#fakelink"></a></li>
              <li class="active"><a href="#fakelink">1</a></li>
              <li><a href="#fakelink">2</a></li>
              <li><a href="#fakelink">3</a></li>
              <li><a href="#fakelink">4</a></li>
              <li><a href="#fakelink">5</a></li>
              <li><a href="#fakelink">6</a></li>
              <li><a href="#fakelink">7</a></li>
              <li><a href="#fakelink">8</a></li>
              <li class="next"><a class="fui-arrow-right" href="#fakelink"></a></li>
            </ul>
          </div>
      </div><!-- /.左边部分结束 -->
      
      <!-- /.右边部分开始 -->
      <div class="w-right pull-right">
        <div id="faqi">
          <a class="btn btn-block btn-lg btn-primary" href="<?php echo smarty_function_site_url(array('uri'=>'/init'),$_smarty_tpl);?>
">发起拼单</a>
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
