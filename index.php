<?php

include("init.php");

if (!isset($vars['action'])){
    $vars['action']='list';
}

include("modules/user.php");
include("modules/todo.php");
?>