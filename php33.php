<?php
    $mysqli = new mysqli('localhost','root','','cy');
    $mysqli->set_charset('utf8');

    //sql語句
    $sql = 'INSERT INTO cust(cname,tel,birthday) VALUES ("Mary","333","2001-01-02")';

    
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('sss',$cname,$tel,$birthday);
    $stmt->execute();
    echo $stmt->affected_rows;
    echo $mysqli->error;

?>