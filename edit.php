<body>
	<form  action="lib/edit-submit.php" method="POST">
	<link href="https://gt3ch1.tk/css/normalize.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
	<link href="https://gt3ch1.tk/css/style.css" rel="stylesheet" type="text/css"></link>
 	<script src="https://gt3ch1.tk/js/1jquery.js"></script>
 	<script src="https://gt3ch1.tk/js/sprinkler.js"></script>
	<center>
		<br/>
		<span style="color: #fff; font-size: 1.5em">
			System Timing
		</span>
		<br/>
		<input type="submit" name="sub1" value="Submit" class="w3-btn w3-xlarge w3-blue w3-round-large w3-hover-blue-grey">
			<a href="./" style="text-decoration: none;color :#000;">
				<button type="button" class="w3-btn w3-xlarge w3-blue w3-round-large w3-hover-blue-grey">
					Cancel
				</button>
			</a>
		</input>
		</center>
		<br/>
		<br/>
		<div id="texts" style="margin-left: 25%;margin-right:25%;width:50%;text-align: right;padding:5px;font-size: 2em;">
			<?php
				include 'lib/edit-form.php';
 			?>
 		</div>
 	</form>
 	<br/>
 	<div id="texts1" style="margin-left: 25%;margin-right:25%;width:50%;text-align: right;padding:5px;border-radius:10px;font-size: 1.5em;color:#fff;">
		<?php
 			include('lib/calendar.php');
		?>
  	</div>
</body>
