
<?php
$a = '';
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
#Garage Door


foreach ($status as $value){
  if ($value == 1){ $data = "Off"; }else{ $data = "On"; }
   echo '<p class="label">Station: '.++$a.' &nbspStatus: '.$data.'</p><br/>';
   if ($value == 0){
     echo '<button name="off" value='.$a.' class="btnoff" id="f-btn'.$a.'"> Turn Off </button><br/>';
   }else{
     echo '<button name="on" value='.$a.' class="btnon"id="f-btn'.$a.'">Turn On </button><br/>';
   }

}
 ?>

 <html>



 </html>
