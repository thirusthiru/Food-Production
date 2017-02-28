<?php
session_start();
include("dbcon.php");
/*$con = mysqli_connect("localhost","root","") or die("Could not connect");
mysqli_select_db($con,"ben");*/
extract($_POST);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
input
{
background-image:url(benito/bg201.gif);
border-color:#0000FF;
color:#3333FF;
font-family:Georgia;
font-weight:bold;
border-style:groove;
}
select
{
background-image:url(benito/bg201.gif);
border-color:#0000FF;
color:#3333FF;
font-family:Georgia;
font-weight:bold;
border-style:groove;
}
th
{
font-family: georgia;
color:#0066FF;
text-decoration:none;
}
td
{
font-family: georgia;
color:#0066FF;
text-decoration:none;
}
a
{
font-family: cursive;
color:#0033FF;
text-decoration:none;
}
a:hover
{
font-family: cursive;
color:red;
text-decoration:underline;
}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Report</title>
</head>

<body bgcolor="lightblue">
<form id="form2" name="form2" method="post" action="report.php">
  <table width="466" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#0000EE">
    <tr>
      <th width="462" height="72" scope="col"><table width="450" border="0" align="center" cellpadding="2" cellspacing="2">
        <tr>
          <th scope="row">Select the date </th>
          <td align="center">
	<input type="date" name="dat1">
<input type="submit" name="submit">	
              
              <?php
if(isset($_POST['submit']))
{
	$dat1=$_POST['dat1'];
	$dat=date("d/m/Y",strtotime($dat1)); 	 
		$x1 = mysqli_query($con,"select purchase_date,sum(amount) amn from purchase_daily group by(purchase_date)");
		while($row = mysqli_fetch_array($x1))
		{
		?>
              
              <?php
		}
		?>
          </select></td>
        </tr>
        <?php
	if(isset($dat))
	{
		$x1 = mysqli_query($con,"select purchase_date,sum(amount) amn from purchase_daily group by(purchase_date)");
		while($row = mysqli_fetch_array($x1))
		{
			if($row['purchase_date'] == $dat)
			{
		
		$x2 = mysqli_query($con,"select item_name,amount from purchase_daily where purchase_date = '$dat'");
		while($x3 = mysqli_fetch_array($x2))
		{
	?>
        <tr>
          <th scope="row"><?php echo $x3['item_name'];?></th>
          <td align="center"><?php echo $x3['amount'];?></td>
        </tr>
            <?php 
}
?>
     
        <tr>
          <th scope="row">Total Amount</th>
          <td align="center"><strong>

<?php

$x1 = mysqli_query($con,"select purchase_date,sum(amount) amn from purchase_daily group by(purchase_date)");
			while($row1 = mysqli_fetch_array($x1))
		{
			if($row1['purchase_date'] == $dat)
			{
				echo $row1['amn'];
		
	}
}
$f=0;
}
else
{
	$f=1;
}
}
if($f==1)
{
	echo "<font color=red>No Purchased</font>";
}
}
}		?>
          </strong></td>
        </tr>
      </table></th>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
