<?php 
require 'fonksiyon.php';
$sql="SELECT * FROM masalar";
$sorgu=mysqli_query($db,$sql);
    while ( $sonuc=mysqli_fetch_assoc($sorgu))   :
        echo '<div class="col-md-3 border border-dark bg-danger mx-auto p-2 text-center text-white"
        id="masa">'.$sonuc["ad"].'</div>';

    endwhile;
?>
