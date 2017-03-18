<?php 
$version = file_get_contents('/version.txt');
$outversion = file_get_contents('https://raw.githubusercontent.com/UndefinedIndustries/sPrInkler/master/version.txt');
echo "Version $version";
 ?>