<?php
function inverse($x)
{
    if (!$x) {
        throw new Exception('Division by zero.');
    }
    return 1 / $x;
}

try {
    echo inverse(5) . "\n";
    echo "<br>";
    echo inverse(0) . "\n";
} catch (Exception $e) {
    echo "<br>";
    echo 'Caught exception: ',  $e->getMessage(), "\n";
    echo "<br>";
    echo "<br>";
    echo $e->getCode();
    echo "<br>";
    echo "<br>";
    echo $e->getFile();
    echo "<br>";
    echo "<br>";
    echo $e->getLine();
    echo "<br>";
    echo "<br>";
    echo "<pre>";
    var_dump($e->getTrace());
    echo "</pre>";
    echo "<br>";
    echo "<br>";
}

// Continue execution
echo "Hello World\n";
