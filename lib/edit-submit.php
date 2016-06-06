<?php
for ($i = 1; $i <= 10; $i++) {
  $data = $_POST[$i];
  exec("echo ".$data." > ../data/sys".$i.".dat");
}

 ?>
