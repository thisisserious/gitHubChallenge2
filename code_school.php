<?php
$name = 'Laura Abend';
$learning = array('PHP', 'JavaScript', 'Angular', 'HTML5', 'CSS3');
array_push($learning, 'Bootstrap');
array_push($learning, 'Git & GitHub');
array_push($learning, 'jQuery');
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$mathOperation = $_POST["operator"];
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
    <hr />
  </section>
  <section id="calculator">
    <h4>PHP Calculator</h4>
    <form method="post">
      <label for="value1">Value 1: </label><input type="number" name="num1" />
      <div><input type="radio" name="operator" value="add" />+</div>
      <div><input type="radio" name="operator" value="subtract" />-</div>
      <div><input type="radio" name="operator" value="multiply" />x</div>
      <div><input type="radio" name="operator" value="divide" />/</div>
      <label for="value2">Value 2: </label><input type="number" name="num2" />
      <input type="submit" name="calculate" />
    </form>
    <?php
    switch ($mathOperation):
      case "add":
        $sum = $num1 + $num2;
        echo "<p>$num1 + $num2 = $sum</p>";
        break;
      case "subtract":
        $diff = $num1 - $num2;
        echo "<p>$num1 - $num2 = $diff</p>";
        break;
      case "multiply":
        $factor = $num1 * $num2;
        echo "<p>$num1 x $num2 = $factor</p>";
        break;
      case "divide":
        $quotient = $num1 / $num2;
        echo "<p>$num1 / $num2 = $quotient</p>";
        break;
      default:
        echo "<p>None of the above.</p>";
    endswitch;
     ?>
     <hr />
  </section>
  </main>
  </body>
  <footer><?php include 'footer.php'; ?></footer>
</html>
