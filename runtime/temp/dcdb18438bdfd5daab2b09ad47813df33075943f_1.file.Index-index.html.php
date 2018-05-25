<?php
/* Smarty version 3.1.32, created on 2018-05-22 20:53:00
  from 'C:\wamp64\www\web3\application\index\view\index\Index-index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b0412ac97d3f6_26485776',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcdb18438bdfd5daab2b09ad47813df33075943f' => 
    array (
      0 => 'C:\\wamp64\\www\\web3\\application\\index\\view\\index\\Index-index.html',
      1 => 1526960160,
      2 => 'file',
    ),
    '522b3750c6ae7473f6c76912e2389bc6c1a2e436' => 
    array (
      0 => 'C:\\wamp64\\www\\web3\\public\\model.html',
      1 => 1526993577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:model.html' => 1,
  ),
),false)) {
function content_5b0412ac97d3f6_26485776 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_320125b0412ac8ad0c2_12558578', "style");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57175b0412ac8cfa89_29751256', "Data");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "model.html", '522b3750c6ae7473f6c76912e2389bc6c1a2e436', 'content_5b0412ac80b981_76707381');
}
/* {block "style"} */
class Block_320125b0412ac8ad0c2_12558578 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_320125b0412ac8ad0c2_12558578',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link href="__STATIC__/css/home.css" rel="stylesheet" />
<?php
}
}
/* {/block "style"} */
/* {block "Data"} */
class Block_57175b0412ac8cfa89_29751256 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Data' => 
  array (
    0 => 'Block_57175b0412ac8cfa89_29751256',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="slide">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['category']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
            <div class="cate"><div class="cate1 left"><a href="#" ><?php echo $_smarty_tpl->tpl_vars['row']->value;?>
</a></div></div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <div class="clear"></div>
</div>
<div id="hot" class="left">
	<img src="__STATIC__/image/1.jpg">
	<img id="show" src="__STATIC__/image/1.jpg">
	<ul>
    	<li ></li>
    	<li ></li>
    	<li ></li>
    	<li ></li>
	</ul>
</div>
<div id="news" class="right">新闻列表</div>
<div class="clear"></div>
<div id="best">
	<div class="best-img left"></div>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['goods']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
	<ul class="item left">
	    <li style="width:240px;heigh:340px;"><a href="#"  target="_blank"><img width="100%" height="100%" src="__STATIC__/image/<?php echo $_smarty_tpl->tpl_vars['row']->value['thumb'];?>
"></a></li>
	    <li class="goods"><a href="#" target="_blank"><?php echo $_smarty_tpl->tpl_vars['row']->value['gname'];?>
</a></li>
	    <li class="price">￥<?php echo $_smarty_tpl->tpl_vars['row']->value['price'];?>
</li>
	    </ul>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<div class="clear"></div>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
console.log();
		$("#hot li").each(function(i){
			$(this).click(function(){
			$("#hot img:first-child").css("display","none"); 
			$("#hot #show").stop(true,true); 
			//停止当前动画，避免出现排队
          	$("#hot #show").fadeOut(700,"swing",function(){
            $("#hot #show").attr("src","__STATIC__/image/"+(i+1)+".jpg");
        	});
        	$("#hot #show").fadeIn(700,"swing");
            $("#hot li").css("background","gray");
            $(this).css("background","yellow");
			}); 
		});  
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "Data"} */
/* Start inline template "C:\wamp64\www\web3\public\model.html" =============================*/
function content_5b0412ac80b981_76707381 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52145b0412ac828789_08153918', "style");
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
			<ul><li class="category"><a href="#">全部商品分类</a></li><li class="curr"><a href="__ROOT__/index.php/index/index/index">首页</a></li>
				<li><a href="#">PHP</a></li><li><a href="#">Java</a></li><li><a href="#">安卓</a></li>
				<li><a href="#">.Net</a></li><li><a href="#">C/C++</a></li><li><a href="#">IOS</a></li>
			</ul>
		</div>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_635b0412ac8720f0_93183051', "Data");
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
class Block_52145b0412ac828789_08153918 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_52145b0412ac828789_08153918',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php
}
}
/* {/block "style"} */
/* {block "Data"} */
class Block_635b0412ac8720f0_93183051 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Data' => 
  array (
    0 => 'Block_635b0412ac8720f0_93183051',
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
