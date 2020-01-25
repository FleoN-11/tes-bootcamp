<?php 

    $biodata = [
        "name" => "Fajar Al Hami",
        "age" => 19,
        "address" => "Jalan pahlawan IV Lemah Mekar Indramayu",
        "hobbies" => ["reading book","gaming"],
        "is_married" => FALSE,
        "list_school" => [
            "highschool" => "SMK N 1 Indramayu", "year_in" => "2015", "year_out" => "2018",
            "major" => null
        ],
        "skills" => ["skill_name" => "web programming", "level" => "beginner"],
        "interest_in_coding" => TRUE
    ];
    
    $data = json_encode($biodata);
    echo $data;
?>

<!-- README saya menggunakan bahasa php -->
<!-- lalu mereturn value nya menggunakan json yg saat di buka menggunakan google chrome saya menggunakan exstension yang bernama "jsonview" -->