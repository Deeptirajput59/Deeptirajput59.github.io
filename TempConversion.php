<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
 Strict//EN" 
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <title>TempConversion</title>
 <meta http-equiv="content-type"
 content="text/html; charset=iso-8859-1" />
 </head>
 <body>
<?php 
echo "<font size = '5'><font color ='Blue'><p><b><i><u>Temperature conversion from Fahrenheit to Celsius are listed below</u></i></b></p></font></font>";
$fTemp = 0;
while ($fTemp <= 100) {
$cTemp = round(($fTemp - 32) * .55 , 1);
echo  $fTemp."Fahrenheit = ".$cTemp." Celsius </br></br>";
$fTemp++;
}
 ?>
 </body>
 </html>