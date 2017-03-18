<?php 
$version = file_get_contents('../version.txt');
$outversion = file_get_contents('https://raw.githubusercontent.com/UndefinedIndustries/sPrInkler/master/version.txt');
if ($version < $outversion){
    echo "Update available. click <a href='updater.php'>here</a> to update";
}else{
echo "Version $version";    
}
 ?>