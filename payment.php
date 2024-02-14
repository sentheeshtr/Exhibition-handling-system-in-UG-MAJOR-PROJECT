<?php
include("dbconnect.php");
extract($_POST);
session_start();
$bid=$_REQUEST['id'];
$amount=$_REQUEST['amnt'];

if(isset($_POST['btn']))

{

$qry=mysql_query("update book set status='1' where id='$bid'");


if($qry)




{




echo "<script>alert('payment Sucess')</script>";
header("loaction:booking.php");

}



else

{




echo "<script>alert('payment Failed')</script>";




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
	


<form name="form1" method="post" action="#">
	  <table width="61%" border="0" align="center">
        <tr>
          <td colspan="2"><span class="style1">Payment Mode.... </span></td>
        </tr>
		
		
		 
		
		
        <tr>
          <td width="34%">&nbsp;</td>
          <td width="66%"><label>
            <input type="image" name="imageField" src="images/payment.png" />
          </label></td>
        </tr>
		
		
		  <tr>
          <td height="33"><span class="style4">Amount</span></td>
          <td><?php echo $amount;?></td>
        </tr>
		
        <tr>
          <td height="33"><span class="style4">Enter Card Number </span></td>
          <td><input name="cno" type="text" id="cno" /></td>
        </tr>
        <tr>
          <td height="36"><span class="style4">CVV Number </span></td>
          <td><input name="cvv" type="password" id="cvv" /></td>
        </tr>
        <tr>
          <td><span class="style4">Card Name </span></td>
          <td><input name="cname" type="text" id="cname" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input name="btn" type="submit" class="btn btn-primary" id="btn" value="Pay" /></td>
        </tr>
  </table> 
	 
</form>
  
  
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