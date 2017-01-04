<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP To Do List</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <main>
      <h1>To Do List in <em>PHP</em></h1>
      <form method="post">
        <label for="task">Add a new task: </label><input type="text" name="task" />
        <input type="submit" name="addTask" />
      </form>
        <?php
          if(isset($_POST['task'])) {
            $new_task = $_POST['task'];
            $tasks = fopen('tasks.php', 'a');
            fwrite($tasks, $new_task."\n");
            fclose($tasks);
          }
          $tasks = file('tasks.php');
          $count_tasks = count($tasks);
          $index = 1;
          foreach ($tasks as $todo) {
          echo "<input type='checkbox' name='task_$index' class='task'/><p>$todo</p>";
          $index++;
        }
         ?>
    </main>
  </body>
</html>
