<?php
/**
 * Created by PhpStorm.
 * User: franc
 * Date: 06-Sep-18
 * Time: 11:39 AM
 */

?>

textbox1: <?php echo $_GET['texto1']; ?>
<br>
textbox2: <?php echo $_GET['texto2']; ?>
<br>
hidden: <?php echo $_GET['oculto']; ?>
<br>
password: <?php echo $_GET['clave']; ?>
<br>
<?php
    if(isset($_GET['check1'])) {
        echo "checkbox1:" .$_GET['check1']."<br>";
    }
    if(isset($_GET['check2'])) {
        echo "checkbox2:" .$_GET['check2']."<br>";
}
    if(isset($_GET['check3'])) {
        echo "checkbox3:" .$_GET['check3']."<br>";
}
?>
radio grupo1: <?php echo $_GET['radio1']; ?>
<br>
radio grupo2: <?php echo $_GET['radio2']; ?>
<br>
lista: <?php echo $_GET['lista']; ?>