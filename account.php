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