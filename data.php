<?php
#echo"your username is  :",$_POST["username"];

 $link=mysqli_connect("localhost","root","","demo");
 if(mysqli_connect_errno($link))
 {
	 echo"mysqli database connection failed".mysqli_connect_error();
 }
 if(isset($_POST["submit"])&& $_POST["submit"]!="")
 {
	 $name=$_POST["username"];
	 $pass=$_POST["password"];
	 
	
	 
	 
	 if(mysqli_query($link ,"INSERT INTO con(username ,password ) VALUES($name,$pass)"))
	// {
	 mysqli_query($link ,"SELECT * FROM con");
	 
		 print"record inserted successfully";
	// }
	 
 }	 
 
 
// $query=mysqli_query($link ,"SELECT * FROM con");
 //$data=mysqli_fetch_array($query);
 
// echo $data."<br>";





?>

<html>
<body>
<form action="conn.php" method="POST">
<h1><center><font color="green" size="60">Welcome</font></center></h1>

<h2><center><font color="green" style="background-color:yellow">Click below Button to start test</font></center></h2>
</br>

<center><button color="blue" size="100" style="background-color:green"><input type="submit" name="start test" value="start test"></button></center>
<br>
<center><img src="emoji.jpg" alt="smily" height="200" width="200"></img></center>
<center><h2><font color="lightblue">Best of luck</font></h2></center>
</form>
</body>
</html>
		 
 


