<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-10-20 00:55:08
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29265544440a865d863-74238577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d8ad80e549930d07c32902bb88c78fcea111877' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1413759307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29265544440a865d863-74238577',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_544440a86d7668_88395094',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544440a86d7668_88395094')) {function content_544440a86d7668_88395094($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<title>Smarty</title>
		
		<?php echo '<script'; ?>
>
		function myFunction() {
			alert("I am an alert box!");
		}
		<?php echo '</script'; ?>
>
	</head>
	<body>

		<button onclick="myFunction()">Click Here</button>
		
	</body>
</html>
<?php }} ?>
