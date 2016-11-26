<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Solo Learn PHP Lessons</title>
  </head>
  <body>
    <?php
      include 'header.php';
      echo '<p>Hello world - I am learning PHP using <strong>XAMPP</strong> or
      the command line built-in web server! (depending on the day)</p>';
      $address = $_SERVER['SCRIPT_NAME'];
      echo $address;
      $name = 'Laura';
      $_SESSION['name'] = $name;
      echo "<p>Your name is " . $_SESSION['name'] . "!</p>";
      include 'footer.php';
     ?>
  </body>
</html>
