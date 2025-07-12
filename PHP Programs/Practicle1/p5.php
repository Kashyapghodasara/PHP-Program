<?php
    $x = 10;
    $y = 10;
    function getValue() {
        global $x, $y;
        $x = $x + 5;
        $y = $y + 5;
    }
    getValue();
    echo "<br>X = $x<br>Y = $y";
?>