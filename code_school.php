<?php
$name = 'Laura Abend';
$learning = array('PHP', 'JavaScript', 'Angular', 'HTML5', 'CSS3');
array_push($learning, 'Bootstrap');
array_push($learning, 'Git & GitHub');
array_push($learning, 'jQuery');
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Code School PHP Lessons</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <h1><?php echo $name; ?></h1>
    <p><?php echo 'Hello world!'; ?></p>
    <h3>I am learning:</h3>
    <ul>
      <?php foreach ($learning as $subject) {
        echo "<li>{$subject}</li>";
      } ?>
      <li>This is the array that prints the above list items: <?php print_r($learning); ?></li>
    </ul>
    <h3>...and so much more!</h3>
  </body>
  <footer><?php include 'footer.php'; ?></footer>
</html>
