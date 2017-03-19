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
      

     <center><span style="color: #fff;font-size: 2em;">Schedule</span></center>
        <form action="lib/calendar-submit.php" method="get">
          <?php calendar(); ?>
          <input type="submit" value="Submit" class="w3-blue w3-btn w3-hover-red"/>


        </form>

  </body>
</html>
