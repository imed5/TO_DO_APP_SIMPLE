<?php

switch($vars['action']){
    
    case "signup":{
        include("view/header.php");
        include("view/user/signup.php");
        include("view/footer.php");
        exit;
    }break;
    
    case "do_signup":{
        
    }break;
    
    case "login":{

    }break;    

    case "do_login":{
        
    }break;    
    
    case "logout":{
        
    }break;    
    
}
?>