<?php
 $con=mysqli_connect("localhost","root","","dbblood");
 $query="select * from tblblood where id=$_GET[id]";
 $data=mysqli_query($con,$query );

$r=mysqli_fetch_array($data);

	echo "<form action=update.php method=post>
		  ID:<input type=text name=id value='$r[id]' disabled><br>
		     <input type=hidden name=id value='$r[id]'>
		  Name:<input type=text name=name value='$r[name]'><br>
		  Blood group:<input type=text name=group value='$r[group]'><br>
		  Height:<input type=text name=height value='$r[height]'><br>
		  Weight:<input type=text name=weight value='$r[weight]'><br>
		  <input type=submit value=Update>
	      </form> 
		 ";
 ?>