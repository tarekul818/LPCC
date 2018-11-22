<?php



?>

<html>
<head>
<link rel="stylesheet" href="style.css">

</head>

<body>

<?php
include "staffsearch.php";

?>



<?php
 $conn= mysql_connect("localhost", "root","");
  if (!$conn)
  {
	  die ("does not connect:". mysql_error());
  }
  else
  {
	  //echo "connected";
  }
    mysql_select_db("faccount",$conn);
	
	
	  if (isset($_POST['delete']))
		{
			$RemoveQuery="DELETE FROM staff WHERE name='$_POST[hidden]'";
		    mysql_query($RemoveQuery,$conn);
			
			
			
		};
		
		 if(isset($_POST['update']))
			  
			  {
				  
				  $UpdateQuery= "UPDATE staff SET name='$_POST[name]',address='$_POST[address]',gender='$_POST[gender]',mobile='$_POST[mobile]','salary='$_POST[salary]',join='$_POST[join_date]' WHERE name ='$_POST[hidden]'";
				  
				  mysql_query($UpdateQuery,$conn);
				  
				  
			  };
			
	
		
		
		
	$query= "SELECT * FROM staff";
	$mydata= mysql_query($query,$conn);
	
    echo "<table border=3 align=center width=90%> 
      <tr>  
	  <th> Name </th>   
	  <th> Address </th>
	  <th> Gender </th>
	  <th> Mobile </th>
	  <th> Salary </th>
	  <th> Join Date</th>
	 
	  
	  </tr>";	
	while($record=mysql_fetch_array($mydata))/* we took a lots of data thats why we use while loop */
	
	{
        echo "<form action=displaystaff.php method=post>";
        echo "</br>";
    	echo "<tr>";
		
		echo "<td>". $record['name']."</td>";  /// like data base collomn name
		echo "<td>". "<input type=text name=name ".$record['name']." </td>";
		
		echo "<td>". $record['address']."</td>";
		echo "<td>". $record['gender']."</td>";
		echo "<td>". $record['mobile']."</td>";
		echo "<td>". $record['salary']."</td>";
		echo "<td>". $record['join_date']."</td>";
				
		echo "<td>". "<input type=hidden name=hidden value=".$record['name']." </td>";
		echo "<td>". "<input type=submit name=delete value=Remove" ." </td>";
		echo "<td>". "<input type=submit name=update value=update"." </td>";
		echo "</tr>";
	    echo "</form>";
	 
	}
	echo	"</table>";
	 
 ?>
</br></br>
 <center>
 <a href="staff.php "> <input name="back" type="submit" value="BACK" > </a>
 
 </center>


</body>




</html>
<html>


<body>

<p> <center>copyright @ faruk 2018 </center></p>
</body>

</html>
<html>

<head>
  <title>
  LUCKY PHOTOSTATE AND COMPUTER CENTER
  </title>
  
</head>
    <h2><center>  LUCKY PHOTOSTATE AND COMPUTER CENTER </center> </h2>

<body>

</body>

</html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>
LUCKY PHOTOSTATE AND COMPUTER CENTER
</title>
<link rel="stylesheet" href="style.css">
<style>
 body {
	 margin:0;
	 background:url('1.jpg');
	 background-size:cover;
	 
 }
 .nav{
     width:100%;
	 background:#000033;
	 height:100px;
	 margin-top:15px;
	 opacity:0.4;

	 }
 ul {
	 list-style:none;
	 padding:0;
	 margin:0;
	 position:absulate;
	 
 }
 li {
	 float:left;
	 margin-top:30px;
 }
 a {
	 width:200px;
	 color:white;
	 float:right;
	 display:block;
	 text-decoration:none;
	 font-size:20px;
	 text-align:center;
	 padding:10px;
	 border-radious:10px;
	 font-family:Center Gothic;
	 font-weight:bold;
 }
 a:hover{
	background:#669900;
    transition:0.6s;
	
	
 }
 
 .table{
	 width:100%;
	 height:150px;
	 margin-top:15px;
	 
 }
</style>

</head>



<body>

<?php

include 'header.php';

?>

 
 <div class="nav">
 <ul>
 <li> <a href="index.php"> Home </a></li>
 <li> <a href="account.php"> Account </a></li>
 <li> <a href="report.php"> Report </a></li>
 <li> <a href="staff.php"> Staff </a></li>
 </ul>
 </div>
 </br> </br> </br>


</body>

<?php

include 'footer.php';

?>
</html>
<?php



?>

<html>
<head>


</head>

<body>

<?php
include "search.php";

?>



<?php
 $conn= mysql_connect("localhost", "root","");
  if (!$conn)
  {
	  die ("does not connect:". mysql_error());
  }
  else
  {
	  //echo "connected";
  }
    mysql_select_db("faccount",$conn);
	
	
	  if (isset($_POST['delete']))
		{
			$RemoveQuery="DELETE FROM account WHERE name='$_POST[hidden]'";
		    mysql_query($RemoveQuery,$conn);
			
			
			
		};
		
	$query= "SELECT * FROM account";
	$mydata= mysql_query($query,$conn);
	
    echo "<table border=3 align=center width=90%> 
      <tr>  
	  <th> Name </th>
	  <th> Date </th>
	  <th> Day </th>
	  <th> Previous value </th>
	  <th> Computer </th>
	  <th> Bikas</th>
	  <th> Photostate </th>
	  <th> Others </th>
	  <th> Spent </th>
	  <th> Total </th>
	  <th> Cash </th>
	  <th> Booklet </th>
	  <th> Electricity Bill </th>
	  <th> Second Total</th>
	  <th> Total Balance </th>
	  <th> Entry Time </th>
	  
	  </tr>";	
	while($record=mysql_fetch_array($mydata))/* we took a lots of data thats why we use while loop */
	
	{
        echo "<form action=report.php method=post>";
        echo "</br>";
    	echo "<tr>";
		
		echo "<td>". $record['name']."</td>";
		echo "<td>". $record['date']."</td>";
		echo "<td>". $record['day']."</td>";
		echo "<td>". $record['previous_value']."</td>";
		echo "<td>". $record['computer']."</td>";
		echo "<td>". $record['bikas']."</td>";
		echo "<td>". $record['photostate']."</td>";
		echo "<td>". $record['others']."</td>";
		echo "<td>". $record['spent']."</td>";
		echo "<td>". $record['total']."</td>";
		echo "<td>". $record['cash']."</td>";
		echo "<td>". $record['booklet']."</td>";
		echo "<td>". $record['electricity_bill']."</td>";
		echo "<td>". $record['second_total']."</td>";
		echo "<td>". $record['total_balance']."</td>";
		echo "<td>". $record['entry_time']."</td>";
		
		echo "<td>". "<input type=hidden name=hidden value=".$record['name']." </td>";
		echo "<td>". "<input type=submit name=delete value=Remove"." </td>";
		echo "</tr>";
	    echo "</form>";
	 
	}
	echo	"</table>";
	 
 ?>
</br></br>
 <center>
 <a href="account.php "> <input name="back" type="submit" value="BACK" > </a>
 
 </center>


</body>




</html>


<html>

<body>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
    <center>
	<table width="25%"  border="0" align="right">
    <tr>
	   <th> 
	    <input name="search" type ="date">
		<input type="submit"  name="search_text" value="search">
	   </th>
	</tr>
	</table>
	</center>
</form>

</br></br></br></br>
<?php

mysql_connect ("localhost","root","")or die ("could not connect") ;
mysql_select_db("faccount") or  die ("could not find db ! ");

$output="";
//collect
if (isset($_POST['search']))
{
	$searchq= $_POST['search'];
	$searchq= preg_replace("#[^0-9a-z/-]#i","",$searchq);
	
	$query= mysql_query("SELECT * FROM account WHERE date LIKE '%$searchq%'") or die ("could not search");
	$count= mysql_num_rows($query);
	
	
	echo "<table border=3 align=center width=90% > 
     <tr>  
	  <th> Name </th>
	  <th> Date </th>
	  <th> Day </th>
	  <th> Previous value </th>
	  <th> Computer </th>
	  <th> Bikas</th>
	  <th> Photostate </th>
	  <th> Others </th>
	  <th> Spent </th>
	  <th> Total </th>
	  <th> Cash </th>
	  <th> Booklet </th>
	  <th> Electricity Bill </th>
	  <th> Second Total</th>
	  <th> Total Balance </th>
	  <th> Entry Time </th>
	  
	  
	  </tr>";	
	if ($count == 0)
	{
		$output='there was no search result !';
	}
	else
	{
		while ($row = mysql_fetch_array($query))
		{
	/*  $name=$row['name'];
	  $date=$row['date'];
	  $day=$row['day'];
	  $pv=$row['previous_value'];
	  $com= $row['computer'];
	  $bik= $row ['bikas'];
	  $pho=$row ['photostate'];
	  $oth= $row['others'];
	  $spe= $row ['spent'];
	  $total = $row ['total'];
	  $total = $row ['cash'];
	  $total = $row ['booklet'];
	  $total = $row ['electricity_bill'];
	  $total = $row ['second_total'];
	  $total = $row ['total_balance'];
	  $total = $row ['entry_time'];
	  */
	  echo "<tr>";
		echo "<td>". $row['name']."</td>";
		echo "<td>". $row['date']."</td>";
		echo "<td>". $row['day']."</td>";
		echo "<td>". $row['previous_value']."</td>";
		echo "<td>". $row['computer']."</td>";
		echo "<td>". $row['bikas']."</td>";
		echo "<td>". $row['photostate']."</td>";
		echo "<td>". $row['others']."</td>";
		echo"<td>".  $row ['spent']. "</td>";
		echo "<td>". $row['total']."</td>";
		echo "<td>". $row['cash']."</td>";
		echo "<td>". $row['booklet']."</td>";
		echo "<td>". $row['electricity_bill']."</td>";
		echo "<td>". $row['second_total']."</td>";
		echo "<td>". $row['total_balance']."</td>";
		echo "<td>". $row['entry_time']."</td>";
		
		echo "<td>". "<input type=submit name=print value=Print"." </td>";
		echo "</tr>";
		
	  
	  
	 // $output .= '<div>'. '<tr>'.$name .'</br>'. $date.''.$day.''.$pv.''.$com.''.$bik.''.$pho.''.$oth.''.$total.'</div>';
		}
	}
	
}

?>



<!--<?php print("$output"); ?>  -->
</body>




</html>

<?php
session_start();



?>



<html>
<head>
<title>STAFF RAGISTRATION FORM </title>
<link rel="stylesheet" href="style.css">
<style>
body {
	 margin:0;
	 background:url('2.jpg');
	 background-size:cover;
	 
 }

#ragistration{
	width:100%;
	 
	 height:100px;
	 margin-top:15px;
}
h2{
	color:black;
	
}


</style>
</head>
<body>
    <div id ="form-wrapper">
	   
	   <div id="form">
          <center>  <h2> STAFF RAGISTRATION FORM <h2> </center>
	   </div>	
	   
	   <div id ="ragistration">
	   <center>
	     <form class="myform" action="staff.php" method="post">
		 <table width="50%" border="3">
		 <tr>
		 <th>
		  <label>Full Name:</label>
		  <input name="name"class="fullname" type="text" placeholder="please enter the name" required style="color:black;background-color:linen;opacity:0.8;height:30px;"><br><br> </th>
		  <th>
		  <label>Address:</label>
		  <input name="address"class="address" type="text-area" rows="5" placeholder="please enter the address" required style="color:black;background-color:linen;opacity:0.8;height:30px;"><br><br>
		  </th>
		  </tr>
		  <tr>
		  <th>
		  <label>Gender:</label>
		  <input name="gender"class="gender" type="radio" required > male
		  <input name="gender"class="gender1" type="radio" required > female <br><br> </th>
		  <th>
		  <label>Mobile:</label>
		  <input name="mobile" class="mobile" type="text" placeholder="please enter the mobile number" required style="color:black;background-color:linen;opacity:0.8;height:30px;"><br><br>
		  </th>
		  </tr>
		  <tr>
		  <th>
		  <label>Salary</label>
		  <input name="salary"class="salary" type="text" placeholder="please enter the salary" required style="color:black;background-color:linen;opacity:0.8;height:30px;"><br><br></th>
		  <th>
		  <label>Join Date:</label>
		  <input name="join"class="joindate" type="date" placeholder="please enter the join date" required style="color:black;background-color:linen;opacity:0.8;height:30px;" ><br><br>
		  </th>
		  </tr>
		  
		  
		  </table>
		  </br></br>
		  <table width="30%" border="1">
		  <th>
		  <input name="submit_btn"class="submit_btn" type="submit" value="SUBMIT" style="height:30px" /> </th>
		  <th>
		    <a href="index.php"><input name="back_btn"class="back_btn" type="submit" value="BACK" style="height:30px"/> </th>
			<th>
		  <a href="displaystaff.php"><input name="back_btn"class="back_btn" type="submit" value="DISPLAY" style="height:30px"/> </th>
		  
		  </table>
		  
		 </form> 
		 </center>
	 <?php
		   
		   if(isset($_POST['submit_btn']))
		   {
			   
			   
			   $conn=mysql_connect("localhost","root","");/* connect with database*/
			   mysql_select_db("faccount",$conn);  /* select the (again) database*/
			   
			   
			   $query="INSERT INTO staff (name, address, gender, mobile, salary, join_date) VALUES ('$_POST[name]', '$_POST[address]', '$_POST[gender]', '$_POST[mobile]', '$_POST[salary]', '$_POST[join]')";
			   
			   mysql_query($query,$conn);
			   
			   echo'<script type="text/javascript"> aleart("registered") </script>';
			   $_SESSION['message']="registered";
			   $_SESSION['name']=$name;
			   
			   header("location:staff.php");
		   
		   
		   }
		 ?>
		  
		</div>
		

	</div>
</body>
</br></br></br></br></br></br></br></br></br></br>
<?php
include "footer.php";
?>

</html>


<html>

<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
    <center>
	<table width="25%"  border="0" align="right">
    <tr>
	   <th> 
	    <input name="search" type ="text">
		<input type="submit"  name="search_text" value="search">
	   </th>
	</tr>
	</table>
	</center>
</form>

</br></br></br></br>
<?php

mysql_connect ("localhost","root","")or die ("could not connect") ;
mysql_select_db("faccount") or  die ("could not find db ! ");

$output="";
//collect
if (isset($_POST['search']))
{
	$searchq= $_POST['search'];
	$searchq= preg_replace("#[^0-9a-z/-]#i","",$searchq);
	
	$query= mysql_query("SELECT * FROM staff WHERE name LIKE '%$searchq%'") or die ("could not search");
	$count= mysql_num_rows($query);
	
	
	echo "<table border=3 align=center width=90% > 
     <tr>  
	  <th> Name </th>   
	  <th> Address </th>
	  <th> Gender </th>
	  <th> Mobile </th>
	  <th> Salary </th>
	  <th> Join Date</th>
	 
	  
	  </tr>";	
	if ($count == 0)
	{
		$output='there was no search result !';
	}
	else
	{
		while ($row = mysql_fetch_array($query))
		{
	  
	  
	  
	  echo "<tr>";
		echo "<td>". $row['name']."</td>";  /// like data base collomn name
		echo "<td>". $row['address']."</td>";
		echo "<td>". $row['gender']."</td>";
		echo "<td>". $row['mobile']."</td>";
		echo "<td>". $row['salary']."</td>";
		echo "<td>". $row['join_date']."</td>";
		
		echo "<td>". "<input type=submit name=print value=Print"." </td>";
		echo "</tr>";
		
	  
	  
	 // $output .= '<div>'. '<tr>'.$name .'</br>'. $date.''.$day.''.$pv.''.$com.''.$bik.''.$pho.''.$oth.''.$total.'</div>';
		}
	}
	
}

?>



<!--<?php print("$output"); ?>  -->
</body>




</html>



<?php
session_start();

?>
<?php

$r="";
$name="";
$date="";
$day="";
$pv="";
$com="";
$bik="";
$pho="";
$oth="";
$spe="";

$r2="";
$cash="";
$booklet="";
$ebill="";

$r3="";

if (isset($_POST['s3']))
{

      $name=$_POST["name"];
	  $date=$_POST["date"];
	  $day=$_POST["day"];
	  $pv=$_POST["pv"];
	  $com=$_POST["com"];
	  $bik=$_POST["bik"];
	  $pho=$_POST["pho"];
	  $oth=$_POST["oth"]; 
	  $spe=$_POST["spe"];
	      
	   $r=($pv+$com+$bik+$pho+$oth)-$spe;


      $r2="";
	  $cash="";
	  $booklet="";
	  $ebill="";


      $cash=$_POST["cash"];
	  $booklet=$_POST["booklet"];
	  $ebill=$_POST["ebill"];
	  $r2=($cash+$booklet)-$ebill;
	  
	  
	  $r3= $r-$r2;

}
?>


<html>
<head>
 <style>
 body {
	 margin:0;
	 background:url('2.jpg');
	 background-size:cover;
	 
 }
 .form{
	 
	 
	  width:100%;
	 
	 height:100px;
	 margin-top:15px;
	 
 }

</style>

</head>


<body>
<?php
include "header.php";
//include "db.php";
?>

<div class="form">

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >

<center>
<table style ="width:30%"  border="2">
Name :<input name="name" type="text" placeholder="please enter values" value="<?php echo ($name); ?>" required style="color:black;background-color:linen;opacity:0.8;height:30px;" > 
Date: <input name="date" type="date" value="<?php echo ($date); ?>" required  style="color:black;background-color:linen;opacity:0.8;height:30px;" >
Day:  <select name="day" type=" option"placeholder="choose the option" value="<?php echo ($day); ?>" style="color:black;background-color:linen;opacity:0.8;height:30px;">
      <option value="fri">Friday </option>
	  <option value="sat">Saturday </option>
	  <option value="sun">Sunday </option>
	  <option value="mon">Monday </option>
	  <option value="tue">Tuesday </option>
	  <option value="wed">Wedneday </option>
	  <option value="thu">Thusday </option>
</table>
</center>




<center></br></br></br></br>
<table style ="width:50%"  border="2">
<tr>
 <th>Previous Value:<input name="pv" type="text" placeholder="please enter values" value="<?php echo ($pv); ?>" required style="color:black;background-color:linen;opacity:0.8;height:30px;" ></th>
 <th>Computer :<input name="com" type="text" placeholder="please enter values" value="<?php echo ($com); ?>" required style="color:black;background-color:linen;opacity:0.8;height:30px;"> </th>
 
 
 <th>Bikas :<input name="bik" type="text" placeholder="please enter values" value="<?php echo ($bik); ?>" required style="color:black;background-color:linen;opacity:0.8;height:30px;"></th> 
 <th>Photostate:<input name="pho" type="text" placeholder="please enter values" value="<?php echo ($pho); ?>" required style="color:black;background-color:linen;opacity:0.8;height:30px;"></th>
 </tr> 
 
  <tr>
  <th>Others:<input name="oth" type="text" placeholder="please enter values"value="<?php echo ($oth); ?>" required style="color:black;background-color:linen;opacity:0.8;height:30px;" ></th>
  <th> Spent: <input name="spe" type ="text" placeholder="please enter value " value="<?php echo ($spe); ?>" required style="color:black;background-color:linen;opacity:0.8;height:30px;"></th>
  
  
 <th> <input name="s1" type="submit" value="First Total" style="height:30px;"><input name="total" type="text" value="<?php echo ($r); ?> "style="height:30px;">    </th> 
  </tr>
  </table>
 </center>
 </br>
 <center>
     <table style ="width:50%"  border="2">
	 <tr>
	 <th>
	 Cash: <input name="cash" type="text" placeholder="please enter the values" value="<?php echo ($cash);    ?>"required style="color:black;background-color:linen;opacity:0.8;"></th>
	 <th>
	 Booklet: <input name="booklet" type="text" placeholder="please enter the values" value="<?php echo ($booklet);   ?>"required style="color:black;background-color:linen;opacity:0.8;">
	 </th>
	 
	 <th>
	 Electricity Bill: <input name="ebill" type="text" placeholder="please enter the values" value="<?php echo ($ebill) ;  ?>"required style="color:black;background-color:linen;opacity:0.8;"></th>
	 <th>
	 <input name="s2" type="submit" value="second Total" style="height:30px;"> <input name="second_total" type="text" value="<?php echo ($r2); ?> "style="height:30px;">
	 </th>
	 </tr>
	</table> 
 </center>
 </br>
 
 <center>
     <table style ="width:30%"  border="2">
        <tr>
		<th>
		<input name="s3" type="submit" value="Total Balance" style="height:30px;"> <input name="total_balance" type="text" value="<?php  echo ($r3);?>" style="height:30px;">
		</th>
		</tr>
	 </table>
 </center>
 
 
 </br>
 
 <center>
  
 <a href="index.php"> <input name="back" type="submit" value="BACK" style="color:black;background-color:linen; font-weight:bold;height:30px;"></a>
  <input name="submit_btn" type="submit" value="SUBMIT" style="color:black;background-color:linen; font-weight:bold;height:30px;">
   
   <th>
   <input name="cash" type="submit" value="TODAY CASH" style="color:black;background-color:linen; font-weight:bold;height:30px;">
   </th>
   
  </center>
  
  
</form>
 
</div>

<?php
  if(isset($_POST['submit_btn']))
  {
	  
	  $pv=$_POST["pv"];
	  $com=$_POST["com"];
	  $bik=$_POST["bik"];
	  $pho=$_POST["pho"];
	  $oth=$_POST["oth"];
	  $spe=$_POST["spe"];
	  $cash=$_POST["cash"];
	  $booklet=$_POST["booklet"];
	  $ebill=$_POST["ebill"];
	//  $total=$_POST["total"];
	 $total=($pv+$com+$bik+$pho+$oth)-$spe;
	 $second_total=($cash+$booklet)-$ebill;
	 $total_balance=$total-$second_total;
	  
	  
	  
	  
	  $conn=mysql_connect("localhost","root","") ;
	  // Check connection
    if (!$conn) 
	{
    die("Connection failed: " . $conn->connect_error);
       }
    // echo "Connected successfully";

     mysql_select_db("faccount",$conn);
	 
	 $query= "INSERT INTO account (name,date,day,previous_value,computer,bikas,photostate,others,spent,total,cash,booklet,electricity_bill,second_total,total_balance,entry_time)VALUES('$_POST[name]','$_POST[date]','$_POST[day]','$pv','$com','$bik','$pho','$oth','$spe','$total','$cash','$booklet','$ebill','$second_total','$total_balance', NOW())"; 
	
	$res = mysql_query($query,$conn);
	if($res){
		echo'<script type="text/javascript"> aleart("registered") </script>';
	}else{
		echo"error". mysql_error();
	}
	
	
			   $_SESSION['message']="data has been inserted";
			   $_SESSION['name']=$name;
			   
			   header("location:index.php");
	  
  }

?>

</body>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
<?php
include "footer.php";
?>
</html>
<html>

<head>
  
</head>

<body>

<table width="90%" border="3" align="center">
  <tr>
    <th scope="col">WELCOME TO SOTOTA GENERAL HOSPITAL </th>
  </tr>
</table>

</br>


<?php



	
//*database connection *//

$conn=mysql_connect("localhost","root","");

//*database connection *//


mysql_select_db("faccount",$conn); /* select database */

 if(isset($_POST['update']))   /* function for update data*/
 {
	 
	$UpdateQuery= "UPDATE staff SET name='$_POST[name]',date='$_POST[date]',day='$_POST[day]',pv='$_POST[pv]', com='$_POST[com]',bik='$_POST[bik]',pho='$_POST[pho]',oth='$_POST[oth]',spe='$_POST[spe]',cash='$_POST[cash]',booklet='$_POST[booklet]',ebill='$_POST[ebill]' WHERE Name='$_POST[hidden]'";
    mysql_query($UpdateQuery,$conn);
 
 };  /* function for updata finish */
 
 $sql= " SELECT* FROM account";   /* to showing update table */
	   
$display=mysql_query($sql,$conn);   /* to showing update table */

/* table specification  table row indentify table header identify  */
echo "<table border=9 align=center width=40%> 
       <tr>  
	  <th> Name </th>
	  <th> Date </th>
	  <th> Day </th>
	  <th> Previous value </th>
	  <th> Computer </th>
	  <th> Bikas</th>
	  <th> Photostate </th>
	  <th> Others </th>
	  <th> Spent </th>
	  <th> Total </th>
	  <th> Cash </th>
	  <th> Booklet </th>
	  <th> Electricity Bill </th>
	  <th> Second Total</th>
	  <th> Total Balance </th>
	  <th> Entry Time </th>
	  
	  </tr>";	

while($record=mysql_fetch_array($display))/* we took a lots of data thats why we use while loop */
	
	{
		echo "<form action=accreportupdate.php method=post>";
		echo"<tr>";
		echo "<td>". "<input type=text name=name value=".$record['name']." </td>";
		echo "<td>". "<input type=text name=date value=".$record['date']." </td>";
		echo "<td>". "<input type=text name=day value=".$record['day']." </td>";
		echo "<td>". "<input type=text name=pv value=".$record['previous_value']." </td>";
		echo "<td>". "<input type=text name=com value=".$record['computer']." </td>";
		echo "<td>". "<input type=text name=bik value=".$record['bikas']." </td>";
		echo "<td>". "<input type=text name=pho value=".$record['photostate']." </td>";
		echo "<td>". "<input type=text name=oth value=".$record['others']." </td>";
		echo "<td>". "<input type=text name=spe value=".$record['spent']." </td>";
		echo "<td>". "<input type=text name=total value=".$record['total']." </td>";
		echo "<td>". "<input type=text name=cash value=".$record['cash']." </td>";
		echo "<td>". "<input type=text name=booklet value=".$record['booklet']." </td>";
		echo "<td>". "<input type=text name=ebill value=".$record['electricity_bill']." </td>";
		echo "<td>". "<input type=text name=second_total value=".$record['second_total']." </td>";
		echo "<td>". "<input type=text name=total_balance value=".$record['total_balance']." </td>";
		
		echo "<td>". "<input type=submit name=update value=update"." </td>";
		echo"</tr>";
		echo "</form>";
		/*
		
		echo $record['Topic']."".$record['Name']."".$record['Attendance']; /* these for vertical display*/ 
	/*	echo "</br>";
		echo $record['Name'];   /* these for horizontal display*/
		 /*echo "</br>";
		echo $record['Attendance']; */ 
		/* echo "</br>";*/
	}
	    
				
	echo	"</table>";
		
mysql_close($conn);


?>




</body>

</html>
<?php
         $name="";
         $date="";
         $day="";
         $thousand="";
		 $five="";
		 $hundred="";
		 $fifty="";
		 $twenty="";
		 $ten="";
		 $fivee="";
		 $two="";
		 $one="";
		 $total="";
		 $r="";
		 
	if(isset($_POST['submit']))
		 {
	      $name=$_POST["name"];
	      $date=$_POST["date"];
	      $day=$_POST["day"];
		 $thousand=$_POST["thousand"];
		 $five=$_POST["five"];
		 $hundred=$_POST["hundred"];
		 $fifty=$_POST["fifty"];
		 $twenty=$_POST["twenty"];
		 $ten=$_POST["ten"];
		 $fivee=$_POST["fivee"];
		 $two=$_POST["two"];
		 $one=$_POST["one"];
		 $r=($thousand*1000)+($five*500)+($hundred*100)+($fifty*50)+($twenty*20)+($ten*10)+($fivee*5)+($two*2)+($one*1);
		 }



?>
<html>
<head>

<head>

<body>

<center>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >

<center>
<table style ="width:30%"  border="2">
Name :<input name="name" type="text" placeholder="please enter values" value="<?php echo ($name); ?>" required style="color:black;background-color:linen;opacity:0.8;height:30px;" > 
Date: <input name="date" type="date" value="<?php echo ($date); ?>" required  style="color:black;background-color:linen;opacity:0.8;height:30px;" >
Day:  <select name="day" type=" option"placeholder="choose the option" value="<?php echo ($day); ?>" style="color:black;background-color:linen;opacity:0.8;height:30px;">
      <option value="fri">Friday </option>
	  <option value="sat">Saturday </option>
	  <option value="sun">Sunday </option>
	  <option value="mon">Monday </option>
	  <option value="tue">Tuesday </option>
	  <option value="wed">Wedneday </option>
	  <option value="thu">Thusday </option>
</table>
</center>

</br></br></br></br>

<center>

   <table border="3" width="50%">
    <tr>
      <th>1000*<input type="text" name="thousand" style="color:black;background-color:linen;opacity:0.8;height:30px;"></th>
	  <th>500* <input type="text" name="five" style="color:black;background-color:linen;opacity:0.8;height:30px;"></th>
	  <th>100* <input type="text" name="hundred" style="color:black;background-color:linen;opacity:0.8;height:30px;"></th>
	  <th>50* <input type="text" name="fifty" style="color:black;background-color:linen;opacity:0.8;height:30px;"></th>
    </tr>
	
	<td>
      <th>20* <input type="text" name="twenty" style="color:black;background-color:linen;opacity:0.8;height:30px;"></th>
	  <th>10* <input type="text" name="ten" style="color:black;background-color:linen;opacity:0.8;height:30px;"></th>
	  <th>05* <input type="text" name="fivee" style="color:black;background-color:linen;opacity:0.8;height:30px;"></th>
	  <th>2* <input type="text" name="two" style="color:black;background-color:linen;opacity:0.8;height:30px;"></th>
    </td>
	
	<td>
      <th>  01*    <input type="text" name="one" style="color:black;background-color:linen;opacity:0.8;height:30px;"></th>
	  <th><input name="submit" type="submit" value="TODAY CASH" style="height:30px;"><input name="ftotal" type="text" style="height:30px;" value="<?php  echo ($r);?>"> </th>
	  
    </td>
   
   </table>
</center>   
  <!-- <input name="submit_btn" type="submit" value="SUBMIT" style="color:black;background-color:linen; font-weight:bold;height:30px;">  -->
  </br></br></br>
  <a href="account.php"> <input name="back" type="submit" value="BACK" style="color:black;background-color:linen; font-weight:bold;height:30px;"></a>  
 </form>
 </center>
 
 <?php

     if (isset($_POST['ftotal']))
	 {
		 $name=$_POST["name"];
	      $date=$_POST["date"];
	      $day=$_POST["day"]; 		 
		 $thousand=$_POST["thousand"];
		 $five=$_POST["five"];
		 $hundred=$_POST["hundred"];
		 $fifty=$_POST["fifty"];
		 $twenty=$_POST["twenty"];
		 $ten=$_POST["ten"];
		 $fivee=$_POST["fivee"];
		 $two=$_POST["two"];
		 $one=$_POST["one"];
		 $total=($thousand*1000)+($five*500)+($hundred*100)+($fifty*50)+($twenty*20)+($ten*10)+($fivee*5)+($two*2)+($one*1);
		 
		 $conn=mysql_connect("localhost","root","");/* connect with database*/
			   mysql_select_db("faccount",$conn);  /* select the (again) database*/
			   
			   
			   $query="INSERT INTO cash (name, date, day, 1000*, 500*, 100*,50*,20*,10*,5*,2*,1*,total) VALUES ('$name', '$date', '$day', '$thousand', '$five', '$hundred','$fifty','twenty','ten','fivee','two','one','total')";
			   
			   mysql_query($query,$conn);
			   
			   echo'<script type="text/javascript"> aleart("registered") </script>';
			   $_SESSION['message']="registered";
			   $_SESSION['name']=$name;
			   
			   header("location:cash.php");
		 
	 }
 
 
 
?> 
</body>


</html>
<?php

   $conn=mysql_connect("localhost","","") ;
	// Check connection
    if (!$conn) 
	{
    die("Connection failed: " . $conn->connect_error);
       }
     echo "Connected successfully";

     mysql_select_db("faccount",$conn);
?>
