<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0
 Strict//EN" 
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <title>WhileLogic</title>
 <meta http-equiv="content-type"
 content="text/html; charset=iso-8859-1" />
 </head>
 <body>
 <p>
<?php
$Count = 0;
while ($Count<=100) 
{
$Numbers[] = $Count;
++$Count;
}
foreach ($Numbers as $CurNum)
echo "<font color = 'Red'><p><b><i>$CurNum</i></b></p></font>";
?>
 </body>
 </html>