<?php
if(isset($_GET["formato"])) {
    echo "Hoy es el ".$_GET["dia"]." de ".$_GET["mes"]." de ".$_GET["año"];
}
else {
    echo "Hoy es ".$_GET["dia"]."/".$_GET["mes"]."/".$_GET["año"];
}