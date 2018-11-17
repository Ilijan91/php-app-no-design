<?php

class Login{
    public $username;
    public $password;
    public $id;
    
    public function __construct($username,$password){
            $this->username=$username;
            $this->password=$password;
    }
    
    public function logovanje(){
        
            $pdo=ConnectionDatabase::getInstance();

            $st=$pdo->prepare("SELECT * from users where username=:uname and password=:pass");

            $st->bindParam(':uname',$this->username);
            $st->bindParam(':pass',$this->password);
            $st->execute();
            $res=$st->fetch(PDO::FETCH_OBJ);
            return $res;
    }
}