<?php
    if(!isset($_GET['account'])) die();

    include_once ''; //connect DB

    $account = $_GET['account'];
    $sql = "select * from member where account = '{$account}'";
    $mysqli = $mysqli->quert($sql);
    echo $result->num_rorws;
?>