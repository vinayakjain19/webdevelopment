<html>

<body>
<form method="post" action="login.php">
Username:<input type="text" name="username"><br>
Password:<input type="password" name="password"><br>
<input type="submit">
<?php
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "hackathon";
$dbhandle=new mysqli($servername,$user,$pass,$dbname) or die("could not connect to database");
if(isset($_POST['username'])&&isset($_POST['password']))
{$username=$_POST['username'];
$password=$_POST['password'];
$query="SELECT *FROM registrationcontrol WHERE username='$username'&& password='$password'";
$result=$dbhandle->query($query);
if($result->num_rows>0)
{header('Location:leavingc.php');
}
else
{echo "<h1>there is no such login id please register first or else check the username</h1> "."<br>" ;
echo '<a href="registration.php">Registration</a>' ;
}
}
?>
</form>
</body>
</html>