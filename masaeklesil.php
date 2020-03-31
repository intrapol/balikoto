<!DOCTYPE html>
<html lang="tr">
<head>
<script>
#masa { 
    height:80px;
    margin:2px;
    font-size:35px;
    border-radius:15px;
  
}
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    include 'fonksiyon/kaynak.php';
    ?>
    <title>MASA EKLE/SİL SAYFASI </title>
</head>
<body>
<?php 
include 'fonksiyon/ust.php'
?>
<?php 
require 'fonksiyon/fonksiyon.php';
$sql="SELECT * FROM masalar";
$sorgu=mysqli_query($db,$sql);
    while ( $sonuc=mysqli_fetch_assoc($sorgu))   :
        // veri tabanından masaları çekme
        echo '<center>
        <a class="btn btn-primary btn-lg active" role="button" aria-pressed="true">'.$sonuc["ad"].'</a>

        <a href="masaeklesil.php?id='.$sonuc["id"].'" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">SİL</a>
        </center>
        <br>';

    endwhile;
    include 'fonksiyon/masasil.php';
  include 'fonksiyon/masaekle.php';
?>
<div class="col-md-3 mx-auto">
    <form  method="get">
      <input type="text" id="" class="form-control" name="masa" placeholder="Masa Adı" autocomplete="off">
     <div class="checkbox mb-3">
  </div>
  <button class="btn btn-lg btn-success btn-block" type="submit">EKLE</button>
  </form>
  </div>


</body>
</html>