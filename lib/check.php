
<?php
#System 1
exec ( "gpio read 23", $status );
#System 2
exec ( "gpio read 1", $status );
#System 3
exec ( "gpio read 4", $status );
#System 4
exec ( "gpio read 0", $status );
#System 5
exec ( "gpio read 2", $status );
#System 6
exec ( "gpio read 3", $status );
#System 7
exec ( "gpio read 12", $status );
#System 8
exec ( "gpio read 13", $status );
#System 9
exec ( "gpio read 14", $status );
#System 10
exec ( "gpio read 24", $status );

$test = 1;
foreach ($status as $value){
  if ($value == 1){ $data = "Off"; }else{ $data = "On"; }
   echo 'Station: '.++$a.' &nbspStatus: '.$data.'<br/>';
   if ($value == 0){
     echo '<button name="off" value='.$a.'> Turn Off </button><br/>';
   }else{
     echo '<button name="on" value='.$a.'> Turn On </button><br/>';
   }

}
 ?>
