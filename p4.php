<?php
$message="";
if(count($_POST)>0) {
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"miniproject");
if(isset($_REQUEST['pt']))
{
$result = mysqli_query($conn,"Update student set participate='1' where rollnum='".$_COOKIE['rollnum']."'");  
 
	$message = "<br<<br><br><br><br><br><br><br><br><br><br><br><br><center>You are also a contestant of the election now!!!";

echo $message."<br><br><br>";
}
}
?>
</body>
</html>


