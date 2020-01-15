<!DOCTYPE html>
<html lang="tr">
<head>
<?php
    require("./giriskontrol.php");
                ?>
    <style>
        body {
      background-color: burlywood;
    }
    button{
        width: 24.5%;
        height: 35px;
    }
    button.masa{
            height: 300px;
            
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADİSYON</title>
</head>
<body>
    <div style="margin-left: 1%;" >
        <button onclick="window.location='./restorant.php'">HAVUZ KENARI </button>
        <button  onclick="window.location='./yenicardak.php'">YENİ ÇARDAK</button>
        <button  onclick="window.location='./ickısım.php'">İÇ KISIM </button>
        <button style="background-color: blue;" onclick="window.location='./digerkisimlar.php'">DİĞER KISIMLAR</button>
    </div>
     <div><button class="masa ">AT ARABASI</button>
     <button class="masa ">DEMİR ÇARDAK</button> 
    <button class="masa ">KARE ÇARDAK</button>
     <button class="masa" onclick="window.location='./lokantaonu.php'">LOKANTA ÖNÜ</button></div>
    <a href="../anasayfa.php" > <p align="right">Geri dön--></p></a>
</body>
</html>