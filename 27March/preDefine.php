

<?php
ini_set ('display_errors', 1);
error_reporting (0);error_reporting (E_ALL);error_reporting (E_ALL & ~E_NOTICE);
  $title=$_POST['title'];
  $name=$_POST['name'];
  $response=$_POST['response'];
  $comments=$_POST['comments'];
print "<p> Thank you , $title $name, for your comments.</p>
      <p> You stated that you found this example to be '$response' and
      added:<br /> $comments</p>";

 ?>
