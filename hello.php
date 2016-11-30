<?php
// running a program from the command line [found in PHP The Right Way]
if ($argc !== 2) {
    echo "Usage: php hello.php [name].\n";
    exit(1);
}
$name = $argv[1];
echo "Hello, $name\n";
 ?>
