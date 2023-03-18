<?php

include("init.php");

if ($appuser==0 and !isset($vars['action'])){
	$vars['action']='login';
}elseif(is_array($appuser) and !isset($vars['action'])){
    $vars['action']='list';
}

include("modules/user.php");
//Modules to be accessed only by logged users...
if (is_array($appuser)){
	include("modules/todo.php");
}
?>
