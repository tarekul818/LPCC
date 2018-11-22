

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