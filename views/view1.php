<?php
    $data = $_GET['data'];
    foreach($data as $key => $value){
        $$key = $value;
    }
?>

<h1><?php echo $title; ?><h1>
<hr>
<?php echo $who; ?>
<hr>
Brad....