<?php 
    $a = array('first'=>array("name"=>"Raj", "contact" => 123456, "city"=>"Rajkot"),
               "second" => array("collage"=>"ABC", "rollno"=>45, "branch" => "DCE"),
                "third" => array("Game" => "Cricket", "tools" => "bat", "players" => 11)
            );
    foreach($a as $k => $x) {
        echo $k;
        foreach($x as $k1 => $y){
            echo "[$k1] =  $y "; 
        }
        echo "<br>";
    }
    print_r($a);    
?>