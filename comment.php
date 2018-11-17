
<?php
require_once "autoload.php";
$cid=$_POST['cid'];
$uid=$_POST['uid'];
$date=$_POST['date'];
$message=$_POST['message'];
?>
       
       <form method='POST' action='<?=Comments::editComments();?>'>
       <input type='hidden' name='cid' value='<?=$cid?>'>
        <input type='hidden' name='uid' value='<?=$uid?>'>
        <input type='hidden' name='date' value='<?=$date?>'>
        
        <textarea name='message' style="width:400px; height:80px; resize:none;"><?=$message?></textarea><br>
        <button name='commentEdit' type='submit'>Edit</button>
    </form>
    


