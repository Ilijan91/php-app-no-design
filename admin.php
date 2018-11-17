<?php


require_once "autoload.php";
echo "<br>";
echo "<a href='logout.php'>Logout</a><br>";
echo "<a href='news.php'>Idi na vesti</a>";

$allNews=News::show();
$vest= new News;

?>
<h2>Dodaj novu vest</h2>
 <form method='POST' action='<?=News::addNews();?>'>
       
       <input type="text" name="category" placeholder="Kategorija..."><br>
       <input type="text" name="slika" placeholder="URL slike..."><br>
        <textarea name='text' style="width:400px; height:80px; resize:none;" placeholder="tekst..."></textarea><br>
        <button name='addNews'type='submit'>Add</button>
</form>
  
    











<?php

foreach($allNews as $vest){
    ?>
   <a href='?id=<?=$vest->id?>'><?=$vest->category?></a> 
    <form method='POST' action='<?=News::deleteNews();?>'>
        <input type='hidden' name='id' value='<?=$vest->id?>'>
        <button name='deleteNews' type='submit'>Delete</button>
    </form>
  
    <?php
}

