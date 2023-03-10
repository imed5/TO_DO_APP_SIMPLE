<?php

include("init.php");

if (!isset($vars['action'])){
    $vars['action']='list';
}

include("modules/todo.php");
?>