<?php

class SigninCont{
    private $userid;
    private $password;


    public function __construct($userid, $password){
        $this->userid = $userid;
        $this->password = $password;
    }


    private function emptyInput(){
        $result = true;

        if(empty($userid) || empty($password)){
            $result = false;
        }
        
        return $result;
    }

    private function invalidUsername(){
        $result = true;

        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->userid)){$result=false;}
        return $result;
    }

    
}