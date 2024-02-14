<?php
include("dbconnect.php");
extract($_POST);
session_start();
$vid=$_SESSION['vid'];
$sid=$_REQUEST['id'];
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

 
			<br>
				<br>
				<br>
			
			
				<br>
				<br>
	
	

	
						<h2 align="center"> Aldready Booked Stalls</h2>

	<table align"center" width="100%">
	<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	
	</tr>

	<tr>
	<td>&nbsp;</td>
	<td align="center"><strong>Id</strong></td>
	<td align="center"><strong>Event Name</strong></td>
	<td align="center"><strong>Dates</strong></td>
	<td align="center"><strong>No Of Stall</strong></td>
	<td align="center"><strong>Stall Nos</strong></td>
	<td align="center"><strong>Amount</strong></td>
	<td align="center"><strong>Stall Name</strong></td>
	<td align="center"><strong>Action</strong></td>
	</tr>
	
	
	<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	</tr>
	
	
	<tr>
	<?php
	$qry=mysql_query("select * from book where vid='$vid'");
	while($row=mysql_fetch_array($qry))
	{
	$sid=$row['sid'];
	$status=$row['status'];
	$qr=mysql_query("select * from stall where id='$sid'");
	$rw=mysql_fetch_array($qr);
	?>

	<td>&nbsp;</td>
	<td align="center"><?php echo $row['id'];?></td>
	<td align="center"><?php echo $rw['name'];?></td>
	<td align="center"><?php echo $rw['from'];?> To <?php echo $rw['from'];?></td>
	<td align="center"><?php echo $row['no'];?></td>
	<td align="center"><?php echo $row['sno'];?></td>
	<td align="center"><?php echo $row['amnt'];?></td>
	<td align="center"><?php echo $row['sname'];?></td>
	<td align="center">
	
	
	
	<?php
	
	
	if($status=='1')
	
	{
	
	
	echo "Amount Paid";
	
	}
	
	
	else if($status=='0')
	{
	
	?>
	<a href="payment.php?id=<?php echo $row['id'];?>&amnt=<?php echo $row['amnt'];?>"><font color="#FF0000">Payment</font></a>
	
	<?php
	}
	
	
	else if($status=='')
	{
	
	echo " Request Send";
	
	
	}
	
	else
	{
	
	
	echo $status;
	
	}
	
	?>
	</td>
	
	</tr>	
	<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
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
	<br>
	
<table width="100%" border="0">
    <tr>
      <th height="73" bgcolor="#00cccc" scope="col">      </th>
      </th>
    </tr>
</table>


</body>
</html>