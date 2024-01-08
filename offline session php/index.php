<?php
$color = 1;
?>
<html>
<table border-color="black" border="1px" cellspacing="0px">
    <?php
    for ($i = 0; $i <= 8; $i++) {
        ?>
        <tr>
            <?php
            for($j=0;$j<=8;$j++){
                if($color)
                echo "<td style='background-color:black; height: 20px; width:20px;'></td>";
                else echo "<td style='background-color:white; height: 20px;  width:20px;'></td>";
                $color^=1;
            }

            ?>
            
                
                
        </tr>
    <?php }?>
</table>
</html>