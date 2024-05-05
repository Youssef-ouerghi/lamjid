<?php
$con=mysqli_connect("localhost","root","","BD123123");

$req="select * from article ";
$res=mysqli_query($con,$req);

    echo "<!DOCTYPE html>
    <html>
    <head>
        <title>Document</title>
    </head>
    <body>
        <table>
        <tr><th>Code_Article</th>
        <th>Designztion Article</th>
        <th>prix_article</th></tr>";
        while ($l=mysqli_fetch_array($res)) {
            echo "<tr>
            <td>".$l['cod']."</td>  <td>".$l['desgnation']."</td>  <td>".$l['prix']."</td> </tr>";
        }
       echo " </table>
    </body>
    </html>";
    mysqli_close($con);
    



?>