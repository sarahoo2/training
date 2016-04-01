<?php
require_once ("config.php");

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post" enctype="multipart/form-data">
      <input type="file" name="image" />
      <input type="submit" name="submit" value="Upload">
    </form>
  </body>
</html>
<?php
  $file = $_FILES['image']['tmp_name'];
  if(!isset($file))
  echo "Please select an image.";
  else
  {
    $image     = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name=addslashes($_FILES['image']['name']);
    $image_size=getimagesize($_FILES['image']['tmp_name']);

    if($image_size ===FALSE)
    echo "That's not an image.";
    else {
      # code...
    }
  }

 ?>
