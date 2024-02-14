<?php
include("dbconnect.php");
extract($_POST);
session_start();
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




	
	
	
						<h2 align="center">Vendor Registration Details</h2>










<table width="106%" align="center">
	<tr>
		<td colspan="10">&nbsp;</td>
		</tr>
	
		    <tr>
          <td width="1%">&nbsp;</td>
          <td width="7%"><div align="center" class="style6"><strong>Id</strong> </div></td>
		   <td width="11%"><div align="center" class="style6"><strong>Name</strong> </div></td>
		    <td width="11%"><div align="center" class="style6"><strong>Gender</strong> </div></td>
			 <td width="9%"><div align="center" class="style6"><strong>Age</strong> </div></td>
			  <td width="13%"><div align="center" class="style6"><strong>Email</strong> </div></td>
		    <td width="11%"><div align="center" class="style6"><strong>Phone</strong> </div></td>
			 <td width="10%"><div align="center" class="style6"><strong>Location</strong> </div></td>
			  <td width="9%"><div align="center" class="style6"><strong>Address</strong> </div></td>
        </tr>
		<tr>
		<td colspan="10">&nbsp;</td>
		</tr>
		<?php
		$qry=mysql_query("select * from register");
		$i=1;
		while($row=mysql_fetch_array($qry))
		{
		?>

        <tr>
		 <td width="1%">&nbsp;</td>
		    <td><div align="center"><?php echo $row['id'];?></div></td>
		   <td><div align="center"><?php echo $row['name'];?></div></td>
			  <td><div align="center"><?php echo $row['gender'];?></div></td>
			 <td><div align="center"><?php echo $row['age'];?></div></td>
			  <td><div align="center"><?php echo $row['email'];?></div></td>
			   <td><div align="center"><?php echo $row['phone'];?></div></td>
			    <td><div align="center"><?php echo $row['location'];?></div></td>
				 <td><div align="center"><?php echo $row['address'];?></div></td>
				  <td><div align="center"><?php echo $row['occup'];?></div></td>
	
			  <td width="2%">&nbsp;</td>
		 
        </tr>
		
		
		 <tr>
		  	 	<td>&nbsp;</td>
		   		<td>&nbsp;</td>
				<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
			 	<td>&nbsp;</td>
		
		
		</tr>
		
        <?php
		$i++;
		}
		
		?>
				<tr>
		<td colspan="10" align="center">&nbsp;</td>
		</tr>
		
		</table>
		
		
		
		
		
		
		
		
		
		
		
<br>
	<br>
	
	

<table width="100%" border="0">
    <tr>
<th height="73" bgcolor="#00cccc" scope="col"></th>      </th>
    </tr>
</table>


</body>
</html>