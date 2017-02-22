<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
 Strict//EN" 
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <title>OddNumber</title>
 <meta http-equiv="content-type"
 content="text/html; charset=iso-8859-1" />
 </head>
 <body>
 <p>
<?php
echo "<font color = 'Blue'><i><b>Odd numbers between 1 to 100 are listed below:-</i></b></br></font>";
echo "-----------------------------------------------------------------";
$count=0;
while($count<100)
{
if($count%2!=0)
{
echo "<p>$count</p>";
}
$count++;
}
 ?>
 </p>
 </body>
 </html>