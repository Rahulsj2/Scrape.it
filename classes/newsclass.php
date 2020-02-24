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

    public function tech_news($tech){
        $sql = "SELECT * FROM news WHERE category='$tech'";
        return $this->db_query($sql);
    }

    public function beauty_news($beauty){
        $sql = "SELECT * FROM news WHERE category='$beauty'";
        return $this->db_query($sql);
    }

    public function travel_news($travel){
        $sql = "SELECT * FROM news WHERE category='$travel'";
        return $this->db_query($sql);
    }

    public function food_news($food){
        $sql = "SELECT * FROM news WHERE category='$food'";
        return $this->db_query($sql);
    }






}


?>