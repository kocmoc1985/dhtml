<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<title>Titel</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php
$a = 5;
$b = 10;
if ($a > $b){
  echo "<P>$a �r st�rre �n $b</P>";
}
else {
  echo "<P>$a �r mindre �n $b</P>";
}
/*vi �ndrar v�rdena p� variablerna*/
$a = 12;
$b = 7;
if ($a > $b){
  echo "<P>$a �r st�rre �n $b</P>";
}
else {
  echo "<P>$a �r mindre �n $b</P>";
}
?>
</body>
</html>
