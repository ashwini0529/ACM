
<html>
<body>
	<h4>ACM Member Login</h4>
  <form action="form_login.php" method="GET">

  Name: <input type="text" name="name" />
  Password: <input type="password" name="pass" />

  <input type="submit" />
  </form>

 <h4>ACM Member Register!</h4>
 <form action="form_register.php" method="GET">

  Name:&nbsp; &nbsp;<input type="text" name="name" /><br>
  Password:&nbsp;&nbsp;&nbsp;&nbsp; <input type="password" name="pass" /><br>
  Reg No: <input type ="text" name="regno"><br>
  Category&nbsp;&nbsp;<select name ="category">
  	<option value="Technical" >Technical</option>
 	<option value="Management">Management</option>
  </select>
  <br>
  Gender
  <input type="radio" name="gender" value="MALE">Male</input>
  <input type="radio" name="gender" value="FEMALE">Female</input>
<br>



  <input type="submit" />
  </form>
</body>
</html>