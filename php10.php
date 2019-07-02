<?php
    $one = 0;
    $two = 0;
    $three = 0;
    $four = 0;
    $five = 0;
    $six = 0;

    for($i = 0 ; $i < 100 ; $i++){
        switch((int)(rand(1,6))){
            case 1:
                $one ++;
            break;
            case 2:
                $two ++;
            break;
            case 3:
                $three ++;
            break;
            case 4:
                $four ++;
            break;
            case 5:
                $five ++;
            break;
            case 6:
                $six ++;
            break;
        }
    }
    echo "one : {$one} <br>
          two : {$two} <br>
          three : {$three} <br>
          four : {$four} <br>
          five : {$five} <br>
          six : {$six} <br>";