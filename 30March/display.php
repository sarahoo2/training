<?php
require_once "config.php";
session_start();
if(isset($_POST['name']))
{


 $_SESSION['name']=$_POST['name'];
 $_SESSION['age']=$_POST['age'];
 $_SESSION['address']=$_POST['address'];
 $_SESSION['email'] =$_POST['email'];
 $_SESSION['country']=$_POST['country'];
}
if(isset($_POST['save']))
{
   $name   =$_SESSION['name'];
   $age    =$_SESSION['age'];
   $address=$_SESSION['address'];
   $email  =$_SESSION['email'];
   $country=$_SESSION['country'];

  $query="SELECT * from biodata where name='$name' AND email='$email'";
  $checkUser=$con->query($query);

  if($checkUser->num_rows> 0)
  {
    echo "Already exist";
  }
  else
  {
    $sql = "INSERT INTO biodata (name,age,address,email,country) VALUES ('$name','$age','$address','$email','$country')";
    if($con->query($sql)===true){
      echo "Successfully inserted";
    }
    else {
      echo "error". $sql."<br />". $con->error;
      }

    }

  }


 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form  action="display.php" method="post">
       <p>
         Name: <?= $_SESSION['name']; ?>
       </p>
       <p>
         Age: <?= $_SESSION['age']; ?>
       </p>
       <p>
         address: <?= $_SESSION['address']; ?>
       </p>
       <p>
         Email: <?= $_SESSION['email']; ?>
       </p>
       <p>
         Country: <?= $_SESSION['country']; ?>
       </p>

      <input id="saveButton" type="submit" name="save" value="Save">
      <input id="okayButton" type="button" name="okay" value="Okay">
     </form>
   </body>
 </html>
 <script type="text/javascript">
   $(function(){
     $('#saveButton').click(function(){
       $(this).hide();
    $('#okayButton').show();
   });
   });
 </script>
