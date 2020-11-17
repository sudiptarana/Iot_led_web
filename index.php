<?php
error_reporting(0);

$x = fopen("file", "r")or die("Unable to open file!");
$data=fread($x, filesize("file"));
fclose($x);

?>
<!DOCTYPE html>
<html>
	<head>
	  <title>IOT_controlar</title>

	  <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	  <link rel="stylesheet" type="text/css" href="styles.css" />

	</head>

<body background="img/2.jpg">
    <center>
        <h1 style="font-family: Helvetica;color:#ffffff;"><b>&nbsp;IOT DEVICES CONTROLLER</b></h1>
    </center>

	<div class="center" style="background-image:url(img/4.jpg);">
	   <div align="center">


<!--red-->
	   	     <p style = 'line-height: 40px;font-family: Helvetica;color: #fff;font-size: 30px;'>

            <h3>RED LED</h3>
           <img src = 'img/blub_red.png' height="80px" width="120px" style='vertical-align: middle' />&nbsp;&nbsp;

           <a href="test.php?state_r=1" class="on <?php echo 'c-'.$data[0] ?>">on</a>&nbsp;&nbsp;
           <a href="test.php?state_r=2" class="off <?php echo 'c-'.$data[0] ?> ">off</a>
         </p>


<!--green-->
        <p style = 'line-height: 40px;font-family: Helvetica;color: #fff;font-size: 30px;'>

           <h3>GREEN LED</h3>
           <img src = 'img/blub_green.png' height="100px" width="120px" style='vertical-align: middle' />&nbsp;&nbsp;

           <a href="test.php?state_g=1" class="on <?php echo 'c-'.$data[1] ?>">on</a>&nbsp;&nbsp;
           <a href="test.php?state_g=2" class="off <?php echo 'c-'.$data[1] ?> ">off</a>
       </p>

<!--yellow-->

        <p style = 'line-height: 40px;font-family: Helvetica;color: #fff;font-size: 30px;'>
          <h3>Yellow LED</h3>
           <img src = 'img/blub.png' height="80px" width="120px" style='vertical-align: middle' />&nbsp;&nbsp;

           <a href="test.php?state_y=1" class="on <?php echo 'c-'.$data[2] ?>">on</a>&nbsp;&nbsp;
           <a href="test.php?state_y=2" class="off <?php echo 'c-'.$data[2] ?>">off</a>
       </p>

       <br><br>

        </div>
    </div>

  <footer>&copy; it's_<span class="r"><b>R</b></span>ana</footer>

    </body>
</html>