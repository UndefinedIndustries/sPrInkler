<?php
	include 'scan.php';
 ?>
<!DOCTYPE html>
<html>
	<head>
    	<meta charset="utf-8">
    	<title></title>
  	</head>
	<body>
 		<center>
			<span style="color: #fff;font-size: 2em;">
				Schedule
			</span>
		</center>
        <form action="lib/calendar-submit.php" method="get">
          <?php calendar(); ?>
          <center>
              <input type="submit" value="Submit" class="w3-blue w3-btn w3-hover-red w3-round-large"/>
              <a href="./" style="text-decoration: none;color :#000;">
  				<button type="button" class="w3-btn w3-xlarge w3-blue w3-round-large w3-hover-blue-grey">
  					Cancel
  				</button>
  			</a>
          </center>
        </form>
  </body>
</html>
