<?php   
    $c = array(1,2,3,4);
    $a = array(5, 6);
    echo "Count of Array : ". count($c)."<br>";

    array_push($c, "a", "b");
    print_r($c);
    echo "<br>";

    array_pop($c);
    print_r($c);    
    echo "<br>";

    $b = array_merge($c, $a);
    print_r($b);
    echo "<br>";

    asort($b);
    print_r($b);
?>