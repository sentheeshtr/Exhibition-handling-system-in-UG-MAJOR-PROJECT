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




	
	
						<h2 align="center">Vendor Stalls Request</h2>

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
	<td align="center"><strong>User Name</strong></td>
	<td align="center"><strong>Contact No</strong></td>
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
	$qry=mysql_query("select * from book where status=''");
	while($row=mysql_fetch_array($qry))
	{
	$sid=$row['sid'];
	$vid=$row['vid'];
	$status=$row['status'];
	$qr=mysql_query("select * from stall where id='$sid'");
	$rw=mysql_fetch_array($qr);
	
	$qt=mysql_query("select * from register where id='$vid'");
	$ro=mysql_fetch_array($qt);
	
	?>

	<td>&nbsp;</td>
	<td align="center"><?php echo $row['id'];?></td>
	<td align="center"><?php echo $rw['name'];?></td>
	<td align="center"><?php echo $rw['from'];?> To <?php echo $rw['from'];?></td>
	<td align="center"><?php echo $row['no'];?></td>
	<td align="center"><?php echo $row['sno'];?></td>
	<td align="center"><?php echo $row['amnt'];?></td>
	<td align="center"><?php echo $row['sname'];?></td>
	<td align="center"><?php echo $ro['name'];?></td>
	<td align="center"><?php echo $ro['phone'];?></td>
	<td align="center"><a href="bview.php?act=acc&id=<?php echo $row[id];?>"><font color="#FF0000">Accept</font></a>||<a href="bview.php?act=rej&id=<?php echo $row[id];?>"><font color="#FF0000">Reject</font></a></td>
	
	
	
	</tr>	
	<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	</tr>
	
	<?php
	
	}
	
	
	if($_REQUEST["act"]==('acc'))
	{
	
	$id=$_REQUEST['id'];
	
	$qy=mysql_query("update book set status='0' where id='$id'");
	
	echo "Accepted Sucess";
	
	
	}
	
	
	
	if($_REQUEST["act"]==('rej'))
	
	
	
	{
	
	
	$id=$_REQUEST['id'];
	
	$qy=mysql_query("update book set status='Rejected' where id='$id'");
	
	echo "Rejected";
	
	
	}
	
	
	
	?>
	</table>





<table width="100%" border="0">
    <tr>
      <th height="73" bgcolor="#00cccc" scope="col">      </th>
      </th>
    </tr>
</table>


</body>
</html>