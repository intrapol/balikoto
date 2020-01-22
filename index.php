<!DOCTYPE html>
<html lang="tr">
<head>
  <style>
  </style>
  <meta charset="UTF-8">
  <title>Giriş Sayfası</title>
<body>
<?php  
$_SESSION["girisbasarili"]=0;

if($_POST["kullaniciadi"]==""){}
else {
if($_POST["kullaniciadi"]=="root"){
  
  if($_POST["sifre"]== "123"){
    $_SESSION["girisbasarili"]=1;
    $_POST["deneme"]=1;
  echo '<a href="./anasayfa.php">GİRİŞ İÇİN TIKLAYINIZ ....</a>';
  
  
  }else{
    echo "<h1> ŞİFRE YANLIŞ </h1>";
  }
}else{
  echo "<h1>KULLANICI ADI YANLIŞ VEYA ŞİFRE YANLIŞ</h1>";
}}
?>
  <center><img src="./resimler/balikresmi.jpg" alt="balık" align="center">
  </center>
  <form  method="POST">
    <table align="center">

        <tr>
          <td>Kullanici Adi</td>
          <td>:</td>
          <td><input name="kullaniciadi" type="text" autocomplete="off" style="border-radius:10px;padding:6px" /></td>
        </tr>
        <tr>
          <td>Sifre</td>
          <td>:</td>
          <td><input name="sifre" type="password" autocomplete="off" style="border-radius:10px;padding:6px" /></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td><input type="submit" value="Giris" /></td>
        </tr>
      
    </table>
  </form>
</body>

</html>