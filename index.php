 <!DOCTYPE html>
 <html>
   <head>
     <?php

       //logic goes here
       $date = time();

     ?>
     <meta charset="utf-8">
    <link href="https://gavinscodetest.tk/css/style.css" rel="stylesheet" type="text/css"></link>
     <script src="https://gavinscodetest.tk/js/1jquery.js"></script>
     <script> $( document ).ready(function() {
       setInterval(function(){

          $("#data").load("lib/check.php");
       }, 2500);


   });

     </script>
     <title></title>
   </head>
   <body>
     <a href="edit.php" style="float: left;text-decoration: none;color: #fff;font-family: UB;font-size: 1em;">&nbspConfig</a>

     <center>
     <div style="max-width: 500px;margin: 0 auto !important;float: none !important;text-align:center;">
     <form id ="test" action="lib/submit.php" method="post">
       <?php
       $test1=file_get_contents('lib/sys.dat');

       if($test1 == 1){
       echo '<p>System Schedule&nbsp&nbsp&nbspStatus: On</p>';
       echo '<button name="sysoff" class="btnoff"> Turn Off </button><br/>';
       }else{
       echo '<p>System Schedule&nbspStatus: Off</p>';
       echo '<button name="syson" class="btnon"> Turn On </button><br/>';
       }
        ?>
     </form>

     <form  action="lib/submit.php" method="post">
       <div id="data"/>
            <?php include 'lib/check.php'; ?>
          </div>
     </form>
</center>
   </body>
 </html>
