<?php
if(count($_POST)>0) 
{
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"miniproject");
$r1 = mysqli_query($conn,"select name from student order by vote desc limit 1");
echo"<html>
<body><center><h1>G.Narayanamma Institute of Technology and Science </h1>
<center><h2>Department of Information Technology</h2></body></html>
<br><br><br><br><br><br><br><br><br><center>";
while($row=mysqli_fetch_array($r1))
{	
        
	echo $row[0]." is the CR of IT-B as per the voting"."<br><br>";
	
	}	
	
	$r2 = mysqli_query($conn,"select name from student order by vote desc limit 1,1");
while($row=mysqli_fetch_array($r2))
{	
	echo $row[0]." is the respective ICR of IT-B as per the voting";

	}	
}
?>