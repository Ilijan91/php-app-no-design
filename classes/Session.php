<?php

class Session{
    
    private function __construct(){
        session_start();
    }
    private static $sesija;
    public static function newInstance(){
        if(!self::$sesija){
            self::$sesija=new Session;
        }
        return self::$sesija;
    }
    public function set($k,$v){
        
        $_SESSION[$k]=$v;
    }
    public function get($k){
        return $_SESSION[$k];
    }
    public static function setUsername($username){
        $s=Session::newInstance();
        $s->set("username",$username);
    }
    public static function setPassword($password){
        $s=Session::newInstance();
        $s->set("password",$password);
    }
    
}