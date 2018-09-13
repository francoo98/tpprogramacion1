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
                if($i < 10) {
                    echo "<option selected value='$i'>0$i</option>";
                }
                else {
                    echo "<option selected value='$i'>$i</option>";
                }
            }
            else {
                if($i < 10) {
                    echo "<option value='$i'>0$i</option>";
                }
                else {
                    echo "<option value='$i'>$i</option>";
                }
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
                    echo "<option value='$i'>".mes($i)."</option>";
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
                    echo "<option value='$i'>$i</option>";
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
                    if($i < 10) {
                        echo "<option selected value='$i'>0$i</option>";
                    }
                    else {
                        echo "<option selected value='$i'>$i</option>";
                    }
                }
                else {
                    if($i < 10) {
                        echo "<option value='$i'>0$i</option>";
                    }
                    else {
                        echo "<option value='$i'>$i</option>";
                    }
                }
            }
            ?>
        </select>
        <select>
            <?php
            for($i = 1; $i < 13; $i++) {
                if($i == numeroMes($_GET["mes"])) {
                    if($i < 10) {
                        echo "<option selected value='$i'>0$i</option>";
                    }
                    else {
                        echo "<option selected value='$i'>".$i."</option>";
                    }

                }
                else {
                    if($i < 10) {
                        echo "<option value='$i'>0$i</option>";
                    }
                    else {
                        echo "<option value='$i'>$i</option>";
                    }
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
                    echo "<option value='$i'>".substr($i,2,2)."</option>";
                }
            }
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