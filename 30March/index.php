
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form</title>
  </head>
  <body>
    <form action="display.php" method="post">
      <table>
      <tr>
        <td>Name:</td>
        <td><input type="text" name="name" value="" required/></td>
      </tr>

      <tr>
          <td>Age:</td>
          <td><input type="number" name="age" value="" required/></td>
      </tr>
      <tr>
        <td>Gender:</td>
        <td><input type="radio" name="gender" value="Male" />Male</td>
        <td><input type="radio" name="gender" value="Female"/>Female</td>
      </tr>

      <tr>
          <td>Address:</td>
          <td><textarea name="address" placeholder="enter your address here"value="" required></textarea></td>
      </tr>

      <tr>
        <td>Country:</td>
        <td><select name="country" size="4" required>
        <option>Malaysia</option>
        <option>Myanmar</option>
        <option>Sinagpore</option>
      </td>
      </select>
      </tr>

      <tr>
        <td>
          Email:
        </td>
        <td>
          <input type="email" name="email" value="" placeholder="acc@domain.com">
        </td>

      <tr>
        <td><input type="submit" name="submit" value="submit"></td>
        <td><input type="reset" name="clear" value="clear"></td>
      </tr>

  </table>
    </form>
  </body>
</html>
<script type="text/javascript">
  http://localhost:35729/livereload.js
</script>
