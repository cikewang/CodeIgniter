<?php /* Smarty version Smarty-3.1.20, created on 2015-01-20 15:46:59
         compiled from "/c/webroot/pindan.me/application/views/changecity/changecity.html" */ ?>
<?php /*%%SmartyHeaderCode:125584888754be07f3e3ce77-34053467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '575825570152271d4a0a90ce5710ba6bbe56fe8b' => 
    array (
      0 => '/c/webroot/pindan.me/application/views/changecity/changecity.html',
      1 => 1421314294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125584888754be07f3e3ce77-34053467',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'city_id' => 0,
    'city_name' => 0,
    'hot_city' => 0,
    'item' => 0,
    'province' => 0,
    'city_list' => 0,
    'key' => 0,
    'city_arr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_54be07f3eb8995_62878378',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54be07f3eb8995_62878378')) {function content_54be07f3eb8995_62878378($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include '/c/webroot/pindan.me/application/libraries/smarty/plugins/function.site_url.php';
?><?php echo $_smarty_tpl->getSubTemplate ('common/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!-- container开始 -->
    <div class="container w-index p-city-list clearfix">
      <div class="enter-city ">
        <span class="enter-txt">点击进入</span>
        <a href="<?php echo smarty_function_site_url(array('uri'=>'index?city_id='),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['city_id']->value;?>
">
        <b><?php echo $_smarty_tpl->tpl_vars['city_name']->value;?>
</b>
        <span class="arrow">&gt;&gt;</span>
        </a>
      </div>
      <div class="hot-city pt20">
        <b class="color-pink">热门城市</b>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hot_city']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
        <a href="/index.php?city_id=<?php echo $_smarty_tpl->tpl_vars['item']->value->code;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->short_name;?>
</a>
        <?php } ?>
      </div>
      <div class="select-city-wrap  clearfix pt20">
        <div class="select-provice fl">
          <b class="pull-left">按省份选择</b>
          <form action="<?php echo smarty_function_site_url(array('uri'=>'/?'),$_smarty_tpl);?>
" method="get" class="form-inline">
            <select id="province">
              <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['province']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->code;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->city_name;?>
</option>
              <?php } ?>
            </select>
          
            <select id="city_id" name="city_id">
              <option value="100010000" selected="selected">北京市</option>
            </select>
            <button type="submit" id="J-select-city-btn" class="btn btn-primary btn-xs" >确定</button>
          </form>
        </div>
      </div>
      
      <div class="select-letter-wrap clearfix pt20">
        <p>
          <b>按拼音首字母选择</b>
        </p>
        <ul id="J-city-list" class="list-unstyled city-list-wrap clearfix">
          <?php  $_smarty_tpl->tpl_vars['city_arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['city_arr']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['city_arr']->key => $_smarty_tpl->tpl_vars['city_arr']->value) {
$_smarty_tpl->tpl_vars['city_arr']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['city_arr']->key;
?>
          <li class="city-list">
            <span class="letter pull-left ">
              <span class="arrow">&nbsp;</span><?php echo $_smarty_tpl->tpl_vars['key']->value;?>

            </span>
            <ul class="cities pull-left list-inline">
              <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['city_arr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
              <li>
                <a href="/index.php?city_id=<?php echo $_smarty_tpl->tpl_vars['item']->value->code;?>
">
                  <?php if ($_smarty_tpl->tpl_vars['item']->value->status==1) {?>
                  <strong><?php echo $_smarty_tpl->tpl_vars['item']->value->short_name;?>
</strong>
                  <?php } else { ?>
                  <?php echo $_smarty_tpl->tpl_vars['item']->value->short_name;?>

                  <?php }?>
                </a>
              </li>
               <?php } ?>
            </ul>
          </li>
          <?php } ?>
        </ul>
      </div>
    </div><!-- /.container -->

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script>
  $(document).ready(function(){
    $('#province').change(function(){
      var pid = $(this).val();
      if(pid=='') return false;
      $.ajax({
        type: "POST",
        dataType: "json",
        url: "<?php echo smarty_function_site_url(array('uri'=>'changecity/get_city_list_ajax'),$_smarty_tpl);?>
",
        data: {pid:pid},
        success: function(data){
          if(data != '-1')
          {
            var str = '';
            var length = data.length;
 
            for(var i=0; i<length; i++)
            {
              if(i==0)
              {
                str += '<option value="'+data[i]['code']+'" selected="selected">'+data[i]['city_name']+'</option>';
              }
              else
              {
                str += '<option value="'+data[i]['code']+'" >'+data[i]['city_name']+'</option>';
              } 
            }
            $('#city_id').html(str);
          }
        }
      });
    });
  });
</script>
<?php }} ?>
