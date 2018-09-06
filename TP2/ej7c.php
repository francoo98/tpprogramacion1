<table>
<?php
$cantidad =  count($_GET)/2;
for($i = 0; $i < $cantidad; $i++) {
    echo "<tr>";
    for($e = 0; $e < $cantidad; $e++) {
        $posicion = $e + $cantidad*$i;
        if(isset($_GET["numero".$posicion]))
        echo "<td>".$_GET["numero".$posicion]."</td>";
    }
    echo "</tr>";
}
?>
</table>