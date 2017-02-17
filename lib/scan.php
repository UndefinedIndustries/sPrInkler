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
  $i = 0;
  $name = "test";
  for( $i = 1; $i<=7; $i++ ) {
    if($i == 1){
      $name = "Monday";
    }
    if($i == 2){
      $name = "Tuesday";
    }
    if($i == 3){
      $name = "Wednesday";
    }
    if($i == 4){
      $name = "Thursday";
    }
    if($i == 5){
      $name = "Friday";
    }
    if($i == 6){
      $name = "Saturday";
    }
    if($i == 7){
      $name = "Sunday";
    }
  ?>
  <td><input type="checkbox" name="<?php echo $name; ?>" value="<?php echo $i;?>"><?php echo $name; ?></input></td>
  <?php
  }

}

#echo_system();
#read_gpio();
#calendar();
?>
