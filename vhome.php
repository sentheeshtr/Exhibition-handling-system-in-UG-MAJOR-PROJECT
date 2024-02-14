<?php
include("dbconnect.php");
extract($_POST);
session_start();
$vid=$_SESSION['vid'];
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
      <th scope="col"><a href="vhome.php">Vendor Home</a></th>
      <th scope="col"><a href="booking.php">View Booking</a></th>
      <th scope="col"><a href="index.php">LogOut</a></th>
      </tr>
  </table>
  

  
  
  <p>&nbsp;</p>
  <div id="content">
   <img src="images\1.jpg" width="1420" height="400">

 <div align="center"><h2> Exibition Details</h2></div>



<table width="58%" height="159" border="0">
  
  
  
  <?php 
  $qry=mysql_query("select * from stall");
  while($row=mysql_fetch_array($qry))
  {
  
  ?>
  
    <tr>
     <td width="21%" rowspan="2" scope="col"><img src="images\<?php echo $row['img'];?>" width="100" height="100"></td>
     <td width="23%" height="57" scope="col"><strong>Event Name</td>
     <td width="21%" scope="col"><?php echo $row['name'];?></td>
	<td width="20%"><strong>Total No Of Stalls</strong></td>
     <td width="15%"><?php echo $row['total'];?></td>
     
   
   </tr>
   
   
    <tr>
	   <td height="41"><strong>Event Type</strong></td>
     <td><?php echo $row['type'];?></td>
		<td><strong>Stall Amount</strong></td>
     <td><?php echo $row['amnt'];?></td>
	
	
   </tr>
   
   
   
    <tr>
	 <td>&nbsp;</td>
	 <td height="41"><strong>Address</strong></td>
     <td><?php echo $row['address'];?></td>
	<td><a href="book.php?id=<?php echo $row['id'];?>"><font color="#FF0000">Book</font></a></td>
	
   </tr>
   
	 
	 <?php
	 
	 
	 }
	 
	 ?>
	 
</table>






	<br>
	<br>
	<br>
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