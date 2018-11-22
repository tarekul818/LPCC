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