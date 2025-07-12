<?php 
    $x = 20;
    $y = 20;
    function getValue() {
        $GLOBALS['x'] = $GLOBALS['x'] + 5;
        $GLOBALS['y'] = $GLOBALS['y'] + 5;
    }
    getValue();
    echo "X = $x <br> Y = $y";
?>