<?php

switch($vars['action']){
    case "list":{
        $items = $db->query('SELECT * FROM items')->fetchAll();
        
        include("view/header.php");
        include("view/list.php");
        include("view/footer.php");
        exit;
    }break;

    case "do_add":{
        $db->query("INSERT INTO items (title) VALUES (?)",$vars['title']);
        header("location: index.php");
        exit;        
        
    }break;
    
    case "delete":{
        //Some code here to delete ....
        exit;        
    }break;
    
    case "do_edit":{
        //some code here to edit and save...
        exit;
    }break;
    
    case "help":{
        //some code here to show help 
        exit;
    }break;
    
    
}

?>