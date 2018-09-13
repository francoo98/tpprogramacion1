<?php
$usuarios = array(
    array("usuario" => "franco",
        "clave" => "asd",
        "email" => "123@321.com"),
    array("usuario" => "coso",
        "clave" => "qwe",
        "email" => "123@321.com")
);

for($i = 0; $i < count($usuarios); $i++) {
    if($usuarios[$i]["usuario"] == $_POST["usuario"] and $usuarios[$i]["clave"] == $_POST["password"]) {
        echo "Usuario encontrado<br>";
        echo "Usuario: ".$usuarios[$i]["usuario"]."<br>";
        echo "Email: ".$usuarios[$i]["email"];
        break;
    }
}