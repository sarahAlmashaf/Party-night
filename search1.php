<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="Party_night.css" />
<link rel="stylesheet" type="text/css" href="search.css" />
<link rel="stylesheet" type="text/css" href="Party_night.html" />
</head>

<body>
<div class="container">
  <div class="topnav">
   <a href="Party_night.html">Home</a> 
   <a href="Signup11.html">Sign up</a> 
   <a href="Signin.html">Sign in</a>
    <a href="Contact.html">Contact us</a> 
    <a href="about_us.html">About us</a> 
    <a href="search.html">Search</a> </div>
</div>
<br /><br /><br /><br /><br /><br /><br /><br />

<?php
if(!($con = mysqli_connect("localhost", "root", "","pn")))
    die("Could not connect to database </body></html>");

// 2- Select database
//if(!mysqli_select_db($con, "pn"))
  //  die("Could not open the database </body></html>");

// 3- Perform SQL Query
$search = $_POST["search"];
$query = "SELECT * FROM store WHERE name = '$search'";
if(!($result = mysqli_query($con, $query))){
    echo("<p>Could not execute query!</p>");
    die(mysqli_error($con)."</body></html>");
}

            $row = mysqli_fetch_row($result);
               print("Name: $row[1] <br>");
			  print("Phone: $row[2]<br>");
			  print( "Location: $row[3]");
 // 4- Close the connection
        mysqli_close($con);			    
                
            ?>
            <br /><br />
               <table cellspacing="0" cellpadding="0" border="0" class="center-on-narrow" style="float:left;">
                                <tr>
                                  <td style="border-radius: 3px; background: #222222; text-align: center;" class="button-td"> <a href="Party_night.html" style="background: #222222; border: 15px solid #222222; padding: 0 10px;color: #ffffff; font-family: sans-serif; font-size: 13px; line-height: 1.1; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;" class="button-a"> 
                                    <!--[if mso]>&nbsp;&nbsp;&nbsp;&nbsp;<![endif]-->A View<!--[if mso]>&nbsp;&nbsp;&nbsp;&nbsp;<![endif]--> 
</a></td>
 </tr>
</table>
                              
</body>
</html>