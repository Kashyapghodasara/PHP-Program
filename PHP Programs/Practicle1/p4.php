<?php
    $a = 120;
    $b = 23.56;
    $c = "Atmiya";
    $d = true;

    echo "<br>Datatype of A : ", gettype($a);
    echo "<br> Datatype of B : ", gettype($b);
    echo "<br> Datatype of C : ", gettype($c);
    echo "<br> Datatype of D : ", gettype($d);

    settype($a, "String");
    echo "<br>New Datatype of A : ", gettype($a);

?>