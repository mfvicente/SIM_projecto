<?php

function check_user_in_db($us, $con){
    //mysqli_select_db($con, 'sim') or die('Não foi possível seleccionar a base de dados');
    $sql = "SELECT sim.users.username FROM sim.users WHERE sim.users.username = '$us'";
    $result = mysqli_query($con, $sql) or die('oi' . mysqli_error($con));
    
    while($rows = mysqli_fetch_array($result)){
        echo 'encontrei';
        if($rows['username'] == $us) return true;
    }
    return false;
}

?>