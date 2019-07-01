<style>
    table{
        border : 1px solid;
        color : black;
        width : 100%;
    }
    td{
        border : 1px solid;
        color : black;
    }
</style>
<table>
        <tr>
        <?php
            define("row",3);

            for($i = 1;$i < 10;$i++){
                if($i % 2 == 0){
                    echo '<td bgcolor = "pink">';
                }else{
                    echo '<td>';
                }
                for($n = 1;$n < 10;$n++){
                    echo "{$i} * {$n} = " . $i*$n . '<br>';
                }
                //換行用
                if($i%row == 0){
                    echo "</tr>";
                }
                //換底色
                
                echo "</td>";
            }
        ?>
        </tr>
</table>