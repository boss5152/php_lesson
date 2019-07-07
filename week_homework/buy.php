<?php
    session_start();
    
    $_SESSION['buycar'][$_POST['pname']] = $_POST['count'];

    echo $_SESSION['buycar'][$_POST['pname']];

?>

