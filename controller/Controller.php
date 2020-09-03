<?php

class Controller{
    public static function StartSite(){
        $arr= News::getLast10News();
        include_once 'view/start.php';
    }
    
    public static function AllCategory(){
        $arr=Category::getAllCategory();
        include_once 'view/category.php';
    }
    
    public static function AllNews(){
        $arr= News::getAllNews();
        include_once 'view/allnews.php';
    }
    
    public static function NewsByCatID($id){
        $arr=News::getNewsByCategoryID($id);
        include_once 'view/catnews.php';
    }    
}

