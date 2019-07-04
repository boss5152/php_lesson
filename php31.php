<?php
    include_once 'php32.php';
    session_start();

    $var1 = new students(90,91,92);
    $sum = $var1->sum();
    $avg = $avg->avg();
    echo "sum {"
?>