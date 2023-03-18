<?php

switch($vars['action']){
    
    case "signup":{
        include("view/header.php");
        include("view/user/signup.php");
        include("view/footer.php");
        exit;
    }break;
    
    case "do_signup":{
         $ret=user_process_signup($vars);
         
         if ($ret['status']==1){
            header("location: index.php?action=list"); 
         }else{
            header("location: index.php?action=signup&error_message=".urlencode($ret['error']));
         }
         exit;
    }break;
    
    case "login":{
        include("view/header.php");
        include("view/user/login.php");
        include("view/footer.php");
        exit;
    }break;    

    case "do_login":{
        
    }break;    
    
    case "logout":{
        
    }break;    
    
}
?>