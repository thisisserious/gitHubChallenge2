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
      echo 'My first line of PHP!';

      // if else statements
      $items = 97;
      if($items > 5) {
        echo 'You get a 10% discount!';
      } else {
        echo 'You get a 5% discount.';
      }
      $name = 'Lambert';
      $demeanor = 'the sheepish lion';
      if($name != $demeanor) {
        echo $name . ', ' . $demeanor . '.';
      } else {
        echo 'boo.';
      }

      // switch statement using 'falling through'
      $number = 37;

      switch ($number) { // can also use a colon after closing parens instead of curly brace
        case 30:
          echo '$number is ' . $number;
          break;
        case 31:
        case 32:
        case 33:
        case 34:
        case 35:
        case 36:
        case 37:
          echo '$number is between 31 and ' . $number;
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
          echo 'Calling number ' . $number . '. Number ' . $number . ', please pick up.';
          break;
        default:
          echo 'Boo.';
        endswitch;
      // end of 2nd practice switch statement using the form w/out curly brackets

      // php -S localhost:8000 <-- my new best friend; terminal line, built-in server for PHP

      // arrays
      $threeStooges = array("Moe", "Curly", "Larry", "Schemp");
      unset($threeStooges[3]); // can delete the whole array or a specific index

      foreach($threeStooges as $stooges) {
        print "<p>$stooges</p>";
      }
      // end of arrays
      
      ?>
    </p>
  </body>
</html>
