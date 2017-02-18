<?php
    for ($i=1; $i <= 7; $i++) {
    if(isset($_GET["day$i"])){
            exec('echo 1 > ../data/day'.$i.'.dat');
        }else{
            exec('echo 0 > ../data/day'.$i.'.dat');
    }
}
header('Location: ../edit.php');
?>
