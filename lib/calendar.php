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
    <table>
      <th>Schedule</th>
        <form action="calendar-submit.php" method="get">
          <?php calendar(); ?>
        </form>
        <input type="submit" value="submit"/>

    </table>
  </body>
</html>
