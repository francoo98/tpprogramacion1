<?php
function mes($numero){
    switch($numero) {
        case 1:
            return "enero";
        case 2:
            return "febrero";
        case 3:
            return "marzo";
        case 4:
            return "abril";
        case 5:
            return "mayo";
        case 6:
            return "junio";
        case 7:
            return "julio";
        case 8:
            return "agosto";
        case 9:
            return "septiembre";
        case 10:
            return "octubre";
        case 11:
            return "noviembre";
        case 12:
            return "diciembre";
    }
}
?>

<html>
<body>
<form action="ejercicio2b.php" method="get">
Dia:
<select name="dia">
    <?php
        for($i = 1; $i < 32; $i++) {
            if($i ==date("d")) {
                echo "<option selected value='$i'>$i</option>";
            }
            else {
                echo "<option value='$i'>$i</option>";
            }
        }
    ?>
</select>
Mes:
<select name="mes">
    <?php
    for($i = 1; $i < 13; $i++) {
        if($i == date("n")) {
            echo "<option selected value='".mes($i)."'>".mes($i)."</option>";
        }
        else {
            echo "<option value='".mes($i)."'>".mes($i)."</option>";
        }
    }
    ?>
</select>
Año:
<select name="año">
    <?php
    for($i = 1900; $i < 2101; $i++) {
        if($i == date("Y")) {
            echo "<option selected value='$i'>".date("Y")."</option>";
        }
        else {
            echo "<option value='$i'>$i</option>";
        }
    }
    ?>
</select>
    <input type="checkbox" name="formato" value="largo">
    <input type="submit">
</form>
</body>
</html>