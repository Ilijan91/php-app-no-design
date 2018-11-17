<?php
   class Constants {
    const DBHOST="localhost";
    const DBNAME="users";
    const DBUSER="root";
    const DBPASS="";
}

function autoload ($klasa){
    require_once("classes/{$klasa}.php");
}
spl_autoload_register('autoload');