<?php
$con=mysqli_connect("localhost","root","","dbblood");
$sql = "delete from tblblood where id=$_GET[id]";
mysqli_query($con,$sql);
echo '<meta http-equiv="refresh" content="0;url=http://localhost/blood/viewblood.php">';
?>