<?php
/* Smarty version 3.1.32, created on 2018-05-22 10:54:38
  from 'C:\wamp64\www\web3\application\index\view\login\User-Login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b03866ee42938_58009215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af937bf19aa61bc7f5564c2ba7d261b34a54599c' => 
    array (
      0 => 'C:\\wamp64\\www\\web3\\application\\index\\view\\login\\User-Login.html',
      1 => 1526378593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b03866ee42938_58009215 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>传智商城 - 登录</title>
	<link href="__STATIC__/css/member.css" rel="stylesheet" />
</head>
<body>
<div id="box">
	<h1>传智商城 - 欢迎登录</h1>
	<div id="main">
		<div class="login-ad left">广告位</div>
		<form method="post" action="">
		<table class="login right">
			<tr><th>用户名：</th><td><input type="text" name="user" /></td></tr>
			<tr><th>密码：</th><td><input type="password" name="pwd" /></td></tr>
			<tr><th>验证码：</th><td><input type="text" name="captcha" /></td></tr>
			<tr><td>&nbsp;</td><td><img src="" onclick="this.src='#'+Math.random()"/></td></tr>
			<tr><td>&nbsp;</td><td><input class="button" type="submit" name ="sm" value="登录" /></td></tr>
			<tr><td colspan="2" class="center"><a href="#">立即注册</a><a href="#">返回首页</a></td></tr>
		</table>
		</form>
		<div class="clear"></div>
	</div>
</div>
</body>
</html><?php }
}
