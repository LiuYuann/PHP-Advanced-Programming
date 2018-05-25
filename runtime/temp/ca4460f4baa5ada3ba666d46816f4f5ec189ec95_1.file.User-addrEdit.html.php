<?php
/* Smarty version 3.1.32, created on 2018-05-22 20:18:23
  from 'C:\wamp64\www\web3\application\index\view\cart\User-addrEdit.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b040a8feef0a5_19016183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca4460f4baa5ada3ba666d46816f4f5ec189ec95' => 
    array (
      0 => 'C:\\wamp64\\www\\web3\\application\\index\\view\\cart\\User-addrEdit.html',
      1 => 1526978740,
      2 => 'file',
    ),
    '1ecaea6dc73e01b163d08221df7708e6482ecb3f' => 
    array (
      0 => 'C:\\wamp64\\www\\web3\\public\\User-model.html',
      1 => 1526979190,
      2 => 'file',
    ),
    '522b3750c6ae7473f6c76912e2389bc6c1a2e436' => 
    array (
      0 => 'C:\\wamp64\\www\\web3\\public\\model.html',
      1 => 1526983773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:User-model.html' => 1,
    'file:model.html' => 1,
  ),
),false)) {
function content_5b040a8feef0a5_19016183 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208485b040a8fedb346_02777535', "Userdata");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "User-model.html", '1ecaea6dc73e01b163d08221df7708e6482ecb3f', 'content_5b040a8fd9a9a7_33968964');
}
/* {block "Userdata"} */
class Block_208485b040a8fedb346_02777535 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Userdata' => 
  array (
    0 => 'Block_208485b040a8fedb346_02777535',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="content left">管理收货地址
		<form method="post">
		<input id="address" type="hidden" value="" name="address" />
		<table border="1">
			<tr><th>收件人：</th><td><input type="text" value="测试" name="consignee" /></td></tr>
			<tr><th>收件地区：</th><td>
				<select id="province" onchange="toCity()"><option>北京市</option></select>
				<select id="city" onchange="toArea()"><option>市辖区</option></select>
				<select id="area"><option>东城区</option></select>
				</td></tr>
			<tr><th>详细地址：</th><td><input id="addr" type="text" value="测试地址" /></td></tr>
			<tr><th>手机：</th><td><input type="text" value="11111111111" name="phone" /></td></tr>
			<tr><th>邮箱：</th><td><input type="text" value="1@11.com" name="email" /></td></tr>
			<tr><td colspan="2" class="button center"><input type="submit" value="保存" /> <input type="reset" value="重置" /></td></tr>
		</table>
		</form>
	</div>
	<div class="clear"></div>
</div>
	
	<?php echo '<script'; ?>
 type="text/javascript">
		$("#province").change(function(){
			toCity();
		});
		$("#city").change(function(){
			toArea();
		});
		var xml;
		$(function(){
			$.ajax({
				url:"__STATIC__/ChinaArea.xml",
				dataType:"xml",
				success:function(xmldoc){
					xml=xmldoc;
					var provinces=$(xmldoc).find("province");
					//console.log(provinces.text())
					provinces.each(function() {
						$("#province").append('<option value='+$(this).attr("provinceID")+'>'+$(this).attr("province")+'</option>');
					})
				}
			})
		});
		function toCity(){
			$("#city").empty();
			var pr=$('#province').val();
			var aa=$(xml).find("province[provinceID="+pr+"]");
			var cities=aa.find("City");
			cities.each(function() {
						$("#city").append('<option value='+$(this).attr("CityID")+'>'+$(this).attr("City")+'</option>');
					});
		}
		function toArea(){
			$("#area").empty();
			var ci=$("#city").val();
			var areas=$(xml).find("City[CityID="+ci+"]").find("Piecearea");
			areas.each(function() {
						$("#area").append('<option>'+$(this).attr("Piecearea")+'</option>');
					});
		}
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "Userdata"} */
/* Start inline template "C:\wamp64\www\web3\public\model.html" =============================*/
function content_5b040a8fdbd6e4_15463286 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo '<script'; ?>
 src="__STATIC__/js/jquery-3.3.1.js"><?php echo '</script'; ?>
>
	<meta charset="UTF-8">
	<title>传智商城</title>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2795b040a8fddeb55_52776919', "style");
?>

</head>
<body>
	<div id="top">
		<div class="top_nav">
		<ul><li>收藏本站</li><li>关注本站</li></ul>
		<ul class="right">
			<li><?php echo $_SESSION['user'];?>
，欢迎来到传智商城！[<a href="#" >退出</a>]<li>
			<li class="line">|</li><li>我的订单</li>
			<li class="line">|</li><li><a href="__ROOT__/index.php/index/login" >会员中心</a></li>
			<li class="line">|</li><li><a href="__ROOT__/index.php/index/login" >我的购物车</a></li>
			<li class="line">|</li><li>联系客服</li>
		</ul>
		</div>
	</div>
	<div id="box">
		<div id="header">
			<a class="left" href="#"><div id="logo"></div></a>
			<div id="search" class="left">
				<input type="text" class="left" />
				<input class="search_btn" type="button" value="搜索" />
				<p id="search_hot">热门搜索：PHP培训　大学教材　智能手机　平板电脑</p>
			</div>
			<div id="info" class="left">
				<input type="button" value="会员中心" />
				<input type="button" value="去购物车结算" />
			</div>
		</div>
		<div class="clear"></div>
		<div id="nav">
			<ul><li class="category"><a href="#">全部商品分类</a></li><li class="curr"><a href="../controller/indexController.php">首页</a></li>
				<li><a href="#">PHP</a></li><li><a href="#">Java</a></li><li><a href="#">安卓</a></li>
				<li><a href="#">.Net</a></li><li><a href="#">C/C++</a></li><li><a href="#">IOS</a></li>
			</ul>
		</div>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105005b040a8fe29e36_11217810', "Data");
?>

	<div id="service">
	<ul><li>购物指南</li><li>配送方式</li><li>支付方式</li>
		<li>售后服务</li><li>特色服务</li><li>网络服务</li>
	</ul>
	<div class="clear"></div>
</div>
<div id="footer">传智商城·本项目仅供学习使用</div>
	</div>
	</body>
</html><?php
}
/* {block "style"} */
class Block_2795b040a8fddeb55_52776919 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_2795b040a8fddeb55_52776919',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php
}
}
/* {/block "style"} */
/* {block "Data"} */
class Block_105005b040a8fe29e36_11217810 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Data' => 
  array (
    0 => 'Block_105005b040a8fe29e36_11217810',
  ),
);
public $callsChild = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>

<?php
}
}
/* {/block "Data"} */
/* End inline template "C:\wamp64\www\web3\public\model.html" =============================*/
/* Start inline template "C:\wamp64\www\web3\public\User-model.html" =============================*/
function content_5b040a8fd9a9a7_33968964 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_243015b040a8fe62425_04981852', "style");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207705b040a8fe85b94_92296709', "Data");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "model.html", '522b3750c6ae7473f6c76912e2389bc6c1a2e436', 'content_5b040a8fdbd6e4_15463286');
}
/* {block "style"} */
class Block_243015b040a8fe62425_04981852 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_243015b040a8fe62425_04981852',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link href="__STATIC__/css/home.css" rel="stylesheet" />
<?php
}
}
/* {/block "style"} */
/* {block "Userdata"} */
class Block_60675b040a8fe9de37_58006004 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>

	<?php
}
}
/* {/block "Userdata"} */
/* {block "Data"} */
class Block_207705b040a8fe85b94_92296709 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Data' => 
  array (
    0 => 'Block_207705b040a8fe85b94_92296709',
  ),
  'Userdata' => 
  array (
    0 => 'Block_60675b040a8fe9de37_58006004',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="usercenter">
<ul class="menu left">
	<li><a href="#" id="User_index">个人信息</a></li>
	<li>我的订单</li>
	<li>我的关注</li>
	<li><a href="__ROOT__/index.php/index/cart/addredit" id="User_addr">收货地址</a></li>
	<li>消费记录</li>
	<li><a href="__ROOT__/index.php/index/cart/index" id="Cart_index">购物车</a></li>
</ul>
</div>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60675b040a8fe9de37_58006004', "Userdata", $this->tplIndex);
?>

<?php
}
}
/* {/block "Data"} */
/* End inline template "C:\wamp64\www\web3\public\User-model.html" =============================*/
}
