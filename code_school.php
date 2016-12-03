<?php
$name = 'Laura Abend';
$learning = array('PHP', 'JavaScript', 'Angular', 'HTML5', 'CSS3');
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Code School PHP Lessons</title>
  </head>
  <body>
    <h1><?php echo $name; ?></h1>
    <p><?php echo 'Hello world!'; ?></p>
    <h3>I am learning:</h3>
    <ul>
      <li><?php echo $learning[0]; ?></li>
      <li><?php echo $learning[1]; ?></li>
      <li><?php echo $learning[2]; ?></li>
      <li><?php echo $learning[3]; ?></li>
      <li><?php echo $learning[4]; ?></li>
    </ul>
    <h3>...and so much more!</h3>
  </body>
  <footer><?php include 'footer.php'; ?></footer>
</html>
