<?php 
    $a = array(array(10, 11, 12), array(13,14,15), array(16,17,18));
    
    for($i = 0; $i<3; $i++){
        for($j = 0; $j<3; $j++) {
            echo "  a[$i][$j] = ". $a[$i][$j];
        }
        echo "<br>";
    }
    print_r($a);
?>