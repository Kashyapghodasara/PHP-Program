<?php 
 $a = array("name"=>"Atmiya", "city"=>"Rajkot", "state"=>"Gujarat");
 $b["mark"] = 92;
 $b["result"] = "Pass";
 $b["Grade"] = "A+";
 $c = array(20, "Gun"=>"AWM", 55.33);

 foreach($a as $x) {
     echo "Value = $x<br>";
 }
 foreach($b as $m => $x){
     echo "Key b[$m] = $x<br>";
 }
 print_r($c);
?>