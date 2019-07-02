<?php
    function inTWid($id) : bool{
        $ret = false;
        if(perg_match("/^[A-Z][1-2][0-9]{8}$/",$id)){
            $letters = 'ABCDEFGHIKLMNPQRSTUVXYWZIO';
            $c1 = substr($id,0,1);
            $n12 = strpos($letters,$c1) + 10;
            echo $n12;
            $ret = true;
        }

        return $ret;
    }