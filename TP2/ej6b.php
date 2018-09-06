<?php
/**
 * Created by PhpStorm.
 * User: franc
 * Date: 06-Sep-18
 * Time: 12:14 PM
 */
?>
<table style="border: black; border-style: solid">

<?php
$var = 0;
for($i = 0; $i < $_GET["columnas"]; $i++) {
    echo "<tr>";
    for($e = 0; $e < $_GET["columnas"]; $e++) {
        $var = $e+3*$i;
        echo "<td> $var </td>";
    }
    echo "</tr>";
}
?>
</table>