<?php
class Register{
    
    public $listaUsera;
    public $username;
    public $password;
    
    public function __construct($username,$password){
            $this->username=$username;
            $this->password=$password;
    }
    
    public function lista(){
       $pdo=ConnectionDatabase::getInstance();
        
            $st=$pdo->prepare("SELECT * from users");
            $st->execute();
            $res=$st->fetchAll(PDO::FETCH_OBJ);
            $listaUsera=array();
            foreach($res as $korisnici){
                $listaUsera[]=$korisnici->username; 
            }
            return $listaUsera;
  }
    public function NewRegister(){
        $pdo=ConnectionDatabase::getInstance();
        
         $st=$pdo->prepare("insert into users  (username,password) values (:uname,:pass)");
         $st->bindParam(':uname',$this->username);
         $st->bindParam(':pass',$this->password);
         $st->execute();
         echo "Uspesno ste registrovani";
        
   }
    public function DontRegister(){
         echo "Username vec postoji, unesite drugo ime i sifru<br>";
        echo "<a href='index.php'>Login</a>";
        die();
    }
 
}