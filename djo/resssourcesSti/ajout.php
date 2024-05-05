<?php
$con=mysqli_connect("localhost","root","","BD123123");
$a=$_POST["T1"];
$b=$_POST["T2"];
$c=$_POST["T3"];
$d=$_POST["S1"];
$e=$_POST["R1"];
$f=$_POST["T4"];
$req="select * from clients where cin='$a'";
$res=mysqli_query($con,$req);
if (mysqli_num_rows($res)!=0) {
    echo "client deja existant";
}
else {
    $req1="insert into clients values ('$a','$b','$c','$d','$e','$f')";
    $res2=mysqli_query($con,$req1);
    if (mysqli_affected_rows($con)==-1) {
         echo "ajout echouee";
    }
    else {
        echo "ajout avec succes";
    }
}
;
?>