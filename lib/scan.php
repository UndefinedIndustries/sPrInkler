<?php
include 'pins.ini.php';
function echo_system(){
  global $pins;

for ($x = 1; $x <= sizeof($pins); $x++) {
echo "System $x<br/>";

}
}
function read_gpio(){
  global $pins;

foreach ($pins as $id){
  exec ( "gpio -g read ".$id, $value);
  foreach ($value as $key) {
    echo $key;
  }
}

}
function calendar(){
  for(int $i =0 ; $i <10; $i++){
    
  }
}

#echo_system();
#read_gpio();
?>
