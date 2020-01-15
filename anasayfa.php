<!DOCTYPE html>
<html lang="tr">
<head> 
    <?php
                if($_SESSION["girisbasarili"]<> 1)                
                die("lüffen giris yapınız...... ");
                ?>
    <style>
    body{
        background-color: burlywood;
    }
    button.buton1{
        background-color: blue; height:100px; widows: 100px; position:absolute;left: 20%; top: 50%;

    }
    button.buton2{
        background-color: blue; height: 100px; position:absolute;left: 60%; top: 50%;
    }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ANASAYFA</title>
</head>
<body>
               
    
    
    <button class="buton1"  onclick="window.location='./havuzlar.php';">HAVUZLAR LİSESİNE GİTMEK İÇİN TIKLA ---> </button>
    <button class="buton2"  onclick="window.location='./adisyon/restorant.php';">RESTORANT SAYFASINA GİTMEK İÇİN TIKLA ---> </button>
    
</body>
</html>