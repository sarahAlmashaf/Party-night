<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign in</title>
</head>
<link rel="stylesheet" type="text/css" href="Signin1.css"/>
<link rel="stylesheet" type="text/css" href="Party_night.css" />

<body>

<div class="container">
  <div class="topnav">
   <a href="Party_night.html">Home</a> 
   <a href="Signup11.html">Sign up</a> 
   <a href="Signin.php">Sign in</a>
    <a href="Contact.html">Contact us</a> 
    <a href="about_us.html">About us</a> 
    <a href="search.html">Search</a> </div>
</div>
<br><br><br><br><br><br>
 <?php session_start();

        if(empty($_SESSION['email'])) {
        ?>
	<div class="ba">
<form method="post" action="signin2.php" >
    <div class="container2">
      <h1>Sign In</h1>
     
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" required>
      

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign In</button>
      </div>
    </div>
  </form>
  
</div>
 <?php
        } else {
        ?>
        
        <h3>Welcome <?php echo($_SESSION['email']);?></h3>
        <p><a href="logout.php">Logout</a></p>
        <form  method="post" action="update_in.php">
    <div class="container2">
      
      <p>Please fill in this form to Update your account.</p>
      <hr>
	
    <label for="fn"><b>First Name :</b></label>
    <input type="text" name="fn" value="<?php echo $_SESSION['fname'] ; ?>"required>

    <label for="ln"><b>Last Name :</b></label>
    <input type="text" name="ln" value="<?php echo $_SESSION['lname'] ; ?>"required>
		
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" value="<?php echo $_SESSION['email'] ; ?>"required>

      <label for="pass"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" value="<?php echo $_SESSION['password'] ; ?>" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
     

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn"> Update</button>
      </div>
    </div>
  </form>
        
        <?php 
        }
        ?>
        
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</script>
</body>
</html>
