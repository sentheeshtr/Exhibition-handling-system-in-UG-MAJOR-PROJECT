<?php
include("dbconnect.php");
extract($_POST);
session_start();
if(isset($_POST['btn']))
{
		$max_qry = mysql_query("select max(id) from stall");
		$max_row = mysql_fetch_array($max_qry); 
		$id=$max_row['max(id)']+1;
		
		
			$imgpath=$_FILES['img']['name'];
	$errors= array();
    $fname = $_FILES['img']['name'];
    $file_tmp =$_FILES['img']['tmp_name'];
    move_uploaded_file($_FILES['img']['tmp_name'],"images/".$fname);
		
$qry1=mysql_query("insert into stall values('$id','$name','$total','$sno','$place','$address','$type','$fname','$stall','$frm','$to')");
if($qry1)
{
echo "<script>alert('Entered Sucessfully')</script>";
}
else
{
echo "<script>alert('Try Again')</script>";
}


}
?>
<br>
<br>
<br>
<br>

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
      <th scope="col"><a href="adminhome.php">Admin Home</a></th>
      <th scope="col"><a href="bview.php">View Booking</a></th>
      <th scope="col"><a href="details.php">Booking Details</a></th>
      <th scope="col"><a href="viewu.php">User Details</a></th>
      <th scope="col"><a href="index.php">LogOut</a></th>
    </tr>
  </table>
  

  
  
  <p>&nbsp;</p>
  <div id="content">
   <img src="images\1.jpg" width="1420" height="400">               




	  
<form id="f1" name="f1" method="post" action="#" enctype="multipart/form-data">
  <table width="100%" border="0" align="center">
	
	
	
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td width="19%">&nbsp;</td>
      <td width="18%">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
    <tr>
      <td width="11%">&nbsp;</td>
      <td width="21%">&nbsp;</td>
     
      <td colspan="2"  align="center" ><div class="style5"><h3><strong>Add Stall Information</strong></h3></div></td>
      <td width="20%">&nbsp;</td>
      <td width="11%">&nbsp;</td>
    </tr>
	
	
	
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
    <tr>
      <td height="31">&nbsp;</td>
      <td>&nbsp;</td>
      <td><strong>Exhibition Name</strong></td>
      <td><label>
        <input name="name" type="text" id="name"/>
      </label></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
   
    <tr>
      <td height="34">&nbsp;</td>
      <td>&nbsp;</td>
      <td><strong>Total Number Of Stalls</strong></td>
      <td><label>
        <input name="total" type="text" id="total" />
      </label></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
    <tr>
      <td height="32">&nbsp;</td>
      <td>&nbsp;</td>
      <td><strong>Stall Nos (start from)</strong></td>
      <td><input name="sno" type="text" id="sno" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	  <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><strong>Exhibition Place</strong></td>
      <td><input name="place" type="text" id="place" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
		
	   <tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td><strong>Address</strong></td>
      <td><textarea name="address" id="address"></textarea></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	

    <tr>
      <td height="31">&nbsp;</td>
      <td>&nbsp;</td>
      <td><strong>Exhibition Type</strong></td>
      <td><input name="type" type="text" id="type" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
	
	
	
	
	 <tr>
      <td height="31">&nbsp;</td>
      <td>&nbsp;</td>
      <td><strong>Stall Image</strong></td>
      <td><input name="img" type="file" id="img" /></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
	
	
	
	 <tr>
      <td height="31">&nbsp;</td>
      <td>&nbsp;</td>
      <td><strong>Exhibition Date</strong></td>
      <td>From <input name="frm" type="date" id="frm" /></td>
   <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
	 <tr>
      <td height="31">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>To &nbsp;&nbsp;&nbsp;&nbsp; <input name="to" type="date" id="to" /></td>
      <td>&nbsp;</td>
	   <td>&nbsp;</td>
    </tr>
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
	
	
	
	 <tr>
      <td height="31">&nbsp;</td>
      <td>&nbsp;</td>
      <td><strong>Amount Per Stall</strong></td>
      <td><input name="stall" type="text" id="stall" /></td>
   <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
	
	<tr>
      <td height="35">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	
	
	
	
	
	
	
	
	<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>



<br>
<br>
<br>

<table width="100%" border="0">
    <tr>
<th height="73" bgcolor="#00cccc" scope="col"></th>      </th>
    </tr>
</table>


</body>
</html>