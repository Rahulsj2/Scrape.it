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


// function view_beauty_news($cat){
//     $beauty_news_array = array();

//     $news_object = new NewsClass();

//     $beauty_news_records = $news_object->beauty_news($cat);

//     if($beauty_news_records) {
//         while($record = $news_object->db_fetch()){
//             $beauty_news_array[] = $record;
//         }
//     }

//     return $beauty_news_array;
// }

// function view_limit_beauty_news($cat,$start,$end){
//     $beauty_news_array = array();

//     $news_object = new NewsClass();

//     $beauty_news_records = $news_object->limit_beauty_news($cat,$start,$end);

//     if($beauty_news_records) {
//         while($record = $news_object->db_fetch()){
//             $beauty_news_array[] = $record;
//         }
//     }

//     return $beauty_news_array;
// }

// function view_travel_news($cat){
//     $travel_news_array = array();

//     $news_object = new NewsClass();

//     $travel_news_records = $news_object->tech_news($cat);

//     if($travel_news_records) {
//         while($record = $news_object->db_fetch()){
//             $travel_news_array[] = $record;
//         }
//     }

//     return $travel_news_array;
// }


// function view_limit_travel_news($cat,$start,$end){
//     $travel_news_array = array();

//     $news_object = new NewsClass();

//     $travel_news_records = $news_object->limit_travel_news($cat,$start,$end);

//     if($travel_news_records) {
//         while($record = $news_object->db_fetch()){
//             $travel_news_array[] = $record;
//         }
//     }

//     return $travel_news_array;
// }

// function view_food_news($cat){
//     $food_news_array = array();

//     $news_object = new NewsClass();

//     $food_news_records = $news_object->tech_news($cat);

//     if($food_news_records) {
//         while($record = $news_object->db_fetch()){
//             $food_news_array[] = $record;
//         }
//     }

//     return $food_news_array;
// }

// function view_limit_food_news($cat,$start,$end){
//     $food_news_array = array();

//     $news_object = new NewsClass();

//     $food_news_records = $news_object->limit_food_news($cat,$start,$end);

//     if($food_news_records) {
//         while($record = $news_object->db_fetch()){
//             $food_news_array[] = $record;
//         }
//     }

//     return $food_news_array;
// }
// function search_news($sterm){
//     $search
// }




?>