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
function check_day($dayx){
  for ($t=1; $t <=7 ; $t++) {
    exec('cat ./data/day'.$t.'.dat', $status);
      }
      if ($status[$dayx] == 1){
        echo 'checked ';
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

        <span style="float:left;font-size: .9em">
      <?php echo $name; ?>
  </span>
  
      <input style="float:right;" type="checkbox" <?php
  check_day($i-1);

  ?>name="day<?php echo $i;?>" value="<?php echo $i;?>"></input><br/><br/></td></tr>

  <?php
  }

}

#echo_system();
#read_gpio();
#calendar();
?>
