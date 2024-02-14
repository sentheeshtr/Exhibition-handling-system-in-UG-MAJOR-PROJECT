<?php
include("dbconnect.php");
extract($_POST);
session_start();
echo $vid=$_SESSION['vid'];
echo $sid=$_REQUEST['id'];


$qr=mysql_query("select * from stall where id='$sid'");
$rw=mysql_fetch_array($qr);


	if(isset($_POST['btn']))
	{
	
	
	$qt=mysql_query("select * from book where sno='$sno'");
	$num=mysql_num_rows($qt);
	if($num>=1)
	{
	
	
	
echo "<script>alert('Stall Aldredy Booked')</script>";
	
	}
	
	
	else
	{
	
	
	$amount=$amnt*$no;
		$max_qry = mysql_query("select max(id) from book");
		$max_row = mysql_fetch_array($max_qry); 
		$id=$max_row['max(id)']+1;
	$qry=mysql_query("insert into book values('$id','$vid','$sid','$no','$sno','$amount','$sname','')");
	
	if($qry)
	{
	echo "<script>alert('Entered Sucess')<script>";
	header("location:booking.php");
	
	
	
	}
	
	else
	{
	
	echo "<script>alert('Failed')<script>";
	
	}

	
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
	
	



	  
<form id="f1" name="f1" method="post" action="#" >
  <table width="55%" border="0" align="center">
	
	
	
	
    <tr>
     
      <td colspan="2"  align="center" ><div class="style5"><h3><strong>Book Stalls</strong></h3></div></td>
     
    </tr>
	
	
	
	
	
    <tr>
      <td width="41%" height="42"><strong>Event Date</strong></td>
      <td width="59%">
      <strong>From</strong> <?php echo $rw['from'];?> <strong> To </strong><?php echo $rw['to'];?>     </td>
    </tr>
	
	
	
		
    <tr>
      <td height="45"><strong>Stall Number Starts From</strong></td>
      <td>
       <?php echo $rw['sno'];?>
     </td>
    </tr>
	
	
	
	   <input type="hidden" name="amnt" value="<?php echo $rw['amnt'];?>">
		
    <tr>
      <td height="44"><strong>Number Of Stalls</strong></td>
      <td>
      <input type="text" name="no">
     </td>
    </tr>
		
		
    <tr>
      <td height="42"><strong>Enter Stall Numbers(seperate with Comma)</strong></td>
      <td>
      <input type="text" name="sno">
     </td>
    </tr>
	
	

	 <tr>
      <td height="44"><strong>Stall Name</strong></td>
      <td>
      <input type="text" name="sname">
     </td>
    </tr>
	
	
	<tr>
    <td>&nbsp;</td>
      <td height="42"><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>


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