<?php
date_default_timezone_set('Europe/Belgrade');
require_once "autoload.php";
$allNews=News::show();

$vest= new News;

if(isset($_GET['id'])){
    $vest=News::showOne($_GET['id']);
}
echo "<ul>";

?>
<a href='news.php'>Nazad na vesti</a><br>
 <a href='logout.php'>Logout</a>

 <select name="id" onchange="window.location='?id='+this.value">
   <?php
    
        foreach($allNews as $v){
            echo "<option ".($v->id==$vest->id?"selected":""). " value='{$v->id}'>{$v->category}</option>";
        }
    ?>
    </select><br>



<?php


echo "</ul>";

if(isset($_GET['id'])){
    
    $vest=News::showOne($_GET['id']);
 ?> 
   
    <h3><?=$vest->category?></h3>
    <img src="<?=$vest->slika?>" width="400"><br>
    <p style='width:400px';>Text: <?=$vest->text?></p><br>
    
    <form method='post' action='<?=Comments::setComments();?>'>
        <input type='hidden' name='uid' value='Anonymous'>
        <input type='hidden' name='date' value='<?=date("Y-m-d H:i:s")?>'>
        <textarea name='message' style="width:400px; height:80px; resize:none;"></textarea><br>
        <button name='commentSubmit' type='submit'>Comment</button>
    </form>
    
    
    
    <?php
     $allComents=Comments::getComments();
    foreach($allComents as $komentar){
        echo "<div style='border:1px solid gray; width:400px;'><p>";
        echo $komentar->uid . " ";
        echo $komentar->date;
        echo "<br>";
        echo $komentar->message;
        echo "<br>";
        echo "</p>
            <form method='POST' action='".Comments::deleteComments()."'>
                <input type='hidden' name='cid' value='{$komentar->cid}'>
                
                <button name='deleteSubmit' type='submit'>Delete</button>
            </form>
            <form method='POST' action='comment.php'>
                <input type='hidden' name='cid' value='{$komentar->cid}'>
                <input type='hidden' name='uid' value='{$komentar->uid}'>
                <input type='hidden' name='date' value='{$komentar->date}'>
                <input type='hidden' name='message' value='{$komentar->message}'>
                <button type='submit'>Edit</button>
            </form>
        </div>";
    }
}

  
   ?>
    
 




