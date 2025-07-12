<?php 
  function getValue(){
      static $x = 0;
      $x+=5;
      echo "Value of X -> $x<br>";
  } 
  getValue();
  getValue();
  getValue();
?>