

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