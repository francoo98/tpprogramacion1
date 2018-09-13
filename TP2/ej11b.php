<?php
if($_GET["valorPorDefecto"] > $_GET["cantidadDeOpciones"]) {
    echo "Valores mal ingresados";
}
else {
    ?>
<select>
<?php
        for($i = 1; $i <= $_GET["cantidadDeOpciones"]; $i++) {
            if($i == $_GET["valorPorDefecto"]) {
                echo "<option value='$i' selected>Opción a seleccionar Nro. $i</option>";
            }
            else {
                echo "<option value='$i'>Opción a seleccionar Nro. $i</option>";
            }
        }
    }
?>
</select>
