<?php
/* Smarty version 3.1.32, created on 2018-05-22 11:18:18
  from 'C:\wamp64\www\web3\application\index\view\login\User-model.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b038bfac94fe6_97629687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1107a238eea1fa162115dd46bb04c2054999ed4' => 
    array (
      0 => 'C:\\wamp64\\www\\web3\\application\\index\\view\\login\\User-model.html',
      1 => 1526959095,
      2 => 'file',
    ),
    '4f86963d6a18f9a79a71104fed6fffcde1559b10' => 
    array (
      0 => 'C:\\wamp64\\www\\web3\\application\\index\\view\\login\\model.html',
      1 => 1526379785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./model.html' => 1,
  ),
),false)) {
function content_5b038bfac94fe6_97629687 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171495b038bfac220f4_18759697', "style");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194425b038bfac4a198_86780449', "Data");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "./model.html", '4f86963d6a18f9a79a71104fed6fffcde1559b10', 'content_5b038bfab63b81_13360045');
}
/* {block "style"} */
class Block_171495b038bfac220f4_18759697 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_171495b038bfac220f4_18759697',
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
class Block_169635b038bfac65d49_30977236 extends Smarty_Internal_Block
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
class Block_194425b038bfac4a198_86780449 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Data' => 
  array (
    0 => 'Block_194425b038bfac4a198_86780449',
  ),
  'Userdata' => 
  array (
    0 => 'Block_169635b038bfac65d49_30977236',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="usercenter">
<ul class="menu left">
	<li><a href="#" id="User_index">个人信息</a></li>
	<li>我的订单</li>
	<li>我的关注</li>
	<li><a href="../controller/addressController.php" id="User_addr">收货地址</a></li>
	<li>消费记录</li>
	<li><a href="../controller/cartController.php" id="Cart_index">购物车</a></li>
</ul>
</div>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169635b038bfac65d49_30977236', "Userdata", $this->tplIndex);
?>

<?php
}
}
/* {/block "Data"} */
/* Start inline template "C:\wamp64\www\web3\application\index\view\login\model.html" =============================*/
function content_5b038bfab63b81_13360045 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88715b038bfab865f5_90089349', "style");
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
			<li class="line">|</li><li><a href="#" >会员中心</a></li>
			<li class="line">|</li><li><a href="../controller/cartController.php" >我的购物车</a></li>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213325b038bfabdd0d1_02785102', "Data");
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
class Block_88715b038bfab865f5_90089349 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_88715b038bfab865f5_90089349',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php
}
}
/* {/block "style"} */
/* {block "Data"} */
class Block_213325b038bfabdd0d1_02785102 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Data' => 
  array (
    0 => 'Block_213325b038bfabdd0d1_02785102',
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
/* End inline template "C:\wamp64\www\web3\application\index\view\login\model.html" =============================*/
}
