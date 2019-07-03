<?php
    $fp = @fopen('./dir1/txt1.txt','r+');
    fwrite($fp,"hello,world\n1234567\n1234567");
    fflush($fp);
    fclose($fp);