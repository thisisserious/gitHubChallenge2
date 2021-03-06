<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Learning PHP</title>
  </head>
  <body>
    <p>
      <?php
      if( ! ini_get('date.timezone') )
      {
          date_default_timezone_set('GMT');
      }
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

      // arrays & built-in functions
      $the_array = array(35, 21, 333, 57, 93);
      sort($the_array);
      // print join(', ', $the_array);
      rsort($the_array);
      // print join(', ', $the_array);

      $family = array();
      array_push($family, "Josh");
      array_push($family, "Arthur Jr.");
      array_push($family, "Cathy");
      array_push($family, "Michelle");
      array_push($family, "Elizabeth");
      array_push($family, "Arthur III");
      array_push($family, "John");
      array_push($family, "Ruth");

      $count = count($family) - 1;

      // Sort the array
      sort($family);
      // print join(', ', $family);

      // Randomly select a winner
      $random = rand(0, $count);
      $winner = strtoupper($family[$random]);
      $winnerLowercase = strtolower($family[$random]);

      // Print the winner's name in ALL CAPS
      print "<p>The winner is {$winner}!</p>";
      // Print the winner's name in lowercase
      print "<p>The winner is {$winnerLowercase}!</p>";
      // end of arrays & built-in functions

      // user-defined function
      function stooge($threeStooges) {
        print "<p>{$threeStooges[1]}</p>";
      }

      stooge($threeStooges);

      // objects, properties, methods <- OOP
      class Person {
           public $isAlive = true;
           public $firstname;
           public $lastname;
           public $age;
           public function __construct($firstname, $lastname, $age) {
               $this->firstname = $firstname;
               $this->lastname = $lastname;
               $this->age = $age;
           }
           public function greet() {
               return "<p>Hello, my name is " . $this->firstname . " " . $this->lastname . ". Nice to meet you!</p>";
           }
       }

       $teacher = new Person("Samwise", "Gamgee", 57);
       $student = new Person("Bob", "Hope", 100);

       echo $teacher->greet();
       echo $student->greet();

      //  Object-oriented programming (OOP):
          // - class, object <-- create objects using classes
          // add properties to a class
          // add methods to a class
          // __construct method and 'new' keyword
          // arrow notation

          class Person2 {
            static public function say() {
              echo "Here are my thoughts! ";
            }
          }
          class Blogger extends Person2 {
            const cats = 50;
          }
          // scope resolution operator ::
          Blogger::say();
          echo Blogger::cats;
      // end of OOP lesson

      // iterating over associative arrays
      $ninjaTurtles = array('Michelangelo' => 'orange',
        'Donatello' => 'purple',
        'Leonardo' => 'blue',
        'Raphael' => 'red');

        foreach ($ninjaTurtles as $turtle=>$colored) {
          echo "<p>{$turtle}'s {$colored} belt!</p>";
        }

        // To loop through an array containing values only, you can use the for loop.
        // For an array containing keys and values, you can use the foreach loop.

        $myArray = array("eenie", "meenie", "miney", "moe");

        $length = count($myArray);
        for($index = 0; $index < $length; $index++) {
          echo $myArray[$index] . " ";
        }
      // end of advanced arrays

      // time; still needs some tweaking, getting an odd error - may be an outdated function
      $raw = '11. 22. 1968';
      $start = DateTime::createFromFormat('d. m. Y', $raw);
      echo 'Start date: ' . $start->format('m-d-Y');

      // shuffle
      $numbers = range(1, 20);
      shuffle($numbers);
      foreach ($numbers as $number) {
        echo "$number ";
      }
      // end of shuffle
      ?>

    </p>
    <!-- // fizzbuzz challenge -->
    <section id="fizzbuzz">
      <?php
      for($number = 1; $number <= 100; $number++) {
        if($number % 3 == 0 && $number % 5 == 0) {
        echo "<p>FizzBuzz</p>";
        } elseif($number % 3 == 0) {
          echo "<p>Fizz</p>";
        } elseif($number % 5 == 0) {
          echo "<p>Buzz</p>";
        } else {
          echo "<p>$number</p>";
        }
      }
       ?>
    </section>
    <!-- end of fizzbuzz challenge -->
  </body>
</html>
