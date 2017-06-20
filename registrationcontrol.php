<?php
$servername = "localhost";
$user = "root";
$pass= "";
$dbname="hackathon";
$conn = mysqli_connect($servername, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
    $username=$_POST['username'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];
    $gender=$_POST['gender'];
$sql="INSERT INTO registrationcontrol(username,firstname, lastname,password,confirmpassword,gender)
VALUES ('$username','$firstname','$lastname','$password','$confirmpassword','$gender')";
if ($conn->query($sql) == "TRUE") {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header('Location:login.php');
?>