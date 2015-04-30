<?php  
$conn=mysql_connect("localhost","root","");
$name=$_GET['name'];
$pass=$_GET['pass'];
$regno=$_GET['regno'];
$category=$_GET['category'];
$gender=$_GET['gender'];
$db=mysql_select_db("acm");

$result=mysql_query("insert into php (name,password,regno,category,gender) values('$name','$pass','$regno','$category','$gender')") or die(mysql_error());

if(isset($result)&&isset($conn))
{
	echo "Congratulations! Registered Successfuly!";
	?>

	<a href="index.php">Back</a>
	<?php 
}
else
{
	echo "Some error";
}
?>