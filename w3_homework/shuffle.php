<?php
    $poker = [];
    for($i = 1 ;$i <= 52; $i++ ){ 
        $poker[$i]=$i; 
    }
    for($i = 1; $i <= 52; $i++){
        $rand = rand(1,52);
        $tmp = $poker[53-$i];
        $poker[53-$i] = $poker[$rand];
        $poker[$rand]= $tmp;
    }

    var_dump(($poker));

?>