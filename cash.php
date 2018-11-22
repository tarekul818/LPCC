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