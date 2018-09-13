<?php
if(isset($_GET["formato"])) {
    echo "Hoy es el ".$_GET["dia"]." de ".$_GET["mes"]." de ".$_GET["año"];
}
else {
    echo "Hoy es ".$_GET["dia"]."/".numeroMes($_GET["mes"])."/".$_GET["año"];
}

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