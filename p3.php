<?php
if(isset($_REQUEST['radios']))
{
echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><center>You have casted your vote in favour of <center>";
echo $_REQUEST["radios"]."</br>";
$nm=$_REQUEST["radios"];
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"miniproject");
$result=mysqli_query($conn,"Update student set voted='1' where rollnum='".$_COOKIE['rollnum']." '; " );
echo "vote submitted</br>";
$result=mysqli_query($conn," update student set vote=vote+1 where name like '".$nm."';");
}
else
{
echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><center>THANK YOU.....";
}


?>

