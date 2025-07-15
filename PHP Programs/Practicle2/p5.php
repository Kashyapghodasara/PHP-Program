<?php 
    $a = array(1,2,3);
    $b = array('a' => 4, 'b' => 5);
    $c = $a + $b;
    foreach($c as $k => $x) {
        echo "c[$k] = $x  <br>";
    }
    $a = array('a' => 1, 'b' => 2, 'c' => 3);
    $b = array('b' => 2, 'a' => 1, 'c' => 3);
    if($a == $b) {
        echo "Equal <br>";
    } else {
        echo "Not Equal <br>";
    }
    if($a === $b) {
        echo "Identical";
    } else {
        echo "Not Identical";
    }
?>  