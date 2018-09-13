<?php
if(isset($_GET["formato"])) {
    echo "Hoy es el ".$_GET["dia"]." de ".$_GET["mes"]." de ".$_GET["año"];
}
else {
    echo "Hoy es ".$_GET["dia"]."/".numeroMes($_GET["mes"])."/".substr($_GET["año"],2,2);
}
?>
<br>
    <?php
    if(isset($_GET["formato"])) {
        ?>
        <select>
            <?php
            for($i = 1; $i < 32; $i++) {
            if($i == $_GET["dia"]) {
                echo "<option selected value='$i'>$i</option>";
            }
            else {
                echo "<option value='$i'>$i</option>";
            }
            }
            ?>
        </select>
        <select>
            <?php
            for($i = 1; $i < 13; $i++) {
                if($i == numeroMes($_GET["mes"])) {
                    echo "<option selected value='$i'>".$_GET["mes"]."</option>";
                }
                else {
                    echo "<option value='$i'>".$_GET["mes"]."</option>";
                }
            }
            ?>
        </select>
        <select>
            <?php
            for($i = 1900; $i < 2101; $i++) {
                if($i == $_GET["año"]) {
                    echo "<option selected value='$i'>".$_GET["año"]."</option>";
                }
                else {
                    echo "<option value='$i'>".$_GET["año"]."</option>";
                }
            }
            ?>
        </select>
        <?php
    }
    else {
        ?>
        <select>
            <?php
            for($i = 1; $i < 32; $i++) {
                if($i == $_GET["dia"]) {
                    echo "<option selected value='$i'>$i</option>";
                }
                else {
                    echo "<option value='$i'>$i</option>";
                }
            }
            ?>
        </select>
        <select>
            <?php
            for($i = 1; $i < 13; $i++) {
                if($i == numeroMes($_GET["mes"])) {
                    echo "<option selected value='$i'>".$i."</option>";
                }
                else {
                    echo "<option value='$i'>".$_GET["mes"]."</option>";
                }
            }
            ?>
        </select>
        <select>
            <?php
            for($i = 1900; $i < 2101; $i++) {
                if($i == $_GET["año"]) {
                    echo "<option selected value='$i'>".substr($_GET["año"],2,2)."</option>";
                }
                else {
                    echo "<option value='$i'>".substr($_GET["año"],2,2)."</option>";
                }
            }
            //substr($_GET["anio"],2,2)
            ?>
        </select>
        <?php
    }

    ?>
<?php
function numeroMes($mes) {
    switch ($mes) {
        case "enero":
            return 1;
        case "febrero":
            return 2;
        case "marzo":
            return 3;
        case "abril":
            return 4;
        case "mayo":
            return 5;
        case "junio":
            return 6;
        case "julio":
            return 7;
        case "agosto":
            return 8;
        case "septiembre":
            return 9;
        case "octubre":
            return 10;
        case "noviembre":
            return 11;
        case "diciembre":
            return 12;
    }
}