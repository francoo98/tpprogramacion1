<?php
/**
 * Created by PhpStorm.
 * User: franc
 * Date: 06-Sep-18
 * Time: 12:01 PM
 */
if(empty($_GET)) {
    echo "No se enviaron datos";
}
else {
    echo "dato 1: ".$_GET["dato1"]."<br>";
    if(isset($_GET["dato2"])) {
        echo "dato 2: ".$_GET["dato2"]."<br>";
        echo "dato 3: ".$_GET["dato3"]."<br>";
    }
}