<?php
$message="";
if(count($_POST)>0) {
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"miniproject");
if(isset($_REQUEST['contest']))
{
$result = mysqli_query($conn,"Update student set participate='1' where rollnum='".$_COOKIE['rollnum']."'");  
 
	$message = "<br><br><br><br><br><br><br><br><br><br><br><br><br>You are also a contestant of the election now!!!";

echo $message."<br><br><br>";
}
}
?>
<html>
<body>
<form action=p3.php method="post"  >    
<?php
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"miniproject");
$result=mysqli_query($conn,"select name from student where participate='1'");
$count=mysqli_num_rows($result);
$n=$count;
if($n==0){echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><center>no registrations as of now!!!'.'<br><br><br><center>";}
while($row=mysqli_fetch_array($result))
{
    echo"cast your vote";
    echo '<input type="radio" name=radios value="'.$row['name'].'"/>'.$row['name']."<br><br>";
  
}
//echo "<br<<br><br><br><br><br><br><br><br><br><br><br><br><center>cast your vote"."<br><br><br><center>";
?>
       <input type="submit" name="submit" value="Submit"/>
</form> 
</body>
</html>


