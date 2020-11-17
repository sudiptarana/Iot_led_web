<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="refresh" content="2" />
	<title>My Input page</title>
</head>
<body>

</body>
</html>
<?php
error_reporting(0);

$myfile = fopen("file2", "r")or die("Unable to open file!");
$data=fread($myfile, filesize("file2"));
fclose($myfile);
$a= explode(",",$data);
foreach ($a as $i) {
	echo "<div>data is:".$i."</div>"
}

?>