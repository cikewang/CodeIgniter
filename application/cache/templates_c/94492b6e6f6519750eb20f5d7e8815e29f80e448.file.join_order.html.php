<?php /* Smarty version Smarty-3.1.20, created on 2015-01-07 19:38:16
         compiled from "C:\Webroot\CodeIgniter\application\views\join\join_order.html" */ ?>
<?php /*%%SmartyHeaderCode:1402954ad0f73e66c68-90144669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94492b6e6f6519750eb20f5d7e8815e29f80e448' => 
    array (
      0 => 'C:\\Webroot\\CodeIgniter\\application\\views\\join\\join_order.html',
      1 => 1420630656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1402954ad0f73e66c68-90144669',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_54ad0f73ea3e51_79267569',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ad0f73ea3e51_79267569')) {function content_54ad0f73ea3e51_79267569($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\Webroot\\CodeIgniter\\application\\libraries\\smarty\\plugins\\function.base_url.php';
if (!is_callable('smarty_function_site_url')) include 'C:\\Webroot\\CodeIgniter\\application\\libraries\\smarty\\plugins\\function.site_url.php';
?><?php echo $_smarty_tpl->getSubTemplate ('common/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link media="screen" rel="stylesheet" href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
/static/datetimepicker/css/datetimepicker.css">
   <!-- /.内容部分开始 -->
    <div class="container w-index">
      <div class="mark-img">
        <div class="">
          <img src="/static/img/a3.png">
        </div>
      </div>
      <div class="w-order">
        <div class="order-info-input">
          <form id="join_order" class="form-horizontal" role="form" action="<?php echo smarty_function_site_url(array('uri'=>'/join/do_action'),$_smarty_tpl);?>
" method="post">
            <div class="form-group">
              <label for="shangpin" class="col-sm-2 control-label">拼单商品</label>
              <div class="add-goods col-sm-7">
                <div class="add-btn-div">
                  <div class="add-goods-btn pull-left">
                    <button id="addGoods" type="button" class="fui-plus btn btn-primary" data-toggle="modal" data-target="#myModal">添加商品</button>
                  </div> 
                  <span>
                    <a href="#" class="fui-question-circle tishi" data-toggle="tooltip" data-placement="right" title="点击按钮，添加购买商品"></a>
                  </span>  
                </div>
                <div class="goods-info-div hide m-t-20">
                  <ul class="list-unstyled goods-ul goods_info_ul">
                    <!-- 商品展示区 -->
                  </ul>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="goal_money" class="col-sm-2 control-label">拼单金额</label>
              <div class="col-sm-6">
                  <div class="total-price">
                  现在商品总金额为 
                  <span style="color:red;">￥</span>
                  <span id="total_price" style="color:red;">0</span>
                  <span class="help-inline goal_money_info alert msg"></span>
                  <span>
                    <a href="#" class="fui-question-circle tishi" data-toggle="tooltip" data-placement="right" title="这是你的商品总金额"></a>
                  </span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="order-time" class="col-sm-2 control-label">说点什么</label>
              <div class="col-sm-4">
                <textarea class="form-control" rows="2" id="remarks" name="remarks"></textarea>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">发布</button>
              </div>
            </div>
          </form>
        </div>
      </div>      
    </div><!-- /.内容部分结束 -->

<!-- 添加商品动态模块 开始 -->
<div class="modal fade" id="addGoodsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:120px;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h6 class="modal-title" id="myModalLabel">添加商品</h6>
      </div>
      <div class="modal-body  clearfix">
        <div class="addURL">
          <p>
          请在下面输入<a href="#">京东</a>商品的链接地址：
          <a title="" data-placement="top" data-toggle="tooltip" class="fui-question-circle tishi" href="#" data-original-title="如何获得商品链接，点击请查看"></a>
          </p>
          <div class="col-xs-12">
            <div class="col-xs-10">
              <input class="form-control "  type="text" id="goods_url"  placeholder="请将商品链接粘贴到这里，并点击'确定'按钮" >
            </div>
            <div class="">
              <button type="button" class="btn btn-primary  get_goods_info " data-loading-text="获取中...">确定</button>
            </div>
          </div>
        </div>
        <div class=" goods_info hide"></div>
        <div class="alert_info hide">
          <span class="error_info "></span>
        </div>
      </div>
      
      <div class="modal-footer goods_info_button hide">
        <button class="btn" data-dismiss="modal" aria-hidden="true">关闭</button>
        <button class="btn goods_reset" >重新获取</button>
        <button class="btn btn-primary add_goods_to_cart">添加到拼单</button>
      </div>
    </div>
  </div>
</div>
<!---添加商品动态模块 结束-->
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script charset="UTF-8" src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
static/datetimepicker/js/bootstrap-datetimepicker.js" type="text/javascript"></script>
<script charset="UTF-8" src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
static/datetimepicker/js/locales/bootstrap-datetimepicker.zh-CN.js" type="text/javascript"></script>
<script src="/static/js/goods.js"></script><?php }} ?>
