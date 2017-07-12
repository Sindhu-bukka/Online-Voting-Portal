<?php
$message="";
if(count($_POST)>0) {
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"miniproject");
$result = mysqli_query($conn,"SELECT * FROM student WHERE participate='1'");
$count  = mysqli_num_rows($result);
if($count==0)
 {
	$message = "No registrations as of now";
} 
else 
{
	$message = $count.'   number of registrations as of now!!';
}
echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><center>$message.<br><br><br>";
while($row=mysqli_fetch_array($result))
 {
echo "<b>Name</b> 		:";
echo $row['name']."<br>";
echo "<b>RollNumber</b>		:";
echo $row['rollnum']."<br>";
echo "<b>Hobbies,Strengths</b>	:";
echo $row['hobbies_strengths']."<br><br><br><br>";
}


echo"<html>
<body>
<form action=p2.php method=POST>
<input type ='submit' value ='contest' name='contest' >
</form >
</body>
</html>";
}
?>