<?php
session_start();
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
color:black;
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
img
{
opacity:0.6;
filter:alpha(opacity=40)
border-style:none;
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
<title>Untitled Document</title>
</head>

<body bgcolor="indigo">
<table width="900" border="0" align="center" cellpadding="5" cellspacing="5">
  <tr>
    <th scope="col"><a href="Purchase.php" target="frame2">Purchase</a></th>
    <th scope="col"><a href="stockin.php" target="frame2">Stock-In-Hands</a></th>
    <th scope="col"><a href="stockcon1.php" target="frame2">Stock Consumed</a></th>
  </tr>
  <tr>
    <th scope="col"><a href="stockin.php" target="frame2"></a> <a href="work1.php" target="frame2">Working Progress</a></th>
    <th scope="col"><a href="ex.php" target="frame2">Monthly Projection</a><a href="report.php" target="frame2"></a><a href="stockcon1.php" target="frame2"></a></th>
    <th scope="col"><a href="report.php" target="frame2">Report</a><a href="work1.php" target="frame2"></a></th>
  </tr>
  <tr>
    <th scope="col"><a href="sale_users.php" target="frame2">Sales Executive Form</a></th>
    
    <th scope="col"><a href="sales_target.php" target="frame2">Sales Target Form</a></th>
    
     <th colspan="3" scope="col"><a href="signout.php" target="_top">Sign Out</a></th>
   </tr>
</table>
</body>
</html>
