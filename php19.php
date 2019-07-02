<?php
    $mydir = '.';
    $fp = @opendir($mydir) or die('sever busy');
    while($file = readdir($fp)){
        $ntime = filemtime("{$mydir}/{$file}");
        echo "{$file} : {$ntime}<br>";
    }
    // 
?>