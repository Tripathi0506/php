<?php
    $cars = array(
        0 => "car0",
        1 => "car1",
        2 => "car2",
        3 => "car3",
        4 => "car4",
        5 => "car5",
    );
    // $x = 5;
    // if(is_array($cars)){
    //     echo "cars is an array";
    // }else{
    //     echo "cars is not an array";
    // }
    // echo array_search('cars7', $cars);




    // echo "<pre>";
    // $newCars = array_slice($cars,4);
    // print_r($newCars);
    // echo "</pre>";


    echo "<pre>";
    print_r($cars);
    echo "</pre>";

    echo "<pre>";
    print_r(array_count_values($cars));         // no. of values.....quantity of items
    echo "</pre>";

    echo "<pre>";
    print_r(array_keys($cars));
    echo "</pre>";

    var_dump(array_key_exists("2",$cars));

    array_push($cars, "Car7","Car8");


    echo "<pre>";
    print_r($cars);
    echo "</pre>";

    // merging of two arrays===========================================>

    $x = array(
        "car0",
        "car1",
        "car2",
        "car3",
        "car4",
        "car5",
        "car6",
        "car7",
    );
    $y = array(
        "car8",
        "car9",
        "car10",
        "car11",
        "car12",   
    );

    echo "<pre>";
    print_r($y);
    echo "</pre>";

    $z = array_merge($x,$y);

    echo "<pre>";
    print_r($z);
    echo "</pre>";

?> 