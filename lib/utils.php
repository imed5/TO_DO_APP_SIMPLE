<?php

function get_input_vars(){
    global $_SERVER;
    $REQUEST_METHOD = $_SERVER['REQUEST_METHOD'];
    global $_POST;
    global $_GET;
    //set_magic_quotes_runtime (0);

    $vars = $_POST ;
    foreach ($vars as $k=>$v){
        if (is_array($v)) continue;
        //if (get_magic_quotes_gpc())
	$v = stripslashes($v);
        $vars[$k] = trim($v);
    }

    $vars2 = $_GET ;
    foreach ($vars2 as $k=>$v){
        if (is_array($v)) continue;
        //if (get_magic_quotes_gpc()) 
	$v = stripslashes($v);
        $vars[$k] = trim($v);
    }

    return $vars;
}

function parse_mdy_time($str){
	if (is_empty($str))return 0;
	$d=explode("/", $str);
	if (count($d)!=3)return 0;
	if (is_numeric($d[0]) && is_numeric($d[1]) && is_numeric($d[2]))
		return mktime  (0 , 0 , 0 , $d[0], $d[1], $d[2]);
	return 0;
}

?>