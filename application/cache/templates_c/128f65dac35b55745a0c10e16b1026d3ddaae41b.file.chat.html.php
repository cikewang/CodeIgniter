<?php /* Smarty version Smarty-3.1.20, created on 2015-01-22 11:31:00
         compiled from "C:\Webroot\CodeIgniter\application\views\index\chat.html" */ ?>
<?php /*%%SmartyHeaderCode:1518054c06d03945a90-75278521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '128f65dac35b55745a0c10e16b1026d3ddaae41b' => 
    array (
      0 => 'C:\\Webroot\\CodeIgniter\\application\\views\\index\\chat.html',
      1 => 1421897326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1518054c06d03945a90-75278521',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_54c06d039868b9_76411848',
  'variables' => 
  array (
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c06d039868b9_76411848')) {function content_54c06d039868b9_76411848($_smarty_tpl) {?><?php if (!is_callable('smarty_function_base_url')) include 'C:\\Webroot\\CodeIgniter\\application\\libraries\\smarty\\plugins\\function.base_url.php';
if (!is_callable('smarty_function_site_url')) include 'C:\\Webroot\\CodeIgniter\\application\\libraries\\smarty\\plugins\\function.site_url.php';
?><!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <div id="informationContainer">
    <div class="userValue">
      <span class="header">ShareLink: </span>
      <span id="customerName">
          <?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
<?php echo $_smarty_tpl->tpl_vars['row']->value['room'];?>

      </span>
    </div>
  </div>
  <div id="subscriberContainer"></div>
  <div id="publisherContainer"></div>

<!-- FRAMEWORKS -->
<!-- ********** -->
<!-- ********** -->
<!-- JQuery -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<!-- OpenTok -->
<script src="http://static.opentok.com/webrtc/v2.2/js/opentok.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0-alpha.4/handlebars.js"></script>
<!-- Moment: date lib -->
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.2/moment-with-locales.min.js"></script>
<!-- Bootstrap 3.2.0 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<!-- Optional theme for Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript for Bootstrap-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script>
var ping=function(pid){$.ajax({type:'POST',url:'https://hlg.tokbox.com/prod/logging/ClientEvent',
data:JSON.stringify({action:'sk_init',partner_id: pid,payload:{id:'link',l:'php',v:'1.0.0'}}),
processData:false});};
</script>
<!-- end -->
<!-- ********** -->
<!-- ********** -->


<!-- JS and CSS -->
<!-- ********** -->
<!-- ********** -->
<link rel="stylesheet" href="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
static/css/chat.css">
<script src="<?php echo smarty_function_base_url(array(),$_smarty_tpl);?>
static/js/chat.js"></script>
<!-- ********** -->
<!-- ********** -->

<script>
  var apiKey = "<?php echo $_smarty_tpl->tpl_vars['row']->value['apiKey'];?>
",
      session_id = "<?php echo $_smarty_tpl->tpl_vars['row']->value['sessionId'];?>
",
      token = "<?php echo $_smarty_tpl->tpl_vars['row']->value['token'];?>
",
      property = { width: "100%", height: "100%", insertMode: "append" },
      publisher = OT.initPublisher("publisherContainer", property),
      session = OT.initSession(apiKey, session_id),
      userType;

  session.connect( token, function(err) {
    if(!err) { session.publish(publisher); }
    userType = session.connection.data;
  });
  session.on("streamCreated", function(event) {
    session.subscribe(event.stream, 'subscriberContainer',  property);
  });
  session.connect(token, function(err) {
    if(!err){ session.publish(publisher); }
  });

  function sendHeartbeat() {
    $.post("<?php echo smarty_function_site_url(array('url'=>'index?'),$_smarty_tpl);?>
="+session_id, {userType: userType}, function(res) {
      heartBeatTimeout();
    });
  }

  function heartBeatTimeout() {
    window.setTimeout(function() {
      sendHeartbeat();
    }, 1000);
  }
  heartBeatTimeout();

  ping(apiKey);
</script>
</body>
</html>
<?php }} ?>
