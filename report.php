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