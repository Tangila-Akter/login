<?php
 $con=mysqli_connect("localhost","root","","dbblood");
 $query="update tblbloodr set name='$_POST[name]', group='$_POST[group]', height='$_POST[height]', weight='$_POST[weight]' where id=$_POST[id]";
 $data=mysqli_query($con,$query );
 
 echo "<meta http-equiv=refresh content=0;http://localhost/blood/viewblood.php>";
 ?>