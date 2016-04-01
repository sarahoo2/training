<?php
require_once "config.php";
$query= "SELECT firstname from users ";
$result=$con->query($query);
?>

<!DOCTYPE html>
<html>
<head><title>HTML CONTROLS</title>
  //this is Ajax  embed.
  <script type="text/javascript"    src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js">
  </script>

  //script.
  <script type="text/javascript">
    $(function(){
      $("#selectkit").change(function(){
        if ($(this).val() =="Y"){
          $("#sectionbody").show();
        }else {
          $("#sectionbody").hide();
        }
      });
    });
  </script>

<link rel="stylesheet" href="styleHelloKittie.css">
</head>

<body>
  <div class="top">
    HTML CONTROLS and Hello Kitties
  </div>

  <div class="left">
    <span id="drop" style="margin-left:100px;"> This is drop down</span> </br>
    <label style="color:pink; "> Select kittiels</label>

    <select id="selectkit">
      <option value="Y">show</option>
      <option value="N">hide</option>
    </select>

     <hr/>


  </div>

  <div id="sectionbody" >
    This is textbox:
    <input type="text" id="txt" />


<?php
    echo "<select id='selectkit'>";
    while ($row=mysqli_fetch_array($result)){
      echo "<option value='".$row['firstname']."'>"
       . $row['firstname'] ."</option>";
    }
    echo "</select>";
?>


<select id="selectkit">
    <?php foreach ($result as $value){ ?>
     <option><?php echo $value['firstname'];?></option>
    <?php } ?>
</select>
  </div>
  <br/>

  <div id="footer">
    Copyright @ HelloKitties.com
  </div>
</body>
</html>
