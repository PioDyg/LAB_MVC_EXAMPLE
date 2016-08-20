<?php

include 'UserModel.php';
class UserController {
    
    public function showUsers(){
        $USERS=new UserModel();
        $userList=$USERS->getList();
                
        include 'views/users/usersListView.php';
    }
    
    public function registerUser(){
        
    }
}


