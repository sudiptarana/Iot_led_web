<?php
error_reporting(0);
$myfile = fopen("file2", "w")or die("Unable to open file!");
fwrite($myfile, $_GET["data"]);
fclose($myfile);
echo "success";
?>