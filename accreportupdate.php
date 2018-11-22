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