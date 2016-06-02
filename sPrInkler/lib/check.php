
<?php
#System 1
exec ( "gpio read 13", $status );
print_r ( $status[0] );
#System 2
exec ( "gpio read 18", $status );
print_r ( $status[1] );
#System 3
exec ( "gpio read 23", $status );
print_r ( $status[2] );
#System 4
exec ( "gpio read 7", $status );
print_r ( $status[3] );
#System 5
exec ( "gpio read 27", $status );
print_r ( $status[4] );
#System 6
exec ( "gpio read 22", $status );
print_r ( $status[5] );
#System 7
exec ( "gpio read 10", $status );
print_r ( $status[6] );
#System 8
exec ( "gpio read 9", $status );
print_r ( $status[7] );
#System 9
exec ( "gpio read 11", $status );
print_r ( $status[8] );
#System 10
exec ( "gpio read 19", $status );
print_r ( $status[9] );
 ?>
