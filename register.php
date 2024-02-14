<?php
include("dbconnect.php");
extract($_POST);
session_start();
if(isset($_POST['btn']))
{
//$max_qry = mysql_query("select max(id) from register");
		//$max_row = mysql_fetch_array($max_qry); 
		//$id=$max_row['max(id)']+1;
$qry1=mysql_query("insert into register values('','$name','$gender','$age','$email','$phone','$loc','$address','$uname','$psw')");
if($qry1)
{

echo "<script>alert('Registered Sucessfully')</script>";
}
else
{
echo "<script>alert('Try Again')</script>";
}

}
?>

<html>
<head>
  <title>excibition </title>
  <meta name="description" content="website description" />
  <style type="text/css">
<!--
.style1 {color: #FF0000}
-->
  </style>
</head>
<body>
  <table width="100%" border="0">
    <tr>
      <th height="73" bgcolor="#00cccc" scope="col"><h1>EXHIBITION HANDLING SYSTEM</h1>
      </th>
    </tr>
  </table>
  <table width="100%" border="0">
    <tr>
      <th scope="col"><a href="index.php">Home</a></th>
      <th scope="col"><a href="admin.php">Admin Login</a></th>
      <th scope="col"><a href="vendor.php">Vendor Login</a></th>
      <th scope="col"><a href="register.php">Vendor Registration</a></th>
      </tr>
  </table>
  

  
  
  <p>&nbsp;</p>
  <div id="content">
   <img src="images\1.jpg" width="1420" height="400">

	  
<form id="f1" name="f1" method="post" action="#" >
  <table width="44%" border="0" align="center">
	
	
	
	

	
    <tr>
      <td colspan="2"  align="center" ><div class="style5"><h3>New User Registation</h3></div></td>
      
    </tr>
	
	
	
	
	
	
	
	
	
    <tr>
      
      <td height="44">Name</td>
      <td><label>
        <input name="name" type="text" id="name"  required/>
      </label></td>
    
    </tr>
	
	
	
	
	
	
    <tr>
    
      <td height="38">Gender</td>
      <td><input name="gender" type="radio" value="male" required/>
        Male
          <input name="gender" type="radio" value="female" /> 
          Female</td>
    
    </tr>
	
	
	
	
    <tr>
     
      <td height="39">Age</td>
      <td><label>
        <input name="age" type="text" id="age" required />
      </label></td>
     
    </tr>
	
	
	
	
	
	
    <tr>
   
      <td height="43">Email Id </td>
      <td><input name="email" type="text" id="email" required /></td>
    
    </tr>
	
	
	
	
	
	
	  <tr>
    
      <td height="48">Phone Number </td>
      <td><input name="phone" type="text" id="phone" required /></td>
   
    </tr>
	
	
	
	
	<tr>
    
      <td height="37">Location</td>
      <td><input type="text" name="loc" id="loc"></td>
    
    </tr>
	
	
	
	
		
	
	   <tr>
    
      <td height="49">Address</td>
      <td><textarea name="address" id="address"></textarea></td>
     
    </tr>
	
	
	
	
	
	

    <tr>
     
      <td height="31">User Name</td>
      <td><input name="uname" type="text" id="uname" /></td>
     
    </tr>
	
	
	
	
	
	
    <tr>
     
      <td height="37">Passwrod</td>
      <td><input name="psw" type="password" id="psw" /></td>
    </tr>
	
	
	
	
	
	<tr>
      <td height="45">&nbsp;</td>
   
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>





<table width="100%" border="0">
    <tr>
<th height="73" bgcolor="#00cccc" scope="col"></th>      </th>
    </tr>
</table>


</body>
</html>