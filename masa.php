<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masa <?php echo $_GET["masano"]; ?></title>
    <script src="dosya/jqu.js"></script>
    <link rel="stylesheet" href="dosya/boost.css">
</head>
<body>
<div class="container-fluid " id="rows">
<div class="row table-dark">
<div class="col-md-3  border-right " id="rows">Toplam Sipariş :  <a class="text-warning">10</a></div> 
<div class="col-md-3  border-right"id="rows">Doluluk Oranı : <a class="text-warning">10</a></div> 
<div class="col-md-3  border-right"id="rows">Toplam Masa : <a class="text-warning"><?php include 'fonksiyon/masatoplam.php';  ?></a></div> 
<div class="col-md-3  border-right"id="rows">Tarih :  <a class="text-warning"><?php echo date('d.m.Y H:i:s'); ?></a></div> 
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 border-dark">
        <?php 
              include 'fonksiyon/masacek.php';
              ?> 
        </div>
            <div class="col-md-6 ">
              <div class="col-md-6">
              
              </div>
            
            </div>
    </div>
</div>
   
</body>
</html>