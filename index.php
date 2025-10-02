<link rel="stylesheet" href="https://cdn.simplecss.org/simple-v1.css">
<?php
// Egyszerű autoloader a kód betöltéséhez a mappaszerkezet alapján.
spl_autoload_register(function ($class) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});
echo "szia";

?>