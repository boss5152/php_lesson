<?php
    $score = rand(0,100);
    $commit = array(9 => "A",
                    8 => "B",
                    7 => "C",
                    6 => "D"); 
    $x = (int)($score / 10);

    echo "{$commit[$x]} ";


    if($score >= 60){
        echo "good {$score}";
    }else {
        echo "bad {$score}";
    }
?>
