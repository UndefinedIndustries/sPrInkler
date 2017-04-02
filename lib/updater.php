<?php 
 exec('git -C ../ fetch --all & git reset --hard origin/master & git pull origin master & git -C ../ fetch --all & git reset --hard origin/master & git pull origin master');
 exec('sudo chmod 777 -R ../sys.dat');
 header('Location: ../');
 ?>
 
