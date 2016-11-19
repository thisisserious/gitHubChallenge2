<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Learning PHP</title>
  </head>
  <body>
    <p>
      <?php

      // testing it out
      echo '<p>My first line of PHP!</p>';

      // if else statements
      $items = 97;
      if($items > 5) {
        echo '<p>You get a 10% discount!</p>';
      } else {
        echo '<p>You get a 5% discount.</p>';
      }
      $name = 'Lambert';
      $demeanor = 'the sheepish lion';
      if($name != $demeanor) {
        echo "<p>$name, $demeanor!</p>";
      } else {
        echo 'boo.';
      }

      // switch statement using 'falling through'
      $number = 37;

      switch ($number) { // can also use a colon after closing parens instead of curly brace
        case 30:
          echo '<p>$number is $number</p>';
          break;
        case 31:
        case 32:
        case 33:
        case 34:
        case 35:
        case 36:
        case 37:
          echo "<p>\$number is between 31 and $number.</p>";
          break;
        case 38:
        case 39:
          echo '$number is 38 or 39';
          break;
        default:
          echo 'I give up.';
      } // and replace this curly brace with endswitch; for better readability
      // end of switch statement

      // another practice switch statement since the internet is down
      switch ($number):
        case 137:
        case 73:
        case 3:
          echo $number . 'is your number!';
          break;
        case 37:
          echo "<p>Calling number {$number}. Number {$number}, please pick up.</p>"; // an efficient way to include $vars in a string; note: need double quotes
          break;
        default:
          echo 'Boo.';
        endswitch;
      // end of 2nd practice switch statement using the form w/out curly brackets

      // php -S localhost:8000 <-- my new best friend; terminal line, built-in server for PHP

      // arrays & foreach loop
      $threeStooges = array("Moe", "Curly", "Larry", "Shemp");
      unset($threeStooges[3]); // can delete the whole array or a specific index

      foreach($threeStooges as $stooges) {
        print "<p>$stooges</p>";
      }
      // end of arrays

      // for loop
      for ($index = 0; $index <= 100; $index = $index + 10) {
        echo "<li>$index</li>";
      }
      // end of for loop

      // while loop
      $anotherNumber = 87;
      while($anotherNumber <= 103): // alternate to curly braces
        $anotherNumber = $anotherNumber + 2;
        echo "<p>$anotherNumber</p>";
      endwhile; // alternative way to write 'while' loop, uing colon at the start and 'endwhile' to...end the while loop

      // do while loop
      $newNumber = 50;
      do {
        $newNumber = $newNumber - 5;
        echo "<p>{$newNumber}</p>";
      } while ($newNumber > 0);
      // end of while & do while loops

      ?>
    </p>
  </body>
</html>
