<?php

//connect to database class
require("../settings/db_class.php");

class NewsClass extends db_connection{
    /**
     * method to view all news
     */

    public function all_news(){
        $sql = "SELECT * FROM news";
        return $this->db_query($sql);
    }

    public function limit_all_news($start,$end){
        $sql = "SELECT * FROM news LIMIT $start, $end";
        return $this->db_query($sql);
    }

    public function cat_news($cat){
        $sql = "SELECT * FROM news WHERE category='$cat'";
        return $this->db_query($sql);
    }

    public function limit_cat_news($cat,$start,$end){
        $sql = "SELECT * FROM news WHERE category='$cat' LIMIT $start, $end";
        return $this->db_query($sql);
    }

}


?>