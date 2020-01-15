<!DOCTYPE html>
<html lang="tr">
<?php
    require("./giriskontrol.php");
                ?>
<head>
    <style>
        body {
            background-color: burlywood;
        }

        button {
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
<?php
                if($_SESSION["girisbasarili"]<> 1){}
                else {
                die("lüffen giris yapınız...... ");}
                ?>

<body>
    <div style="margin-left: 1%;">
        <button style="background-color: blue;" onclick="window.location='./restorant.php'">HAVUZ KENARI </button>
        <button onclick="window.location='./yenicardak.php'">YENİ ÇARDAK</button>
        <button onclick="window.location='./ickısım.php'">İÇ KISIM </button>
        <button onclick="window.location='./digerkisimlar.php'">DİĞER KISIMLAR</button>
    </div>
    <div align="center">
       <button class="masa">
            <h3>M-1</h3>
        </button>
       <button class="masa">
            <h3>M-2</h3>
        </button>
       <button class="masa">
            <h3>M-3</h3>
        </button>
       <button class="masa">
            <h3>M-4</h3>
        </button>
    </div>
    <div align="center">
       <button class="masa">
            <h3>M-5</h3>
        </button>
       <button class="masa">
            <h3>M-6</h3>
        </button>
       <button class="masa">
            <h3>M-7</h3>
        </button>
       <button class="masa">
            <h3>M-8</h3>
        </button>
    </div>
    <a href="../anasayfa.php">
        <p align="right">Geri dön--></p>
    </a>
</body>

</html>