<?php

class UserModel{
    
    public function getList(){
        $list=array(array('username'=>'Zbysiu',
                          'password'=>'NiePodamCi'),
                    array('username'=>'Wojtek',
                          'password'=>'NiePodamCi'),
                    array('username'=>'Piotrek',
                          'password'=>'KUKU'),
                    );
        return $list;
    }
}

