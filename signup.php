<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(!($con=mysqli_connect("localhost","root","")))
die("could not connect to database </body></html>");
if(!mysqli_select_db($con,"pn"))
die("could not connect to database </body></html>");
$fn=$_POST["fn"];
$ln=$_POST["ln"];
$email=$_POST["email"];
$pass=$_POST["pass"];

$query="insert into party(fn,ln,email,pass)values('$fn','$ln','$email',$pass)";
if(!($result=mysqli_query($con,$query)))
{
	echo("<p>Could not execute query !</p>");
	die(mysqli_error($con)."</body></html>");
}
mysqli_close($con);


?>
<p>The customer has been added successfully</p>
</body>
</html>