<form action="php8.php">
<input name="n">
<input type="submit" value="=">

<?php
    $n = $_GET['n'];
    $sum = 0;
    $i = 0;
    while($i<$n){
        $i ++;
        $sum += $i;
    }
    echo "$sum";
?>