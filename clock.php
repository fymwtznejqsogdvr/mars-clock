<title>Mars Clock Project</title>
 <link href="https://fonts.googleapis.com/css?family=Titillium Web" rel="stylesheet">

<style>
body {margin:0;
	background-color: #9D7D57;
	margin-left: 25px;
	margin-right: 25px;
	font-family: 'Titillium Web', sans-serif;
  color:#3A3333;

}


  a {
      text-decoration: none !important;
    }
    /* The alert message box */

   
      
</style>

<?php

$page = $_SERVER['PHP_SELF']; $sec = "50"; 


?>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
<font color="white">
<br><br>
	<center>
	<div style="left-margin =25px; right-margin=25px">
<small>Live SOL Date & Time on Planet Mars</small>		
<h1>
	<center>

<?


// run python 3 to create reports

$python = `python3 ./python/clock.py`;
echo $python;

 
?>
		</h1>
	
	
	<small><center>
	The term sol is used by planetary astronomers to refer to the duration of a solar day on Mars. A  Martian SOL day, is 24 hours, 39 minutes, and 35.244 seconds.<br>
		The Coordinated Mars Time (MTC) is a proposed Mars analog to Universal Time (UT1) on Earth. It is defined as the mean solar time at Mars's prime meridian. <br> Based on Allison, M., and M. McEwen formula. https://www.giss.nasa.gov/tools/mars24/help/algorithm.html
		</p>



