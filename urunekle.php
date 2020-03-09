<!DOCTYPE html>
<html lang="en">
<head>
<script src="dosya/jqu.js"></script>
<link rel="stylesheet" href="dosya/boost.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ÜRÜN EKLEME</title>
</head>
<body>
<div class="container-fluid " id="rows">
<div class="row table-dark">
<div class="col-md-3  border-right " id="rows">Toplam Sipariş :  <a class="text-warning">10</a></div> 
<div class="col-md-3  border-right"id="rows">Doluluk Oranı : <a class="text-warning">10</a></div> 
<div class="col-md-3  border-right"id="rows">Toplam Masa : <a class="text-warning"><?php include 'fonksiyon/masatoplam.php';  ?></a></div> 
<div class="col-md-3  border-right"id="rows">Tarih :  <a class="text-warning"><?php echo date('d.m.Y H:i:s'); ?></a></div> 
</div>
</div>

<div class="container">
    <div class="col-md-12 mx-auto"></div>
    
    </div>
</body>
</html>