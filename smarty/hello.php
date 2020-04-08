<?php
require('libs/Smarty.class.php');
$smarty = new Smarty;
$var = "Hello Smarty";
$smarty->assign("var", $var);
$smarty->display("hello.tpl");
?>