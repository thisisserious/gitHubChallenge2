<?php
$name = 'Laura Abend';
$learning = array('PHP', 'JavaScript', 'Angular', 'HTML5', 'CSS3');
array_push($learning, 'Bootstrap');
array_push($learning, 'Git & GitHub');
array_push($learning, 'jQuery');
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$add = $_POST["add"];
$subtract = $_POST["subtract"];
$multiply = $_POST["multiply"];
$divide = $_POST["divide"];
// $mathOperation = $_POST["radio"];
echo "<h1>$add</h1>";
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Code School PHP Lessons</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <main>
    <h1><?php echo $name; ?></h1>
    <p><?php echo 'Hello world!'; ?></p>
    <section>
    <h3>I am learning:</h3>
    <ul>
      <?php
      shuffle ($learning);
      foreach ($learning as $subject) {
        echo "<li>{$subject}</li>";
      }
      ?>
      <!-- <li>This is the array that prints the above list items: <?php print_r($learning); ?></li> -->
    </ul>
    <h3>...and so much more!</h3>
  </section>
  <section>
    <form method="post">
      <input type="number" name="num1" />
      <input type="number" name="num2" />
      <div><input type="radio" name="add" />Add</div>
      <div><input type="radio" name="subtract" />Subtract</div>
      <div><input type="radio" name="multiply" />Multiply</div>
      <div><input type="radio" name="divide" />Divide</div>
      <input type="submit" name="calculate" />
    </form>
    <p>1st number: <?php echo $num1; ?></p>
    <p>2nd number: <?php echo $num2; ?></p>
    <?php
    switch($mathOperation):
      case $add:
        $sum = $num1 + $num2;
        echo "<p>$sum</p>";
        break;
      case $subtract:
        $diff = $num1 - $num2;
        echo "<p>$diff</p>";
        break;
      case $multiply:
        $factor = $num1 * $num2;
        echo "<p>$factor</p>";
        break;
      case $divide:
        $quotient = $num1 / $num2;
        echo "<p>$quotient</p>";
        break;
      default:
        echo "<p>None of the above.</p>";
    endswitch;
     ?>
  </section>
  </main>
  </body>
  <footer><?php include 'footer.php'; ?></footer>
</html>
