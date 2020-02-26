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

    // public function beauty_news($beauty){
    //     $sql = "SELECT * FROM news WHERE category='$beauty'";
    //     return $this->db_query($sql);
    // }

    // public function limit_beauty_news($beauty,$start,$end){
    //     $sql = "SELECT * FROM news WHERE category='$beauty' LIMIT $start, $end";
    //     return $this->db_query($sql);
    // }

    // public function travel_news($travel){
    //     $sql = "SELECT * FROM news WHERE category='$travel'";
    //     return $this->db_query($sql);
    // }

    // public function limit_travel_news($travel,$start,$end){
    //     $sql = "SELECT * FROM news WHERE category='$travel' LIMIT $start, $end";
    //     return $this->db_query($sql);
    // }

    // public function food_news($food){
    //     $sql = "SELECT * FROM news WHERE category='$food'";
    //     return $this->db_query($sql);
    // }

    // public function limit_food_news($food,$start,$end){
    //     $sql = "SELECT * FROM news WHERE category='$food' LIMIT $start, $end";
    //     return $this->db_query($sql);
    // }
    // public function search_news($id){
    //     $sql = "SELECT * FROM news WHERE ";
    // }





}


?>