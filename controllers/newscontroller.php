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

function view_limit_news($start,$end){
    $all_news_array = array();
    $news_object = new NewsClass();

    $all_news_records = $news_object->limit_all_news($start,$end);

    if($all_news_records) {
        while($record = $news_object->db_fetch()){
            $all_news_array[] = $record;
        }
    }

    return $all_news_array;
}


function view_cat_news($cat){
    $cat_news_array = array();

    $news_object = new NewsClass();

    $cat_news_records = $news_object->cat_news($cat);

    if($cat_news_records) {
        while($record = $news_object->db_fetch()){
            $cat_news_array[] = $record;
        }
    }

    return $cat_news_array;
}

function view_limit_cat_news($cat,$start,$end){
    $cat_news_array = array();

    $news_object = new NewsClass();

    $cat_news_records = $news_object->limit_cat_news($cat,$start,$end);

    if($cat_news_records) {
        while($record = $news_object->db_fetch()){
            $cat_news_array[] = $record;
        }
    }

    return $cat_news_array;
}

?>