<?php
if(isset($_GET["id"])){
    $sql = 'DELETE FROM `masalar`
    WHERE `id` = '.$_GET["id"].';';
    mysqli_query($db,$sql);
    $sql =" ";
    header("Location:masaeklesil.php");

}
?>