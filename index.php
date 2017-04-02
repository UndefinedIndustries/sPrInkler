 <!DOCTYPE html>
 <html>
   <head>
    	<?php
       		$date = time();
	   		//get the date
     	?>
     	<meta charset="utf-8">
    	<link href="https://gavinscodetest.tk/css/style.css" rel="stylesheet" type="text/css"></link>
     	<script src="https://gavinscodetest.tk/js/1jquery.js"></script>
     	<script src="https://gavinscodetest.tk/js/sprinkler.js"></script>
        <script>
            function getButton(data){
                    var xhttp = new XMLHttpRequest();
                    var test = document.getElementById(data).name;
                    
                    var info=data;
                    
                    xhttp.open("GET", "/modules/sPrInkler/lib/submit.php?"+info, true);
                    console.log("sending");
                    console.log(info);
                    xhttp.send();

            }
        </script>
    	<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
        
     	<title></title>
   </head>
   <body>
     <div style="position:fixed;top:0;left:0;">
	<a href="edit.php" style="float: left;text-decoration: none;color: #fff;font-family: UB;font-size: 1em;">
		 	&nbspConfig
	</a>
	<br/>
    <a href="../../" style="float: left;text-decoration: none;color: #fff;font-family: UB;font-size: 1em;">
		&nbspHome
	</a>
	</div>
    <center>
    	<div style="max-width: 400px;margin-top: 50px; !important;float: none !important;text-align:center;">
     		<form id ="test" action="lib/submit.php" method="get" onsubmit="return false;">
        
				<div style="max-width:600px;">
       			<?php
       				$test1=file_get_contents('lib/sys.dat'); //get the contents of the file lib/sys.dat
       				if($test1 == 1){  // if the variable test1 is equal to one
       					echo '<p style="float:left" >System Schedule <br> Status: On</p>'; //echo that the system is on
       					echo '<button name="sysoff" id="sysoff" style="float:right" class="w3-btn w3-teal w3-xlarge w3-hover-indigo w3-round-large" onclick="getButton("syson");"> Turn Off </button><br/><br>'; //make a buton that says turn off
   					}else{ //else
				       echo '<p style="float:left">System Schedule <br> Status: Off</p>'; //echo that the system is off
				       echo '<button name="syson" id="syson" style="float:right" class="w3-btn w3-blue w3-xlarge w3-round-large w3-hover-indigo" onclick="getButton("sysoff");"> Turn On </button><br/><br>'; //make a button that says turn on
       				}
        		?>
			</div>
     		</form>
     		<form  id="foo" action="lib/submit.php" method="get" onsubmit="return false;">
       			<div id="data"/>
            		<?php
						include 'lib/check.php';
					 ?>
          		</div>
     		</form>
		</center>
		<div style="bottom: 0;position:fixed;float:right;right:0;">
    		<button onclick="starts();" style="background-color:Transparent;border:0px;">
    			<img src="https://gavinscodetest.tk/img/microphone.png" width="35"/>
			</button>
  		</div>
		<div style="bottom: 0;position:fixed;float:left;left:0;">
    		<?php
				include_once('lib/version.php');  //include the php version file
				?>
  		</div>
   </body>
</html>
