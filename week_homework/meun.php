<?php
    include_once 'sql.php';

    // select * from product
    $sql = 'select * from product';
    $result = $mysqli->query($sql);

    if(isset($_REQUEST['count'])){
        session_start();
            

            $_SESSION['buycar'][$_POST['drink']] = $_POST['count'];

            if(isset($_SESSION['buycar']['coffee'])){
                echo "您以購買coffee " . $_SESSION['buycar']['coffee'] . " 杯，";
            }
            if(isset($_SESSION['buycar']['milk'])){
                echo "您以購買milk " . $_SESSION['buycar']['milk'] . " 杯，";
            }
            if(isset($_SESSION['buycar']['apple juice'])){
                echo "您以購買apple juice " . $_SESSION['buycar']['apple juice'] . " 杯，";
            }
            if(isset($_SESSION['buycar']['black tea'])){
                echo "您以購買black tea " . $_SESSION['buycar']['black tea'] . " 杯，";
            }
            if(isset($_SESSION['buycar']['green tea'])){
                echo "您以購買green tea " . $_SESSION['buycar']['green tea'] . " 杯，";
            }
            if(isset($_SESSION['buycar']['milk tea'])){
                echo "您以購買milk tea " . $_SESSION['buycar']['milk tea'] . " 杯，";
            }


        
    }

    
?>

<script>
    function confirmDelete(pname){
        return confirm('Delete ' + pname + "?");
    }
</script>
<hr />
<table border="1" width="100%">
    <tr>
        <th>id</th>
        <th>pname</th>
        <th>price</th>
    </tr>
    <?php
        while ($product = $result->fetch_object()){
            echo '<tr>';
            echo "<td>{$product->id}</td>";
            echo "<td>{$product->pname}</td>";
            echo "<td>{$product->price}</td>";
            echo '</tr>';
        }
    ?>

</table>
        <hr>
    <form action="meun.php" method="post"> 
            <input type="text" name="count">
            <select name="drink">
                <option value="coffee">coffee</option>
                <option value="milk">milk</option>
                <option value="apple juice">apple juice</option>
                <option value="black tea">black tea</option>
                <option value="green tea">green tea</option>
                <option value="milk tea">milk tea</option>
            </select>
            <input type="submit" name="" value="Buy">
        </form>