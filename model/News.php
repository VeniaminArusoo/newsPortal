<?php
class News{
    
    public static function getLast10News(){
        $query= "SELECT * FROM news ORDER BY id DEC LIMIT 3" ;
        $db= new Database();
        $arr= $db->getAll($query);
        return $arr;
    }
    public static function getAllNews(){
        $query="SELECT * FROM news ORDER BY id DESC" ;
        $db= new Database();
        $arr= $d->getAll($query);
        return $arr;
    }
    public static function gteNewsByCategoryID($id) {
            $query= "SELECT * FROM news here where category_id=".(string)$id."ORDER BY id DESC";
            $db- new Database();
            $n= $db->getOne($query);
            return $n;
    }
    
    public static function getNessByID($id) {
      $query= "SELECT * FROM news where id=".(string)$id;
      $db=new Database();
      $n=$db->getOne($query);
      return $n;
    }    
}
?>
