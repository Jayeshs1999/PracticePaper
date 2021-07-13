
<?php
 /*$link=mysqli_connect("localhost","root","","demo");
 if($link==false)
	 
 {
	 die("ERROR: could not connect ".mysqli_connect_error());
 }
 echo"connect succesfully . Host info :".mysqli_get_host_info($link);
// mysqli_close($link);
 
 
 
 $sql="CREATE TABLE per(id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, firstname VARCHAR(30) NOT NULL)";

 
 if(mysqli_query($link,$sql))
 {
	 echo"table create succesfully";
 }
 else
 {
	 echo"ERROR : could not connect to execute $sql.".mysqli_error($link);
 }
 
 */
 
 //$dbconn=mysql_connect("localhost","jayesh");
 
// mysql_select_db("my_database",$dbconn);
 
 ?>
<html>
<head>
<title>online exam</title>

</head>
<body bgcolor>

<form action="data.php" method="POST">


<h4> .</h4>
<hr size="10" color="orange"></br>
<h1><center><font color="black" ><b>T.Y.BSC ONLINE EXAMINATION 2020</b></font></center></h1>
<hr size="5" color="green"></br>
 <h3><font align="left">DATE :29 may 2020  Friday</font align></h3>

<h3><marquee><font color="red">this are the collage online test for practice</font></marquee></h3>
<p>.</p>
<p>.</p>
<pre>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b> USERNAME:  </b><input type="username"  name="username" required></br>


&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b> PASSWORD:  </b><input type="password"  name="password" required></br>



&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="submit" name="submit" value="submit"></br>
 

</pre></body>
</html>
<?php
 $link=mysqli_connect("localhost","root");
 if($link==false)
	 
 {
	 die("ERROR: could not connect ".mysqli_connect_error());
 }
 echo"connect succesfully . Host info :".mysqli_get_host_info($link);
 
 ?>