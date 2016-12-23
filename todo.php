<?php
$tasks = array();
$newTask = $_POST["task"];
array_push($tasks, $newTask);
print_r($tasks);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP To Do List</title>
  </head>
  <body>
    <main>
      <h1>To Do List in <em>PHP</em></h1>
      <form method="post">
        <label for="task">Add a new task: </label><input type="text" name="task" />
        <input type="submit" name="addTask" />
      </form>
      <ul>
        <?php
          foreach ($tasks as $todo) {
          echo "<li>$todo</li>";
        }
         ?>
      </ul>
    </main>
  </body>
</html>
