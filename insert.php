 <?php
$con=mysqli_connect("localhost","root","","dbblood");
$query  = "INSERT INTO tblblood VALUES ('$_POST[id]', '$_POST[name]', '$_POST[group]', '$_POST[height]', '$_POST[weight]')";

 $data=mysqli_query($con,$query );
 
echo '<meta http-equiv="refresh" content="0;url=http://localhost/blood/viewblood.php">';
?> 