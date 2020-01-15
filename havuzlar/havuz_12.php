<!DOCTYPE html>
<html lang="tr">
<?php
                require("./giriskontrol.php");
                ?>
<head>
  <meta charset="UTF-8">
  <style>
    body {
      background-color: burlywood;
    }
    table{
      width: 100%;
      
    }
  </style>

  <title>HAVUZ-1</title>
</head>

<body>
  <h1>
    <div><a href="../havuzlar.php">GERİ DÖN --></a></div>
    <center>
      <form action="" method="POST" >
      <div> Balık kg Ekle:
        <input type="text" />
        <div> Balık yaşını gir:
          <input type="text">
        </div>
        <div>Balık Boyutu:
          <input type="text">
        </div>
        <div>Havuza atılması gereken yem miktarı:
          <input type="text"></div>

        <div>Balıkların Ay Sonunda ki Gram Ağırlıkları:
          <input type="text"></div>
        <div>Balık yemi boyutu:
          <select name="boyut">
            <option value="birmm">1-mm</option>
            <option value="ikimm">2-mm</option>
            <option value="dortmm">4-mm</option>
            <option value="yedimm">5-mm</option> 
            <option value="alti">6-mm</option>
          </select>
        </div>
        <div>
         <input type="submit">
        </div>
      </form>
  </h1>

  <table border="10">
    <tr>
      <td>HAVUZ İÇİNDE Kİ TOPLAM BALIK KG:</td>
      <td>HAVUZ İÇİNDE Kİ BALIK YAŞI:</td>
      <td>HAVUZ İÇİNDE Kİ BALIKLAIRN BOYUTLARI:</td>
    </tr>
    <tr>
      <td>HAVUZA ATILAMSI GEREKEN YEM MİKTARI:</td>
      <td>BALIKLARIN BÜYÜME ORANLARI:</td>
      <td>ATIALCAK YEM BOYUTU:</td>

    </tr>
  </table>

  </center>

</body>

<script>

</script>
</html>