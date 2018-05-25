<?php
/* Smarty version 3.1.32, created on 2018-05-22 16:53:33
  from 'C:\wamp64\www\web3\application\index\view\login\Cart-index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b03da8d5e3d61_28765816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da24ec332953826abaecdefe982f858ea88c7d8c' => 
    array (
      0 => 'C:\\wamp64\\www\\web3\\application\\index\\view\\login\\Cart-index.html',
      1 => 1526974218,
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
      1 => 1526379785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:User-model.html' => 1,
    'file:model.html' => 1,
  ),
),false)) {
function content_5b03da8d5e3d61_28765816 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_299605b03da8d488997_33060388', "Userdata");
?>
	
	
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "User-model.html", '1ecaea6dc73e01b163d08221df7708e6482ecb3f', 'content_5b03da8d30aeb0_85644860');
}
/* {block "Userdata"} */
class Block_299605b03da8d488997_33060388 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Userdata' => 
  array (
    0 => 'Block_299605b03da8d488997_33060388',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="content left">我的购物车
		<form method="post">
		<table border="1" id="shopcart" cellpadding="0" cellspacing="0">
			<tr class="tr-tit"><th class="w50"><a href="#" >全选</a></th><th>商品</th><th class="w50">单价</th><th class="w92">数量</th><th class="w50">操作</th></tr>
			<?php if (!key($_smarty_tpl->tpl_vars['cart']->value)) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value[0], 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
						    <tr class="item" id="<?php echo $_smarty_tpl->tpl_vars['row']->value['gid'];?>
">
						    <td class="center"><input type="checkbox" class="check" name="checking" /></td>
						    <td><a href="__ROOT__/index.php/index/controller/Goodsdetail/Goodsdetail/index?gid=<?php echo $_smarty_tpl->tpl_vars['row']->value['gid'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['row']->value['gname'];?>
</a></td>
						    <td class="center">￥<span class="item-price" name="price" ><?php echo $_smarty_tpl->tpl_vars['row']->value['price'];?>
</span></td>
						    <td><input class="item-num" onkeyup="checkNum(this)" type="number" min="0" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['num'];?>
" name="num[]" /></td>
						    <td class="center"><a href="#" class="del"  id="<?php echo $_SESSION['mid'];?>
">删除</a></td>
						    </tr>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php }?>
				<tr><th><a href="#" >取消</a></th><td colspan="4">删除选中的商品&nbsp;&nbsp;继续购物&nbsp;&nbsp;
				共<span id="num">0</span>件商品 总计：￥<span class="price" name="cost"><span id="monery">0</span></span>
				<input type="submit" value="提交订单" class="order-btn" />
			</td></tr>
		</table>
		</form>
	</div>
	<div class="clear"></div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	$("#shopcart a:contains('全选')").click(function(){
			checkedAll();
			});
	$("#shopcart a:contains('取消')").click(function(){
			checkedNo();
			});
	$("#shopcart :checkbox[name=checking]").click(function(){
			calCost();
			});
	$("#shopcart .item-num").click(function(){
			calCost();
			});
	$(".del").each(function(){
			$(this).click(function(i){
				if(confirm("你确定要删除吗？")){
					$gid=$(this).closest(".item").attr("id");
					$mid=$(this).attr("id");
					$this=$(this).closest(".item")
					$.ajax({
	                        url: "../controller/delcartController.php",
	                        data: { "gid":$gid,"mid":$mid,},
	                        dataType:"json",
	                        success: function (msg) {
	                        	for(var key in msg){
	                        		if(key==0){
	                        			$this.remove();
	                        		}
	                        		else{
	                        			alert("删除出错");
	                        		}
	                        	}
	                        },
	                    });
					}
				}); 
		});  
    function checkedAll(){
		$("#shopcart :checkbox").prop("checked",true);
     	calCost();
    }
	function checkedNo(){
		$("#shopcart :checkbox").prop("checked",false);
		calCost();
	}
	function calCost(){
		var totalNum=0;
		var totalPrice = 0;
		$("#shopcart :checkbox").each(function(n){
			if($(this).prop("checked")==true){
				totalNum += Number($("#shopcart .item-num")[n].value);
                totalPrice += Number($("#shopcart .item-price")[n].innerText) * Number($("#shopcart .item-num")[n].value);
			}
		});
		$("#num").text(totalNum);
        $("#monery").text(totalPrice);
	}
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "Userdata"} */
/* Start inline template "C:\wamp64\www\web3\public\model.html" =============================*/
function content_5b03da8d32d2b3_18263247 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_216475b03da8d350af6_39358933', "style");
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171805b03da8d3a8e45_61257591', "Data");
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
class Block_216475b03da8d350af6_39358933 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_216475b03da8d350af6_39358933',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php
}
}
/* {/block "style"} */
/* {block "Data"} */
class Block_171805b03da8d3a8e45_61257591 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Data' => 
  array (
    0 => 'Block_171805b03da8d3a8e45_61257591',
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
function content_5b03da8d30aeb0_85644860 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192375b03da8d3f33a4_03322034', "style");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_299465b03da8d41e4a0_45538588', "Data");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "model.html", '522b3750c6ae7473f6c76912e2389bc6c1a2e436', 'content_5b03da8d32d2b3_18263247');
}
/* {block "style"} */
class Block_192375b03da8d3f33a4_03322034 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'style' => 
  array (
    0 => 'Block_192375b03da8d3f33a4_03322034',
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
class Block_109235b03da8d43a9d2_61513080 extends Smarty_Internal_Block
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
class Block_299465b03da8d41e4a0_45538588 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Data' => 
  array (
    0 => 'Block_299465b03da8d41e4a0_45538588',
  ),
  'Userdata' => 
  array (
    0 => 'Block_109235b03da8d43a9d2_61513080',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109235b03da8d43a9d2_61513080', "Userdata", $this->tplIndex);
?>

<?php
}
}
/* {/block "Data"} */
/* End inline template "C:\wamp64\www\web3\public\User-model.html" =============================*/
}
