<?php

class ConnectionDatabase {
    private static $konekcija;
    public static function getInstance(){
        if(!self::$konekcija){
            self::$konekcija=new PDO("mysql:host=". Constants::DBHOST. ";dbname=".Constants::DBNAME,Constants::DBUSER,Constants::DBPASS);
        }
        return self::$konekcija;
    }
}