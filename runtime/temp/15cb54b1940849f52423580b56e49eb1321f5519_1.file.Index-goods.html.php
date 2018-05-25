<?php
/* Smarty version 3.1.32, created on 2018-05-22 20:18:53
  from 'C:\wamp64\www\web3\application\index\view\cart\Index-goods.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b040aad3b2013_52656958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15cb54b1940849f52423580b56e49eb1321f5519' => 
    array (
      0 => 'C:\\wamp64\\www\\web3\\application\\index\\view\\cart\\Index-goods.html',
      1 => 1526980635,
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
    'file:model.html' => 1,
  ),
),false)) {
function content_5b040aad3b2013_52656958 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_324215b040aad292296_33170217', "style");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_252105b040aad2bb3b1_12797771', "Data");
?>
	<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "model.html", '522b3750c6ae7473f6c76912e2389bc6c1a2e436', 'content_5b040aad1d8621_19287030');
}
/* {block "style"} */
class Block_324215b040aad292296_33170217 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_324215b040aad292296_33170217',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link href="__STATIC__/css/home.css" rel="stylesheet" />
  <style type="text/css">
	img.zoom_image{ border:1px solid #cccccc;}
	.zxx_image_zoom_div{ background:white; text-align:center; position:absolute;overflow:hidden;}
</style>
<?php echo '<script'; ?>
 type="text/javascript" src="__STATIC__/js/jqzoom.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function(){
		$("img.zoom_image").jqueryzoom({
		});
	});
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "style"} */
/* {block "Data"} */
class Block_252105b040aad2bb3b1_12797771 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Data' => 
  array (
    0 => 'Block_252105b040aad2bb3b1_12797771',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="goodsinfo">
	<div class="now_cat">当前位置：&nbsp;
	<a href="#" >图书</a>&nbsp;&gt;&nbsp;
	<a href="#" >教育</a>&nbsp;&gt;&nbsp;
	<a href="#" >教材</a>&nbsp;&gt;&nbsp;
	<?php echo $_smarty_tpl->tpl_vars['goods']->value['gname'];?>
</div>
	<div class=" pic left divtest">
		<a href="__STATIC__/image/pythonl.jpg"  class="image_zoom_list">
        <img class="zoom_image" src="__STATIC__/image/<?php echo $_smarty_tpl->tpl_vars['goods']->value['thumb'];?>
"  width="100%" height="100%" alt=""/>
        </a>
	</div>
	<div class="info left"><h1><?php echo $_smarty_tpl->tpl_vars['goods']->value['gname'];?>
</h1><table>
		<tr><th>售 价：</th><td><span>￥<?php echo $_smarty_tpl->tpl_vars['goods']->value['price'];?>
</span></td></tr>
		<tr><th>商品编号：</th><td><?php echo $_smarty_tpl->tpl_vars['goods']->value['identifier'];?>
</td></tr>
		<tr><th>累计销量：</th><td>1000</td></tr>
		<tr><th>评 价：</th><td>1000</td></tr>
		<tr><th>配送至：</th><td><?php echo $_smarty_tpl->tpl_vars['goods']->value['address'];?>
（免运费）</td></tr>
		<tr><th>购买数量：</th><td>
			<input type="button" value="-" class="cnt-btn" />
			<input type="text" value="1" id="num" class="num-btn" />
			<input type="button" value="+" class="cnt-btn" />（库存：100）</td></tr>
		<tr><td colspan="2" class="button"><a href="#">立即购买</a><a href="#" onclick="addCart()">加入购物车</a></td></tr>
		</table></div><div class="clear"></div>
	<div class="slide left">相关商品</div>
	<div class="desc left">
		<div class="attr"><p>商品属性</p><ul>
			<li>科目：计算机</li><li>出版社：铁道出版社</li><li>作者：</li>		<div class="clear"></div></ul></div>
	</div>
	<div class="clear"></div>
</div>
<<?php echo '<script'; ?>
 type="text/javascript">
$(":button[value='+']").click(function(){
			$("#num").attr("value",Number($("#num").attr("value"))+1);
			});
$(":button[value='-']").click(function(){
	if(Number($("#num").attr("value"))>0)
			$("#num").attr("value",Number($("#num").attr("value"))-1);
			});
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "Data"} */
/* Start inline template "C:\wamp64\www\web3\public\model.html" =============================*/
function content_5b040aad1d8621_19287030 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_317595b040aad1fc194_43428783', "style");
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52765b040aad250fd6_18477345', "Data");
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
class Block_317595b040aad1fc194_43428783 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_317595b040aad1fc194_43428783',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php
}
}
/* {/block "style"} */
/* {block "Data"} */
class Block_52765b040aad250fd6_18477345 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Data' => 
  array (
    0 => 'Block_52765b040aad250fd6_18477345',
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
}
