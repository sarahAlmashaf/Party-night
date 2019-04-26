<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
if(!($con = mysqli_connect("localhost", "root", "")))
    die("Could not connect to database </body></html>");

// 2- Select database
if(!mysqli_select_db($con, "pn"))
    die("Could not open the database </body></html>");
$email=$_POST["email"];
$fn=$_POST["fn"];
$ln=$_POST["ln"];
$pass=$_POST["pass"];

// 3- Perform SQL Query
$query = "UPDATE party SET fn='$fn',ln='$ln',pass='$pass' WHERE email='$email'";

if(!($result = mysqli_query($con, $query))){
    echo("<p>Could not execute query!</p>");
    die(mysqli_error($con)."</body></html>");
}
else {
	
	$query = "SELECT * FROM party WHERE email = '$email'";
    $_SESSION['email'] = $email;
	$row = mysqli_fetch_row($result);
	$_SESSION['fname'] = $row[0];
	$_SESSION['lname'] = $row[1];
	$_SESSION['password'] = $pass;
	header('Location: Signin.php');}
// 4- Close the connection
mysqli_close($con);
?>
</body>
</html>