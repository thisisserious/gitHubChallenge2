<?php
$name = 'Laura Abend';
$learning = array('PHP', 'JavaScript', 'Angular', 'HTML5', 'CSS3');
array_push($learning, 'Bootstrap');
array_push($learning, 'Git & GitHub');
array_push($learning, 'jQuery');
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$mathOperation = $_POST["operator"];
$weapon = $_POST["weapon"];
$random_num = rand(0, 2);
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
        echo "<p>Please enter some numbers and select a math operator.</p>";
    endswitch;
     ?>
     <hr />
  </section>
  <section id="game">
    <h4>PHP Rock, Paper, Scissors</h4>
    <form method="post">
      <label for="value1">Weapon of choice: </label><input type="text" name="weapon" />
      <input type="submit" name="play" />
    </form>
    <?php
    echo "<p>You chose $weapon</p>";
    $computers_weapon = "";
    switch($random_num):
      case 0:
        $computers_weapon = "rock";
        echo "<p>The computer chose $computers_weapon</p>";
        break;
      case 1:
        $computers_weapon = "paper";
        echo "<p>The computer chose $computers_weapon</p>";
        break;
      case 2:
        $computers_weapon = "scissors";
        echo "<p>The computer chose $computers_weapon</p>";
        break;
      default:
        echo "<p>The computer does not know what the computer chose...</p>";
    endswitch;
    ?>
    <?php
      if($computers_weapon == "rock" && $weapon == "rock") {
        echo "<p>You both chose $weapon, it's a tie!</p>";
      } elseif($computers_weapon == "rock" && $weapon == "paper") {
        echo "<p>$weapon covers $computers_weapon, you win!</p>";
      } elseif($computers_weapon == "rock" && $weapon == "scissors") {
        echo "<p>$computers_weapon smashes $weapon, you lose!</p>";
      } else {
        echo "<p>Try again!</p>";
      }
     ?>
    <hr />
  </section>
  </main>
  </body>
  <footer><?php include 'footer.php'; ?></footer>
</html>
