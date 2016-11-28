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
      if(isset($_POST['text'])) {
        $name = $_POST['text'];
        $handle = fopen('names.php', 'a');
        fwrite($handle, $name."\n");
        fclose($handle);
      }
      $read = file('names.php'); // the $read variable is an array
      $count = count($read);
      $index = 1;
      foreach ($read as $line) {
        echo $line;
        if($index < $count) {
          echo '| ';
        }
        $index++;
      }
     ?>
     <form method="post">
       Name: <input type="text" name="text" />
       <input type="submit" name="submit" />
     </form>
     <?php
     include 'footer.php';
      ?>
  </body>
</html>
