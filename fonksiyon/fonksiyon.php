<?php        
$db = new mysqli("localhost","serdar","123456","balikoto")or die("bağlanamadı:::");
$db->set_charset("utf8");

class sistem{



 function masacek($dv){
    $masalar="select * from masalar";
    $masas=$dv->prepare($masalar);
    $masas->execute();
    $b=$masas->get_result();

    
    while ($masason=$b->fetch_assoc())   :
        echo '<div class="col-md-1 border border-dark bg-danger mx-auto p-2 text-center text-white"
        id="masa">'.$masason["ad"].'</div>';

    endwhile;
}
}




?>