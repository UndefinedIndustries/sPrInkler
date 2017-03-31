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
		?>
			<div style="max-width: 400px;">
		<?php
  		if ($value == 1){ $data = "Off"; }else{ $data = "On"; }
   			echo '<br/><p style="float:left;" class="label">Station: '.++$a.' &nbspStatus: '.$data.'</p>';
   		if ($value == 0){
     		echo '<button style="float:right;" name="off" value='.$a.' class="w3-btn w3-xlarge w3-black w3-round-large w3-hover-blue-grey" id="f-btn'.$a.'"> Turn Off </button>';
   		}else{
     		echo '<button name="on" style="float:right;" value='.$a.' class="w3-btn w3-xlarge w3-black w3-round-large w3-hover-blue-grey" id="f-btn'.$a.'">Turn On </button><br><br>';
   		}?>
	</div>
		<?php
	}
 ?>
