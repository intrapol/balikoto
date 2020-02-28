<?php 
require 'fonksiyon.php';

$sql="SELECT * FROM masalar";
$sorgu=mysqli_query($db,$sql);
$masatoplam=0;
 while ( $sonuc=mysqli_fetch_assoc($sorgu))   :
   $masatoplam=$masatoplam+1;

endwhile;
echo $masatoplam;

?>