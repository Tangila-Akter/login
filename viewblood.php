<?php
$con = new mysqli("localhost", "root", "", "dbblood");
$sql = "select * from tblblood";
$result=mysqli_query($con,$sql);

  echo "<table border=1>
		<tr><th> ID</th>
		    <th> Name</th>
			<th>Blood group</th>
			<th>Height</th>
			<th>Weight</th>
			<th>Action<th>
		</tr>";		
  while ($row=mysqli_fetch_array($result))
    {
		echo "<tr>
			<td>$row[id]</td>
		    <td>$row[name]</td>
			<td>$row[group]</td>
			<td>$row[height]</td>
			<td>$row[weight]</td>
			<td><a href='delete.php?id=$row[id]'>Delete</a><br>
			    <a href='updateform.php?id=$row[id]'>Update</a> 
			</td>
		    </tr>";	
	}
	echo "</table>";
  
  
  echo "<br>New Registration? <a href=form.php>Click here</a>.";
?>
