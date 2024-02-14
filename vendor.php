<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	if(isset($_POST['btn']))
	{
	$qry=mysql_query("select * from register where uname='$uname'&& psw='$psw'");
	$row=mysql_num_rows($qry);
		if($row==1)
		{
$qry1=mysql_query("select * from register where uname='$uname' && psw='$psw'");
$rw=mysql_fetch_assoc($qry1);
$_SESSION['vid']=$rw['id'];
?>
<script>alert('welcome to User home page');
</script>
<?php
		$_SESSION['name']=$name;
		echo"<script> alert('login sucessfully')</script>";
		header("location:vhome.php");
		}
		else
		{
		echo "<script> alert('User name and password wrong')</script>";
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

 
	  
	  <form action="" method="POST">
          <table width="59%" align="center">
		 <tr>
		 <td height="56" colspan="3" align="center"><strong>Vendors Login</strong></td>
               
               
            </tr>
		 <tr>
		 <td width="13%" height="35">&nbsp;</td>
		<td width="33%" align="center"> User Name</td>
		<td width="54%"><input type="text" name="uname"></td>
	
		</tr>
		<tr>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		 <td>&nbsp;</td>
		<td align="center"> Password</td>
		<td><input type="password" name="psw"></td>
		
		</tr>
		<tr>
		<td height="38">&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		</tr>
		<tr>
		 <td rowspan="1"align="center" colspan="3"><input type="submit" name="btn"></td>	
		
		</tr>
</table>




<table width="100%" border="0">
    <tr>
<th height="73" bgcolor="#00cccc" scope="col"></th>      </th>
    </tr>
</table>


</body>
</html>