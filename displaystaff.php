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