<?php

require_once "autoload.php";

if(isset($_POST['btn_submit'])||isset($_POST['btn_register'])){
    $username=Session::setUsername($_POST['username']);
    $password=Session::setPassword(md5($_POST['password'])); 


    $username=str_replace("'","",$username);
    $password=str_replace("'","",$password);

    $username=Session::newInstance()->get("username");
    $password=Session::newInstance()->get("password");
}

// provera da li username vec postoji u bazi prilikom pritiska na dugme login
if(isset($_POST['btn_submit'])){
     $login= new Login($username,$password);
    if($login->logovanje()){
        
        if($_SESSION['username']=='Admin'&& $_SESSION['password']=='21232f297a57a5a743894a0e4a801fc3'){
            header("location: admin.php");
        }else{
             header("location: news.php");
        }            
    }else{
        echo "User ne postoji, molim Vas registrujte se<br>";  
        echo "<a href='index.php'>Register</a>";
    } 
      
}
// Registracija u bazu i provera da li vec postoji isti Username u bazi
if(isset($_POST['btn_register'])){
    $register= new Register($username,$password);
    $listaUsera=$register->lista();
    if(in_array($username,$listaUsera)){
        $register->DontRegister();  
    }else{
        $register->NewRegister();
        echo "<br>";
        echo "<a href='news.php'>Prikazi vesti</a>";
        
    }
}
