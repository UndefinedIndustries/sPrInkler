<body>

<form  action="lib/edit-submit.php" method="POST">
<link href="https://gavinscodetest.tk/css/normalize.css" rel="stylesheet" />
<link href="https://gavinscodetest.tk/css/style.css" rel="stylesheet" type="text/css"></link>
 <script src="https://gavinscodetest.tk/js/1jquery.js"></script>
 <script src="https://gavinscodetest.tk/js/sprinkler.js"></script>
<center>
  <br/>
<input type="submit" name="sub1" value="Submit" style="border: 0px;padding:5px;background-color: #c9c9c9;border-radius: 7px;">
<a href="./" style="text-decoration: none;color :#000;"><button type="button" style="border: 0px;padding:5px;background-color: #c9c9c9;border-radius: 7px;">Cancel</button></a>
</center>
<br/>
<br/>
<div id="texts" style="margin-left: 25%;margin-right:25%;width:50%;background-color: #000;text-align: right;background-color: #AEAEAE;padding:5px;border-radius:10px;font-size: 1em;">
<?php
include 'lib/edit-form.php';
 ?>
 </div>
 </form>
 <br/>
 <div id="texts" style="margin-left: 25%;margin-right:25%;width:50%;background-color: #000;text-align: right;background-color: #AEAEAE;padding:5px;border-radius:10px;font-size: 1em;">
   <?php include('lib/calendar.php'); ?>
  </div>
</body>
