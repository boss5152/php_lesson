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
            define("row",4);
            define("col",3);

            for($i = 1; $i <= row*col; $i++){
                $row = (int)(($i-1)/row); //0.1.2.3.4
                $col = $i % 2; //0.1.0.1.0.1 奇偶數行
                if(row %2 == 0){  //偶
                    if($row%2 == 0 ){  //奇數排
                        if($col == 0){
                            echo '<td bgcolor = "pink">';
                        }
                        else {
                            echo '<td>';
                        }
                    }else if($row% 2 == 1 ){ //偶數排
                        if($col == 1){
                            echo '<td bgcolor = "pink">';
                        }
                        else {
                            echo '<td>';
                        }
                    }
                }else{ //奇
                    if($row%2 == 0 ){  //奇數排
                        if($col == 0){
                            echo '<td bgcolor = "pink">';
                        }
                        else {
                            echo '<td>';
                        }
                    }else if($row% 2 == 1 ){ //偶數排
                        if($col == 0){
                            echo '<td bgcolor = "pink">';
                        }
                        else {
                            echo '<td>';
                        }
                    }
                }
                
                
                //乘法細項 1*1,1*2,1*3....
                for($n = 1;$n < 10; $n++){
                    echo "{$i} * {$n} = " . $i*$n . '<br>';
                }
                //換整個大行
                if($i%row == 0){
                    echo "</tr>";
                }
                
                echo "</td>";
            }
        ?>
        </tr>
</table>