<?php

$con=mysqli_connect("localhost","root","","BD123123");
$a=$_POST["T1"];
$req="select * from clients where cin='$a'";
$res=mysqli_query($con,$req);
if (mysqli_num_rows($res)!=0) {
    $req1="delete from clients where cin='$a'";
    if (mysqli_affected_rows($con)==-1) {
         echo "suppression echouee";
    }
    else {
        echo "suppression avec succes";
    }

    
}
else {

    echo "client inexistant parceque";
}
;

?>
