<?php

class News extends MainClass{
    public $id;
    public $category;
    public $slika;
    public $text;
    
   public static $tableName="vesti";
    public static $keyName="id";
}