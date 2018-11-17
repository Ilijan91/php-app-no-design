<?php

abstract class MainClass{
    
 public static $tableName="";
    
    
         static function show($filter=""){
         $pdo=ConnectionDatabase::getInstance();
         $nazivTabele=static::$tableName;
         $nazivKlase=get_called_class();
         $st=$pdo->query("select * from {$nazivTabele}{$filter}");
         $st->setFetchMode(PDO::FETCH_CLASS,$nazivKlase);
         $res=[];
            while($vest=$st->fetch()){
                $res[]=$vest;
            }
            return $res;
        }
        static function showOne($id){
        $pdo=ConnectionDatabase::getInstance();;
        $nazivTabele=static::$tableName;
        $nazivKlase=get_called_class();
        $nazivKljuca=static::$keyName;
            
        $st=$pdo->prepare("select * from {$nazivTabele} where $nazivKljuca=:id");
        $st->bindParam(":id",$id);
        $st->execute();
            
        $st->setFetchMode(PDO::FETCH_CLASS,$nazivKlase);
        return $st->fetch();
    }
    
    static function addNews(){
        if(isset($_POST['addNews'])){
            $pdo=ConnectionDatabase::getInstance();
           
            $category=$_POST['category'];
            $slika=$_POST['slika'];
            $text=$_POST['text']; 
             $nazivTabele=static::$tableName;
        
            $st=$pdo->query("INSERT INTO {$nazivTabele} (category,slika,text) values ('$category','$slika','$text')"); 
            header("Location:admin.php");
        }
            
    }
    
     static function deleteNews(){
         if(isset($_POST['deleteNews'])){
        $pdo=ConnectionDatabase::getInstance();
        $id=$_POST['id'];
    
        $nazivTabele=static::$tableName;
        $st=$pdo->query("DELETE FROM  {$nazivTabele} WHERE id='{$id}' ");
        header("Location:admin.php");
        }
    }
        
        
        
        
        
    
    static function setComments(){
    if(isset($_POST['commentSubmit'])){
        $pdo=ConnectionDatabase::getInstance();
        $uid=$_POST['uid'];
        $date=$_POST['date'];
        $message=$_POST['message'];
        $nazivTabele=static::$tableName;
        $st=$pdo->query("INSERT INTO {$nazivTabele} (uid,date,message) values ('$uid','$date','$message')"); 
        }
   
    }
    static function getComments(){
        $pdo=ConnectionDatabase::getInstance();
         $nazivTabele=static::$tableName;
         $nazivKlase=get_called_class();
         $st=$pdo->query("select * from {$nazivTabele}");
         $st->setFetchMode(PDO::FETCH_CLASS,$nazivKlase);
         $res=[];
            while($komentar=$st->fetch()){
                $res[]=$komentar; 
            }
            return $res;
    }
     static function editComments(){
    if(isset($_POST['commentEdit'])){
        $pdo=ConnectionDatabase::getInstance();
        $cid=$_POST['cid'];
        $uid=$_POST['uid'];
        $date=$_POST['date'];
        $message=$_POST['message'];
        $nazivTabele=static::$tableName;
        $st=$pdo->query("UPDATE  {$nazivTabele} SET message='{$message}' WHERE cid='{$cid}' ");
        header("Location:news.php");
        }
   
    }
    static function deleteComments(){
         if(isset($_POST['deleteSubmit'])){
        $pdo=ConnectionDatabase::getInstance();
        $cid=$_POST['cid'];
    
        $nazivTabele=static::$tableName;
        $st=$pdo->query("DELETE FROM  {$nazivTabele} WHERE cid='{$cid}' ");
        header("Location:news.php");
        }
    }
    

}