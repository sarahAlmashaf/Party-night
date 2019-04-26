<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <?php 

session_start();

// 1- Open the connection
if(!($con = mysqli_connect("localhost", "root", "")))
    die("Could not connect to database </body></html>");

// 2- Select database
if(!mysqli_select_db($con, "pn"))
    die("Could not open the database </body></html>");

// 3- Perform SQL Query
$email = $_POST["email"];
$pass = $_POST["pass"];
$query = "SELECT * FROM party WHERE email = '$email' AND pass = '$pass'";

if(!($result = mysqli_query($con, $query))){
    echo("<p>Could not execute query!</p>");
    die(mysqli_error($con)."</body></html>");
}

if(mysqli_num_rows($result) > 0) {
    $_SESSION['email'] = $email;
	$row = mysqli_fetch_row($result);
	$_SESSION['fname'] = $row[0];
	$_SESSION['lname'] = $row[1];
	$_SESSION['password'] = $pass;
    header('Location: Signin.php');
} else {
    echo("Wrong email or password.");
}

// 4- Close the connection
mysqli_close($con);

?>    
</body>
</html>