<?php  
$conn=mysql_connect("localhost","root","");
$name=$_GET['name'];
$pass=$_GET['pass'];
$db=mysql_select_db("acm");
$sql="select * from php where name='$name' and password='$pass'";
$result=mysql_query($sql,$conn) or die(mysql_error());
$number=mysql_num_rows($result);
if($number==1){
	echo "Congratulations. You have successfully logged in! <br>";
	while ($row=mysql_fetch_array($result)) {
		echo "Name: ".$row['name']."<br>";
		echo "Reg Number: ".$row['regno']."<br>";
		echo "Category: ".$row['category']."<br>";
		echo "Gender: ".$row['gender']."<br>";
		echo "<a href='index.php'>Back</a>";
	}

}
else{
	echo "Sorry! Wrong username or password!   Please try again </br><a href='index.php'>Back to homepage!</a>";
}
?>
