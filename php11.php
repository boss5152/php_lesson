<?php
    $p = array(1 => 0,0,0,0,0,0);

    for($i = 0; $i < 100; $i ++){
        $point = rand(1,6);
        $p[$point]++;
    }

    foreach($p as $key => $value){
        echo "{$key} 出現 {$value}次";
    }