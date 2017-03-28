
<?php
 /*
		So, this is an interesting bit.  I remembed writing this section of code at three in the morning.
		I have no clue what happened that night, but this chunk is insane.  I honestly have no clue
		how to comment it, or even document it.  I have no clue what the hell is going on, or how
		the idea to write this came to my mind.  But hey, in the end, it works really well, and it
		kinda is nice to have for the program.
 */

  for ($i = 1; $i <= 10; $i++) {
    $data = $_POST[$i];
    exec("echo ".$data." > ../data/sys".$i.".dat");
  }
  header('Location: ../');
?>
