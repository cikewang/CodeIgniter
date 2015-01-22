<?php /* Smarty version Smarty-3.1.20, created on 2015-01-07 18:18:15
         compiled from "C:\Webroot\CodeIgniter\application\views\join\address.html" */ ?>
<?php /*%%SmartyHeaderCode:2742554ad04f47b1d34-47888815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c30ab6ae35f12780dec874e3cb2380fc02c4f50' => 
    array (
      0 => 'C:\\Webroot\\CodeIgniter\\application\\views\\join\\address.html',
      1 => 1420625837,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2742554ad04f47b1d34-47888815',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_54ad04f48176b2_70252029',
  'variables' => 
  array (
    'username' => 0,
    'phone' => 0,
    'area_list' => 0,
    'item' => 0,
    'mark_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ad04f48176b2_70252029')) {function content_54ad04f48176b2_70252029($_smarty_tpl) {?><?php if (!is_callable('smarty_function_site_url')) include 'C:\\Webroot\\CodeIgniter\\application\\libraries\\smarty\\plugins\\function.site_url.php';
?><?php echo $_smarty_tpl->getSubTemplate ('common/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <!-- /.内容部分开始 -->
  <div class="container w-index">
    <div>
      <div class="">
        <img src="/static/img/a2.png">
      </div>
    </div>
    <div class="w-address">
      <form action="<?php echo smarty_function_site_url(array('uri'=>'/join/order'),$_smarty_tpl);?>
" method="post" id="address-form">
        <div>
          <div>
            <h6>拼单人信息</h6>
          </div>
          <div class="u-info clearfix">
            <div class="item">
            <span class="col-md-1 title inline-block">姓名:</span>
              <span class="col-md-2 username-span">
                <input type="text" class="form-control input-sm " placeholder="姓名" value="<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
" id="username" name="username" /></span>  
              <span class="">
                <a href="#" class="fui-question-circle tishi" data-toggle="tooltip" data-placement="right" title="提示：为了拼单者之前信誉度融洽，建议填写真实姓名（只是建议）"></a>
              </span>
              <span class="msg username-msg"></span>
            </div>
            <div class="item">
              <span class="col-md-1 title">手机号：</span>
              <span class="col-md-2 phone-span">
                <input type="text" class="form-control input-sm" placeholder="手机号" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
" id="phone" name="phone" /></span>
              <span class="">
                <a href="#" class="fui-question-circle tishi" data-toggle="tooltip" data-placement="right" title="提示：请填写正确手机号，当有人参与时，我们将于短信通知"></a>
              </span>
              <span class="msg phone-msg"></span>
            </div>
            <div class="item">
              <span class="col-md-1 title">区域选择:</span>
              <span class="select-address">
                <select class="form-control select select-primary select-sm mbl select2-offscreen" data-toggle="select" tabindex="-1" title="" id="area" name="area">
                  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['area_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->code;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->city_name;?>
</option>
                  <?php } ?>          
                </select>

                <?php if (count($_smarty_tpl->tpl_vars['mark_list']->value)>0) {?>
                <select class="form-control select select-primary select-sm mbl select2-offscreen" data-toggle="select" tabindex="-1" title="" id="mark" name="mark">      
                  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['mark_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->code;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->city_name;?>
</option>
                  <?php } ?>
                </select>
                <?php }?>
                <span class="">
                  <a href="http://www.baidu.com" target='_blank' class="fui-question-circle tishi" data-toggle="tooltip" data-placement="right" title="你所在地区不在这里没有怎么办？点击“?”告诉我们，我们第一时间处理。"></a>
                </span>
              </span>
              
            </div>
            <div class="item clearfix">
              <span class="col-md-1 title">你的位置:</span>
              <span class="col-md-4 cityName-span">
                <input type="text" class="form-control input-sm" placeholder="小区名字、地标建筑" id="cityName" name="cityName" value=""/>
              </span>
              <span class="">
                <a href="#" class="fui-question-circle tishi" data-toggle="tooltip" data-placement="right" title="提示：这里地址用与帮助其他人查询拼单使用，不做为商品收货地址使用。无需精确到具体门牌号"></a>
              </span>
              <span class="msg cityName-msg"></span>
              <!-- <input type="button" value="查询" onclick="theLocation()" /> -->
            </div>
            <div class="item hide">
              <span class="col-md-1 title">经纬度:</span>
              <span class="col-md-4">
                <input type="text" class="form-control input-sm" id="lng" name="lng" value=""/>
                <input type="text" class="form-control input-sm" id="lat" name="lat" value=""/>
              </span>
            </div>
            <div class="item clearfix" >
              <span class="col-md-1 title">地图标记:</span>
              <span class="col-md-9"  id="map" >
                <style type="text/css">
                    body, html{width: 100%;height: 100%;margin:0;font-family:"微软雅黑";}
                    #allmap{height:500px;width:100%;}
                    #r-result{width:100%; font-size:14px;}
                  </style>
                  <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=Tl5TFsgOGjMkO0hrMpibTyKX"></script>
                <div id="allmap"></div>
                <div id="r-result">
                </div>
              </span>
              <span class="show-map" style="display:none;">
                <button type="button" class="show-map-btn btn btn-primary btn-xs">显示地图</button>
              </span>
            </div>
          </div>

          <div class="action-btn clearfix">
            <span class="go-faqi pull-left">
              <a href="<?php echo smarty_function_site_url(array('uri'=>'/init'),$_smarty_tpl);?>
" class="btn btn-block btn-lg btn-default col-xs-3">< 回到上一步</a>
            </span>
            <span class="msg common-msg col-xs-6 pull-left"></span>
            <span class="go-faqi pull-right">
              <button type="submit" class="btn btn-block btn-lg btn-primary">下一步  ></button>
            </span>
          </div>
        </div>
      </form>
    </div>
  </div><!-- /.内容部分结束 -->


<?php echo $_smarty_tpl->getSubTemplate ('common/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="/static/js/flat-ui.min.js"></script>
<script type="text/javascript">
$("select").select2({dropdownCssClass: 'dropdown-inverse'});
$('.tishi').tooltip();

$(document).ready(function(){
  $('#area').change(function(){
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
              $('#select2-chosen-2').html(data[i]['city_name']);
            }
            else
            {
              str += '<option value="'+data[i]['code']+'" >'+data[i]['city_name']+'</option>';
            } 
          }
          str += '<option value="0" >以上都不是</option>';
          $('#mark').html(str);
        }
      }
    });
  });

  
  $('#address-form').submit(function(){
    var username = $('#username').val();
    if(username == '')
    {
      $('.username-msg').html('用户名不能为空');
      $('.username-span').addClass('has-error');
      alert('用户名不能为空');
      return false;
    }
    else
    {
      $('.username-span').removeClass('has-error');
      $('.username-msg').html('');
    }
    var phone = $('#phone').val();
    var ze_phone =  /^1\d{10}$/;
    if(phone == '')
    {
      $('.phone-msg').html('请输入手机号码');
      $('.phone-span').addClass('has-error');
      alert('请输入手机号码');
      return false;
    }
    if(! ze_phone.test(phone))
    {
      $('.phone-msg').html('请输入正确的手机号');
      $('.phone-span').addClass('has-error');
      alert('请输入正确的手机号');
      return false;
    }
    if(<?php echo count($_smarty_tpl->tpl_vars['mark_list']->value);?>
 > 0)
    {
      var mark = $('#makr').val();
      // alert('<a href="">点击这里</a>，告诉我们位置，我们会及时确认并更新');
    }
    if($('#cityName').val() == '')
    {
      $('.cityName-msg').html('请填写你的你的位置，让你周边朋友更容易找到你的拼单信息');
      $('.cityName-span').addClass('has-error');
      alert('请填写你的你的位置，让你周边朋友更容易找到你的拼单信息');
      return false;
    }
    if ($('#lng').val =='' || $('#lat').val() == '') 
    {
      $('.cityName-msg').html('你的你的位置有点问题，地图上无法找到，请重新填写');
      $('.cityName-span').addClass('has-error');
      alert('你的你的位置有点问题，地图上无法找到，请重新填写');
      return false;
    }

    return true;
  });
});

// 百度地图API功能
var map = new BMap.Map("allmap");
var point = new BMap.Point(116.331398,39.897445);
map.centerAndZoom(point,11);
var opts = {type: BMAP_NAVIGATION_CONTROL_SMALL}
map.addControl(new BMap.NavigationControl(opts)); //添加平移缩放控件
map.addControl(new BMap.OverviewMapControl()); //添加缩略地图控件 
function theLocation(){
  var city = document.getElementById("cityName").value;
  if(city != ""){
    map.centerAndZoom(city,11);      // 用城市名设置地图中心点

  }
}

var ac = new BMap.Autocomplete(    //建立一个自动完成的对象
  {"input" : "cityName"
  ,"location" : map
});

var myValue;
ac.addEventListener("onconfirm", function(e) {    //鼠标点击下拉列表后的事件
  var _value = e.item.value;
  myValue = _value.province +  _value.city +  _value.district +  _value.street +  _value.business;
  setPlace();
});
// var sContent =  "<p style='margin:0;line-height:1.5;font-size:13px;text-indent:2em'>1. <font color='red'>是</font>-请按“确认”按钮</p>"+
// "<p style='margin:0;line-height:1.5;font-size:13px;text-indent:2em'>2. <font color='red'>不是</font>-请重新查询地址或<font color='red'>拖动标记</font>到您的位置并按“确定”按钮</p>"+
//                 "<button class='btn btn-primary  btn-xs pull-right' id='confirm_address' style='margin-top:5px;'>确定</button></div>";

var sContent =  "<p style='margin:0;line-height:1.5;font-size:13px;text-indent:2em'>1. <font color='red'>是</font> - 请继续其他操作</p>"+
                "<p style='margin:0;line-height:1.5;font-size:13px;text-indent:2em'>2. <font color='red'>不是</font> - 请重新查询地址或<font color='red'>拖动标记</font>到您的位置并继续其他操作</p>";
var opts = {
  width : 400,     // 信息窗口宽度
  height: 100,     // 信息窗口高度
  title : "是您发起拼单的位置吗？" , // 信息窗口标题
  enableMessage:false,//设置允许信息窗发送短息
}
var infoWindow = new BMap.InfoWindow(sContent, opts); 

function setResult(point)
{
  $('#lng').val(point.lng);
  $('#lat').val(point.lat);
}
function setPlace(){
  map.clearOverlays();    //清除地图上所有覆盖物
  function myFun(){
    var pp = local.getResults().getPoi(0).point;    //获取第一个智能搜索的结果
    map.centerAndZoom(pp, 18);
    marker = new BMap.Marker(pp);
    map.addOverlay(marker);    //添加标注
    marker.enableDragging();
    marker.openInfoWindow(infoWindow,  point);
    
    if (point) 
    {
      setResult(point);
    };
    // 拖动标注，更换经纬度
    marker.addEventListener("dragend", function(e){
      this.openInfoWindow(infoWindow, point);
      setResult(e.point);
    });
    marker.addEventListener("click", function(e){
      this.openInfoWindow(infoWindow,  point);
      setResult(e.point);
    });

    // document.getElementById('confirm_address').onclick = function (){
      // $('#map').hide('normal');
      // $('.show-map-btn').show();
    // };
  }
  var local = new BMap.LocalSearch(map, { //智能搜索
    onSearchComplete: myFun
  });
  local.search(myValue);
}

$('.show-map-btn').click(function(){
  $('#map').show('normal');
  $('.show-map-btn').hide();
});
</script>

<?php }} ?>
