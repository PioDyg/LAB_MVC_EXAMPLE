<?php

include 'views/head.php';

include 'UsersController.php';
$USERSCTRL=new UserController();

if(isset($_GET['address'])){
    $action=$_GET['address'];
}else{
    $action='';
}

switch($action){
    case 'list':
            $USERSCTRL->showUsers();
        break;
    default:
            
        break;
}

include 'views/foot.php';