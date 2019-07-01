<?php
    $var1 = 1; //
    echo gettype($var1) . '<br>';
    $var1 = 'brad';
    echo gettype($var1) . '<br>';
    $var1 = 12.3;
    echo gettype($var1) . '<br>';

    $var1 = 10 ; $var2 = 3;
    $var3 = $var1/$var2;
    echo (int)($var3) .'<br>';
    $var5 = 012; //0開頭為首，成八進位
    echo "$var5" . '<br>';
    $var6 = 0x12;  //16進位
    echo "$var6";

?>