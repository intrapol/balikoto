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
<?php 
include 'fonksiyon/ust.php'
?>
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