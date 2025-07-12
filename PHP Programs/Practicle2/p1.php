<?php 
    $a = array(10, 5.5, 5000, "Atmiya");
    $b[0] = "Rajkot";
    $b[5] = 66.55;
    $b[7] = 789;

    for($i = 0; $i < 4; $i++) {
        echo "a[$i] = $a[$i] <br>";
    }
    foreach($b as $x) {
        echo "$x <br>";
    }
    print_r($a);
?>