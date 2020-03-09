<style>
a{
    text-decoration:node;
}
</style>
<?php 
require 'fonksiyon.php';
$sql="SELECT * FROM masalar";
$sorgu=mysqli_query($db,$sql);
    while ( $sonuc=mysqli_fetch_assoc($sorgu))   :
        // veri tabanından masaları çekme
        echo '<div class="col-md-3 border border-dark bg-danger mx-auto p-2 text-center text-white"
        id="masa"><a href="./masa.php?ad='.$sonuc["ad"].'">'.$sonuc["ad"].'</a> </div>';

    endwhile;
?>

