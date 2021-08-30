<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/flat_rent_final/inc/Database.php');
    include($_SERVER['DOCUMENT_ROOT'].'/flat_rent_final/inc/User.php');
    
    $user_obj=new Users();

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login_req'])){
        $user_login=$user_obj->getlogin($_POST);
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['signup_req'])){
        $user_signup=$user_obj->signup($_POST);
    }

?>