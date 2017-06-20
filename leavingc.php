<!DOCTYPE html>
<html>
<body>
<form method="post" action="finalleavingpage.php";>
First Name:<input type="text" name="fname"><br>
Middle Name:<input type="text" name="mname"><br>
Last Name:<input type="text" name="lname"><br>
Application Date:<input type="text" name="adate"><br>
Phone No.:<input type="text" name="pn"><br>
Date of birth:<input type="text" name="dop"><br>
Branch:<input type="text" name="branch"><br>
Academic year of administration:<input type="text" name="ayear"><br>
Year of passing:<input type="text" name="yearp"><br>
Percantage:<input type="text" name="perc"><br>
Caste:<input type="text" name="caste"><br>
Sub caste:<input type="text" name="subcaste"><br>
1st year /direct second year:<input type="text" name="admtype"><br>
Last school name in full:<input type="text" name="school"><br>
Sign of student :<input type="text" name="signstu"><br>
Sign of HOD:<input type="text" name="signhod"><br>
<!--
<pre>
Attachments:
<form action="upload.php" method="post" enctype="multipart/form-data">
1.B.E Marksheet xerox:<input type="file" name="fileToUpload" id="fileToUpload">
<input type="submit" value="browse" name="submit">
2.B.E Passing certificate:<input type="file" name="fileToUpload" id="fileToUpload">
<input type="submit" value="browse" name="submit">
3.Nationality Proof:<input type="file" name="fileToUpload" id="fileToUpload">
<input type="submit" value="browse" name="submit">
4.Previous Leaving xerox:<input type="file" name="fileToUpload" id="fileToUpload">
<input type="submit" value="browse" name="submit">
</form>
[Office use only]
</pre>
-->
LC No.:<input type="text" name="lcno"><br>
GR No.:<input type="text" name="grno"><br>
Date:<input type="text" name="date"><br>
Delivered To:<input type="text" name="delto"><br>
<input type="submit" name="submit">
<?php
$servername = "localhost";
$user = "root";
$pass= "";
$dbname="hackathon";
$conn = mysqli_connect($servername, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
    $firstname=$_POST['fname'];
    $middlename=$_POST['mname'];
    $lastname=$_POST['lname'];
    $adate=$_POST['adate'];
    $pn=$_POST['pn'];
    $dop=$_POST['dop'];
    $branch=$_POST['branch'];
    $ayear=$_POST['ayear'];
    $yearp=$_POST['yearp'];
    $perc=$_POST['perc'];
    $caste=$_POST['caste'];
    $subcaste=$_POST['subcaste'];
    $admtype=$_POST['admtype'];
    $school=$_POST['school'];
    $signstu=$_POST['signstu'];
    $signhod=$_POST['signhod'];
    $lcno=$_POST['lcno'];
    $grno=$_POST['grno'];
    $date=$_POST['date'];
    $delto=$_POST['delto'];
$sql="INSERT INTO registrationcontrol(,firstname, lastname,password,confirmpassword,gender)
VALUES ('$username','$firstname','$lastname','$password','$confirmpassword','$gender')";
if ($conn->query($sql) == "TRUE") {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
</form>
</body>
</html>
