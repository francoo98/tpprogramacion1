<form action="ej7c.php" method="get">
<?php
for($i = 0; $i < $_GET["numero"]; $i++) {
    echo "<input type='number' name='numero".$i."'></input>";
    echo "<br>";
}
?>
<input type="submit">
</form>