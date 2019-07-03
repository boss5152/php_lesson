<?php
    $fp = @fopen('http://tw.stock');
    $i = 1;
    while($line = fgets($fp)){
        if(preg_match('/href',$line)){
            if(perg_match('/2317',$line)){
                
            }
        }
    }