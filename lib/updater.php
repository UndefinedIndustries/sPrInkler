<?php 
 exec('git -C ../ fetch --all & git reset --hard origin/master & git pull origin master');
 header('Location: ../');
 ?>
 