<?php

  $servername = "localhost";
$user = "root";
$pass= "";
$dbname="hackathon";
$db= mysqli_connect($servername, $user, $pass, $dbname);
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);}
     $sql="SELECT *FROM leavingc";

 $run=$db->query($sql);
 $num=mysqli_num_rows($run);
 $row=mysqli_fetch_array($run, MYSQLI_ASSOC);
 //$yana =  $row['staff_id'];
 //echo "dd".$yana;

 echo "<table >
  <tr>
<td>firstname</td>
<td>middlename</td>
<td>lastname</td>
<td>appdate</td>
<td>phoneno</td>
<td>dop</td>
<td>branch</td>
<td>academicyear</td>
<td>percentage</td>
<td>caste</td>
<td>subcaste</td>
<td>admtype</td>
<td>school</td>
<td>lcno</td>
<td>grno</td>
<td>date</td>
    
  </tr>";
$results = $db->query($sql);
  while($row = $results->fetch_assoc())
  {
echo "<tr>";
echo "<td>".$row['firstname']."</td>";
echo "<td>".$row['middlename']."</td>";
echo"<td>".$row['lastname']."</td>";
echo"<td>".$row['appdate']."</td>";
echo"<td>".$row['phoneno']."</td>";
echo"<td>".$row['dop']."</td>";
echo"<td>".$row['branch']."</td>";
echo"<td>".$row['academicyear']."</td>";
echo"<td>".$row['percentage']."</td>";
echo"<td>".$row['caste']."</td>";
echo"<td>".$row['subcaste']."</td>";
echo"<td>".$row['admtype']."</td>";
echo"<td>".$row['school']."</td>";
echo"<td>".$row['lcno']."</td>";
echo"<td>".$row['grno']."</td>";
echo"<td>".$row['date']."</td>";
echo"</tr>";
echo"</table>" ;
?>
<input type="checkbox" name="agree" value="agree">


<?php
echo"<br>";
}