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
      include 'home.php';
      $_SESSION['name'] = $name;
      echo "<p>Your name is " . $_SESSION['name'] . "!</p>";
      $myfile = fopen("home.php", "a+");
      $writeToFile = fopen("home.php", "w");
      $firstName = "Laura\n";
      fwrite($writeToFile, $firstName);
      $lastName = "Abend\n";
      fwrite($writeToFile, $lastName);
      fclose($myfile);
      include 'footer.php';
     ?>
  </body>
</html>
