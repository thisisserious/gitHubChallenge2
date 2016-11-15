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
      ?>
    </p>
  </body>
</html>
