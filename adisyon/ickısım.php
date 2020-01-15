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
   
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADİSYON</title>
</head>
<body>
    <div style="margin-left: 1%;" >
        <button onclick="window.location='./restorant.html'">HAVUZ KENARI </button>
        <button  onclick="window.location='./yenicardak.html'">YENİ ÇARDAK</button>
        <button style="background-color: blue;" onclick="window.location='./ickısım.html'">İÇ KISIM </button>
        <button  onclick="window.location='./digerkisimlar.html'">DİĞER KISIMLAR</button>
    </div>
    
    <a href="../anasayfa.html" > <p align="right">Geri dön--></p></a>
</body>
</html>