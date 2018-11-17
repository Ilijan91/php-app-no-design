<?php

session_start();
session_destroy();


setcookie("PHPSESSID","",time(),"/");
header("Location:index.php");