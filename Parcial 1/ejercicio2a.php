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
            echo "<option selected value='$i'>".date("F")."</option>";
        }
        else {
            echo "<option value='$i'>$i</option>"; //falta terminar
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