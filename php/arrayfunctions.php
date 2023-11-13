<?php
    echo "<h2>Index</h2>";

    $numbers = [8,1,76,23,0,12];
    echo "<h4>Original array</h4>";
    foreach($numbers as $num){
        echo $num.",";
    }
    sort($numbers);
    echo "<h4>Sorted array</h4>";
    foreach($numbers as $num){
        echo $num.",";
    }
    rsort($numbers);
    echo "<h4>Reverse sorted array</h4>";
    foreach($numbers as $num){
        echo $num.",";
    }
    echo "<h2>Associative</h2>";

    $students = array(2 => "Taha", 1 => "Sami", 9 => "Ahmed");
    asort($students);
    echo "<h4>Associative sorted array</h4>";
    foreach($students as $stu){
        echo $stu.",";
    }
    arsort($students);
    echo "<h4>Associative reverse sorted array</h4>";
    foreach($students as $stu){
        echo $stu.",";
    }

    ksort($students);
    echo "<h4>Associative sorted array by key</h4>";
    foreach($students as $stu){
        echo $stu.",";
    }
    krsort($students);
    echo "<h4>Associative reverse sorted array by key</h4>";
    foreach($students as $k => $stu){
        echo $k . "=>".$stu.",";
    }
    echo "<br>";
    echo  in_array(14, $numbers) ? "yes" : "no";
    echo "<br>";
    echo is_array($numbers);
    echo "<br>";

    array_push($numbers, 10,0);
    foreach($numbers as $num){
        echo $num.",";
    }


    echo "<br>";
    echo count($numbers);
    echo "<br>";
    print_r($numbers);
?>