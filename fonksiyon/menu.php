<html>
<?php include 'kaynak.php' ?> 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.sidenav {
  height: 100%;
  width: 0; /*Genişliği javascriptle değiştir*/
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden; /*Yatay kaydırmayı devre dışı bırak */
  transition: 0.5s;/* Sidenav'da kaymaya 0,5 saniye geçiş efekti */
  padding-top: 60px; /*İçeriği üstten 60 piksel yerleştirin */
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}
/*Menüler üzerine gelince  renklerini değiştirin */

.sidenav a:hover {
  color: #f1f1f1; 
}
/*Kapat düğmesini konumlandırın ve stillendirin (sağ üst köşe) */

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
/* Yüksekliğin 450 pikselden az olduğu daha küçük ekranlarda, 
sidenav stilini değiştirin 
(daha az dolgu ve daha küçük bir yazı tipi boyutu) */

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="YanMenu" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">

  &times;</a>

  <a href="masalar.php">Masalar</a>
  <a href="masaeklesil.php">Masa sil/ekle</a>
  <a href="#">HTML</a>
  </div>


<span style="font-size:30px;cursor:pointer"  onclick="openNav()">
&#9776; Menu
</span>

<!-- javascript ile menuyu açma kapatma -->

<script>
function openNav() {
  document.getElementById("YanMenu").style.width = "250px";
}

function closeNav() {
  document.getElementById("YanMenu").style.width = "0";
}
</script>
   
</body>
</html> 
	