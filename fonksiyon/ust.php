<style>
#rows  {
    height:45px;
}
#masa { 
    height:80px;
    margin:2px;
    font-size:35px;
    border-radius:15px;
  
}
a {
    text-decoration:node;
}
</style>
<div class="container-fluid "  id="rows">
<div class="row table-dark">
<div class="col-md-3  border-right " id="rows"><?php include 'fonksiyon/menu.php';?></div> 
<div class="col-md-3  border-right"id="rows">Doluluk Oranı : <a class="text-warning"><?php include 'masatoplam.php';  ?>/0</a></div> 
<div class="col-md-3  border-right"id="rows">Toplam Masa : <a class="text-warning"><?php include 'masatoplam.php';  ?></a></div> 
<div class="col-md-3  border-right"id="rows">Tarih :  <a class="text-warning"><?php echo date('d.m.Y H:i:s'); ?></a></div> 
</div>
</div>