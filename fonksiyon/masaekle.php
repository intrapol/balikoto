<?php
if(isset($_GET["masa"])){
    $masa=$_GET["masa"];
    // masalar tablosuna masa ekleme
        $sqll = "INSERT INTO `masalar` (`ad`)
        VALUES ('$masa');";
        mysqli_query($db, $sqll);
        // veri tabanına masa tablosu ekleme
        $sqll ="CREATE TABLE `$masa` (
            `masaid` int NOT NULL,
            `urunid` int NOT NULL,
            `urunad` varchar(200) COLLATE 'utf8_turkish_ci' NOT NULL,
            `urunfiyat` float NOT NULL
          );";
          mysqli_query($db, $sqll);
        header("Location:masaeklesil.php");
    
    }
    ?>