<?php
$ans1=$_POST["r"];
$ans2=$_POST["s"];
$ans3=$_POST["t"];
$ans4=$_POST["u"];
$ans5=$_POST["v"];
$ans6=$_POST["w"];
$ans7=$_POST["x"];
$ans8=$_POST["y"];
$ans9=$_POST["z"];
$ans10=$_POST["a"];

$ans11=$_POST["b"];
$ans12=$_POST["c"];
$ans13=$_POST["d"];
$ans14=$_POST["e"];
$ans15=$_POST["f"];
$ans16=$_POST["g"];
$ans17=$_POST["h"];
$ans18=$_POST["i"];
$ans19=$_POST["j"];
$ans20=$_POST["k"];


$i1=0;
$i2=0;
$i3=0;
$i4=0;
$i5=0;
$i6=0;
$i7=0;
$i8=0;
$i9=0;
$i10=0;

$i11=0;
$i12=0;
$i13=0;
$i14=0;
$i15=0;
$i16=0;
$i17=0;
$i18=0;
$i19=0;
$i20=0;

$t=0;



if($ans1=="personal home page")
{
	echo"true";
	$i1=$i1+5;
}
else
{
	echo"false";
}


if($ans2=="true")
{
	echo"true";
	$i2=$i2+5;
}
else
{
	echo"false";
}


if($ans3=="all of those")
{
	echo"true";
	$i3=$i3+5;
	//$t=$i3;
}
else
{
	echo"false";
}




if($ans4=="rasmus lerdorf")
{
	echo"true";
	$i4=$i4+5;
}
else
{
	echo"false";
}




if($ans5=="false")
{
	echo"true";
	$i5=$i5+5;
}
else
{
	echo"false";
}



if($ans6=="true")
{
	echo"true";
	$i6=$i6+5;
}
else
{
	echo"false";
}



if($ans7=="is_array()")
{
	echo"true";
	$i7=$i7+5;
}
else
{
	echo"false";
}



if($ans8=="rsort()")
{
	echo"true";
	$i8=$i8+5;
}
else
{
	echo"false";
}


if($ans9=="strcasecmp()")
{
	echo"true";
	$i9=$i9+5;
}
else
{
	echo"false";
}



if($ans10=="mysqlid")
{
	echo"true";
	$i10=$i10+5;
}
else
{
	echo"false";
}








if($ans11=="Java Foundation Classes")
{
	echo"true";
	$i11=$i11+5;
}
else
{
	echo"false";
}


if($ans12=="7")
{
	echo"true";
	$i12=$i12+5;
}
else
{
	echo"false";
}


if($ans13=="getID()")
{
	echo"true";
	$i13=$i13+5;
	//$t=$i3;
}
else
{
	echo"false";
}




if($ans14=="ActionListener")
{
	echo"true";
	$i14=$i14+5;
}
else
{
	echo"false";
}




if($ans15=="setText()")
{
	echo"true";
	$i15=$i15+5;
}
else
{
	echo"false";
}



if($ans16=="Choice")
{
	echo"true";
	$i16=$i16+5;
}
else
{
	echo"false";
}



if($ans17=="Label")
{
	echo"true";
	$i17=$i17+5;
}
else
{
	echo"false";
}



if($ans18=="java.applet")
{
	echo"true";
	$i18=$i18+5;
}
else
{
	echo"false";
}


if($ans19=="both B and C")
{
	echo"true";
	$i19=$i19+5;
}
else
{
	echo"false";
}



if($ans20=="Four")
{
	echo"true";
	$i20=$i20+5;
}
else
{
	echo"false";
}

















$t=$i1+$i2+$i3+$i4+$i5+$i6+$i7+$i8+$i9+$i10+$i11+$i12+$i13+$i14+$i15+$i16+$i17+$i18+$i19+$i20;
echo $t;

$no1=20;
$no2=15;
$no3=10;
$no4=7;




if($t>=81 && $t<=100)
{
	
	
	echo"<html><body><h1><center><font color=magenta>CONGRATULATION !!!!!</center></font></h1></body></html>";
	echo"<html><body><h2><font color=green><center>YOU HAVE BEEN PASSED WITH DISTINCTION</center></font></h2></body></html>";
	echo"<html><body><font color=orange><h1><center>YOU HAVE GOT <u><font color=red>". $t ."</font></u> MARKS OUT OF 100</center></h1></font></body></html>";
//	echo"<html><body><img src=.jpg alt=jayesh height=50 width=50></img></body></html>";
	
}
else if($t>=61 && $t<=80)
{
	
	echo"<html><body><h1><center><font color=magenta>CONGRATULATION !!!!!</center></font></h1></body></html>";
	echo "<html><body><h2><font color=green><center>YOU HAVE BEEN  PASSED WITH FIRST CLASS PASSED</center></font></h2></body></html>";
	echo"<html><body><font color=orange><h1><center>YOU HAVE GOT <u><font color=red>". $t ."</font></u> MARKS OUT OF 100</center></h1></font></body></html>";
}
else if($t>=45 && $t<=60) 
{
	
	
		echo"<html><body><h1><center><font color=magenta>CONGRATULATION !!!!!</center></font></h1></body></html>";
	echo "<html><body><h2><font color=green><center>YOU HAVE BEEN  PASSED WITH SECOND CLASS </center></font></h2></body></html>";
	echo"<html><body><font color=orange><h1><center>YOU HAVE GOT <u><font color=red>". $t ."</font></u> MARKS OUT OF 100</center></h1></font></body></html>";
	
}
else if($t>=35 && $t<=44)
{

		echo"<html><body><h1><center><font color=magenta>CONGRATULATION !!!!!</center></font></h1></body></html>";
	echo "<html><body><h2><font color=green><center>YOU HAVE BEEN  PASSED</center></font></h2></body></html>";
	echo"<html><body><font color=orange><h1><center>YOU HAVE GOT <u><font color=red>". $t ."</font></u> MARKS OUT OF 100</center></h1></font></body></html>";
	echo"<html><body><h4><center><font color=red>PLEASE TRY NEXT ATTEMP AFTER PROPER STUDY</center></font></h4></body></html>";
}
else 
{
	echo"fail";
		echo"<html><body><h1><center><font color=red>OOPS !!!!!</center></font></h1></body></html>";
	echo "<html><body><h2><font color=green><center>YOU HAVE BEEN  FAILED</center></font></h2></body></html>";
	echo"<html><body><font color=orange><h1><center>YOU HAVE GOT <u><font color=red>". $t ."</font></u> MARKS OUT OF 100</center></h1></font></body></html>";
	echo"<html><body><h4><center><font color=red>PLEASE TRY NEXT ATTEMP AFTER STUDY</center></font></h4></body></html>";
}




?>