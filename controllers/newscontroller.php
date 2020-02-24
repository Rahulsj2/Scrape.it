<?php
//connect to the news class
require("../classes/newsclass.php");


function view_all_news(){
    $all_news_array = array();

    $news_object = new NewsClass();

    $all_news_records = $news_object->all_news();

    if($all_news_records) {
        while($record = $news_object->db_fetch()){
            $all_news_array[] = $record;
        }
    }

    return $all_news_array;
}


function view_tech_news($cat){
    $tech_news_array = array();

    $news_object = new NewsClass();

    $tech_news_records = $news_object->tech_news($cat);

    if($tech_news_records) {
        while($record = $news_object->db_fetch()){
            $tech_news_array[] = $record;
        }
    }

    return $tech_news_array;
}


function view_beauty_news($cat){
    $beauty_news_array = array();

    $news_object = new NewsClass();

    $beauty_news_records = $news_object->tech_news($cat);

    if($beauty_news_records) {
        while($record = $news_object->db_fetch()){
            $beauty_news_array[] = $record;
        }
    }

    return $beauty_news_array;
}

function view_travel_news($cat){
    $travel_news_array = array();

    $news_object = new NewsClass();

    $travel_news_records = $news_object->tech_news($cat);

    if($travel_news_records) {
        while($record = $news_object->db_fetch()){
            $travel_news_array[] = $record;
        }
    }

    return $travel_news_array;
}

function view_food_news($cat){
    $food_news_array = array();

    $news_object = new NewsClass();

    $food_news_records = $news_object->tech_news($cat);

    if($food_news_records) {
        while($record = $news_object->db_fetch()){
            $food_news_array[] = $record;
        }
    }

    return $food_news_array;
}





?>