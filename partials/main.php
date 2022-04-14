<?php

spl_autoload_register(function ($class_name) {
    $class_name = str_replace('\\', '/', $class_name);
    include "$class_name.php";
});

echo "<a href='/users'>target</a>";

new app\Init();

echo "<h1 class='starting-title'>Nice to see you! &#128075;</h1>";


