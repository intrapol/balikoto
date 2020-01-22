<!DOCTYPE html>
<html lang="tr">
<?php
                require("./giriskontrol.php");
                require("../db.php");
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
  <?php
  $SQL = "SELECT id FROM havuz7 WHERE id desc";
  $rows= mysqli_query($db , $SQL);
  $row = mysqli_fetch_assoc($rows);
  $SQL ="SELECT * FROM havuz7 WHERE id =$row";
  

$SQL   = "SELECT kg, yas, boyut, yem_miktari, aysonu_agirlik, yemboyutu FROM kavuz1 WHERE id= $SQL ";
  $rows  = mysqli_query($db, $SQL);

  while($row = mysqli_fetch_assoc($rows)) { // Kayıt adedince döner
       
       $kg= $row["kg"];
       $yas= $row["yas"] ;
       $boyut=$row["boyut"];
       $yemmiktari=$row["yem_miktari"];
       $aysonu_agirlik=$row["aysonu_agirlik"];
       $yemboyutu=$row["yemboyutu"];
  }
  $kg=$_POST["kg"];
  $yas=$_POST["yas"];
  $boyut=$_POST["boyut"];
  $yemmiktari=$_POST["yemmiktari"];
  $aysonu_agrilik=$_POST["aysonu_agrilik"];
  $yemboyutu=$_POST["yemboyutu"];
  ?>
   

  <title>HAVUZ-1</title>
</head>

<body>
  <h1>
    <div><a href="../havuzlar.php">GERİ DÖN --></a></div>
    <center>
      <form action="" method="POST" >
      <div> Balık kg Ekle:
        <input type="text" name="kg" value="<?php echo $kg ?>" />
        <div> Balık yaşını gir:
          <input type="text" name="yas" value="<?php echo $yas ?>">
        </div>
        <div>Balık Boyutu:
          <input type="text" name="boyut" value="<?php echo $boyut ?>">
        </div>
        <div>Havuza atılması gereken yem miktarı:
          <input type="text" name="yemmiktari" value="<?php echo $yemmiktari ?>"></div>

        <div>Balıkların Ay Sonunda ki Gram Ağırlıkları:
          <input type="text" name="aysonu_agrilik" value="<?php echo $aysonu_agrilik ?>"></div>
        <div>Balık yemi boyutu:
          <select name="yemboyutu" value="<?php echo $yemboyutu ?>">
            <option value="birmm" >1-mm</option>
            <option value="ikimm">2-mm</option>
            <option value="dortmm">4-mm</option>
            <option value="yedimm">5-mm</option> 
            <option value="altimm">6-mm</option>
          </select>
        </div>
        <div>
         <input type="submit">
        </div>
      </form>
  </h1>

  <?php 
  
  $kg=$_POST["kg"];
  $yas=$_POST["yas"];
  $boyut=$_POST["boyut"];
  $yemmiktari=$_POST["yemmiktari"];
  $aysonu_agrilik=$_POST["aysonu_agrilik"];
  $yemboyutu=$_POST["yemboyutu"];
  
  $SQL = sprintf("INSERT INTO havuz7  SET
  kg = '%s',
  yas = '%s',
  boyut = '%s',
  yem_miktari = '%s',
  aysonu_agirlik = '%s',
  yemboyutu = '%s'",
  $kg,
  $yas,
  $boyut,
  $yemmiktari,
  $aysonu_agrilik,
  $yemboyutu);
  $rows = mysqli_query($db, $SQL);
  ?>
  <table border="10">
    <tr>
      <td>HAVUZ İÇİNDE Kİ TOPLAM BALIK KG:  <?php echo $kg ?></td>
      <td>HAVUZ İÇİNDE Kİ BALIK YAŞI:  <?php echo $yas ?></td>
      <td>HAVUZ İÇİNDE Kİ BALIKLAIRN BOYUTLARI:<?php echo $boyut ?></td>
    </tr>
    <tr>
      <td>HAVUZA ATILAMSI GEREKEN YEM MİKTARI:  <?php echo $yemmiktari ?></td>
      <td>BALIKLARIN BÜYÜME ORANLARI:  <?php echo $aysonu_agrilik ?></td>
      <td>ATIALCAK YEM BOYUTU:  <?php echo $yemboyutu ?></td>

    </tr>
  </table>

  </center>

</body>

<script>

</script>
</html>