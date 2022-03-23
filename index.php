<?php
    INCLUDE("database.php");
?>
<html>
  <head>
    <title>Sales</title>
  </head>
  <body>
   <h2>Current Sales</h2>
   <form action="index.php" method="POST">
     <label for="fname">First Name</label><br>
    <input type="text" name="first_name" id="fname"><br><br>

    <label for="lname">Last Name</label><br>
    <input type="text" name="last_name" id="lname"><br><br>

    <label for="id">Customer ID</label><br>
    <input type="number" name="customer_id" id="id"><br><br>

    <label for="city">City</label><br>
    <input type="text" name="city" id="city"><br><br>

    <label for="state">State</label><br>
    <input type="text" name="state" id="state"><br><br>

    <input type="submit" name="submit" value="Submit">
   </form>
    <?php
       connect();
       salesTable();
       updateTable();
       close();
    ?>
  </body>
</html>