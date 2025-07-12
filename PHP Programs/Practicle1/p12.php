<?php 
    $c = 'orangee';
    switch($c)
    {
        case 'red':
            echo "<body bgColor= 'red'>";
            break;
        case 'blue':
            echo "<body bgColor= 'blue'>";
            break;
        case 'green':
            echo "<body bgColor= 'green'>";
            break;  
        default :
            echo "Unknown Color <body bgColor= 'orange'>";  
    }
?>