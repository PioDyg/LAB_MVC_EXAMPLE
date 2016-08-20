<?php

include 'UserModel.php';
class UserController {
    
    public function showUsers(){
        $USERS=new UserModel();
        $userList=$USERS->getList();
                
        include 'usersListView.php';
    }
    
    public function registerUser(){
        
    }
}


