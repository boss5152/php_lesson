<?php
    if(isset($_GET['x'])){
        $x = $_GET['x'];
        $y = $_GET['y'];
        switch ($_GET['cal']){
            case '1':
                $result = ($x + $y);
            break;
            case '2':
                $result = ($x - $y);
            break;
            case '3':
                $result = ($x * $y);
            break;
            case '4':
                $result = ($x / $y);
            break;
        }       
    }
?>
<form action="php5.php">
<input name="x">
<select name="cal">
    <option value="1">+</option>
    <option value="2" selected>-</option>
    <option value="3">*</option>
    <option value="4">/</option>
</select>
<input name="y">
<input type = "submit" value="=">
<?php
    if(isset($result)){
        echo "$result";
    }
?>