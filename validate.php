<?php
$message="";
if(date("Y-m-d")<'2018-06-14')
{
if(count($_POST)>0)
{
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"miniproject");
$result = mysqli_query($conn,"SELECT * FROM student WHERE rollnum='" . $_POST["t1"] . "' and password = '". $_POST["t2"]."'");
$count  = mysqli_num_rows($result);
echo"<html>
<body><center><h1>G.Narayanamma Institute of Technology and Science </h1>
<center><h2>Department of Information Technology</h2>
<br><br><br><b>Please note that you can participate or cast until 2018-04-14.</b>

</body></html>";








if($count==0)
{
	$message = "<br><br><br><br><br><br><br><br><br><br><br><br><br>Invalid Username or Password!<center>";
        echo "$message";
} 
else 
{
	$message = "<br><br><br><br><br><br><br><br><br><center>Welcome";
             
           setcookie("rollnum",$_REQUEST['t1']);
           echo $message."</br></br>";
           while($row=mysqli_fetch_array($result))
          {
 		echo "<center><b>Name</b> 		:";
		echo $row['name']."<br>";
		echo "<b>RollNumber</b>		:";
		echo $row['rollnum']."<br>";
		echo "<b>Hobbies,Strengths</b>	:";
		echo $row['hobbies_strengths']."<br><br><br><br>";
		if(($row['voted']!=1)&&($row['participate']!=1))
                {
		  echo "<html>
			<body>
				<form action=p1.php method=POST>
                                <input type ='submit' value ='participate' name='pt' class='button'>
				</form>
				</body>
				</html>";
                }

		if(($row['voted']==1)&&($row['participate']==1))
		{
		    echo" You have already registered for the elections</br>";
		    echo"You also casted your vote";
		}
		else
		{
			if($row['voted']==1)
			{
				echo"You have casted your vote!";
				echo "<html>
				<body>
				<form action=p4.php method=POST>
				<input type ='submit' value ='participate' name='pt'>
				</form>
				</body>
				</html>";
			}
			else
			{
				echo "<html>
				<body>
				<form action=p.php method=POST>
				<input type='submit' value='cast vote' name='cv'><br><br>
				</form>
				</body>
				</html>";
			}
		}
      	 }	
    }
}
}
else
{ 
echo "<br><br><br><br><br><br><br><br><br><center>date for voting and participation has already expired!!!<center>";
echo "<html>
				<body>
				<form action=p5.php method=POST>
				<input type='submit' value='view result' name='vr'><br><br>
				</form>
				</body>
				</html>";
}
?>