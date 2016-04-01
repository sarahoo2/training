<?php
  require_once "config.php";

  $query= "SELECT firstname from users ";
  $result=$con->query($query);
  $row=mysqli_fetch_array($result);
 ?>





<!DOCTYPE html>
<html>
  <head><title>HTML CONTROLS</title>
    <script type="text/javascript"    src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js">
    </script>
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

  <style>
  .top{
    background-color: PaleVioletRed ;
    color:white;
    padding:20px;
    text-align:center;

  }
  .left{
    line-height: 30px;
    width:30%;
    height:300px;
    padding:10px;
    background-color:PapayaWhip ;
    float:left;
  }

  span#drop{
    font-style: oblique;
    text-align: center;
    font-size: 20px;
    color:pink;

  }
  #selectkit{
    margin-left:10px;
    color:Pink;
    fontsize:15px;
  }
  #sectionbody{
    width:350px;
    float:left;
    padding:10px;
  }
  #footer{
    background-color: PaleVioletRed;
    color:white;
    clear:both;
    text-align:center;
    padding:5px;
  }

  </style>
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

      <?php
          $result=mysqli_fetch_array($result);
          echo $result[0];
       ?>
       <hr/>


    </div>


    <div id="sectionbody" >
      This is textbox:
      <input type="text" id="txt" />

      <select id="selectkit">
        <option><?php echo $row['firstname'];?> </option>
      </select>

      <select id="selectkit">
        <?php $row = "";
        while($row=mysqli_fetch_array($result)){
        ?>
        <option>
        <?php  echo $row['firstname']; ?>
        </option>
        <?php } ?>
      </select>
      </div>
    <br/>

    <div id="footer">
      Copyright @ HelloKitties.com
    </div>
</body>
</html>
