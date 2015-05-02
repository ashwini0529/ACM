
<html>
<body>
	<h2>ACM Member Login</h2>
  <form action="form_login.php" method="GET">

  Name: <input type="text" name="name" />
  Password: <input type="password" name="pass" />

  <input type="submit" />
  </form>

 <h2>ACM Member Register!</h2>
 <form action="form_register.php" method="GET">

  Name:&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<input type="text" name="name" /><br><br>
  Password:&nbsp;&nbsp;&nbsp;&nbsp; <input type="password" name="pass" /><br><br>
  Reg No: &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<input type ="text" name="regno"><br><br>
  Category&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<select name ="category">
  	<option value="Technical" >Technical</option>
 	<option value="Management">Management</option>
  </select>
  <br><br>
  Gender
  <input type="radio" name="gender" value="MALE">Male</input>
  <input type="radio" name="gender" value="FEMALE">Female</input>
<br><br>



  <input type="submit" />
  </form>
</body>
</html>
