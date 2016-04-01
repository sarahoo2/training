<?php
  $con = new mysqli("localhost","root","","hellokittie");

  if($con->connect_errno)
  {
    die("Connection failed:". $con->connect_error);
  }
    echo $con->host_info . "\n";



  $db_selected = mysqli_select_db($con,'hellokittie');

  if(!$db_selected)
  {
    die ('Cannot use kittie database'.mysql_error());
  }

$sql ="SELECT firstname FROM users";
$result=$con->query($sql);

echo "<select name='selection'>";
while ($row=mysqli_fetch_array($result)){
  echo "<option value='".$row['firstname']."'>"
   . $row['firstname'] ."</option>";

}
echo "</select>";
?>
